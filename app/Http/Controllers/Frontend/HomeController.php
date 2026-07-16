<?php

namespace App\Http\Controllers\Frontend;
/**
 * :: Homepage Controller ::
 * To manage homepage.
 *
 **/

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\ProductCategory;
use App\Models\Product;
use App\Models\ProductReview;
use App\Models\GroupCategory;
use App\Models\Blog;
use App\Models\BlogComment;
use App\Models\Faq;
use App\Models\Group;

class HomeController extends Controller{
    /**
     * Display a listing of resource.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getProducts($slug=''){
        $slug = trim(urldecode($slug));

        $categories = Category::where('status', 1)
            ->where('name', 'like', '%' . $slug . '%')
            ->orderBy('name', 'asc')
            ->limit(12)
            ->get(['name', 'slug'])
            ->map(function ($category) {
                return [
                    'name' => html_entity_decode(strip_tags($category->name), ENT_QUOTES | ENT_HTML5, 'UTF-8'),
                    'url' => url('/category/' . $category->slug),
                ];
            })
            ->values();

        $products = Product::where('status', 1)
            ->where('name', 'like', '%' . $slug . '%')
            ->orderBy('name', 'asc')
            ->limit(20)
            ->get(['name', 'slug'])
            ->map(function ($product) {
                return [
                    'name' => html_entity_decode(strip_tags($product->name), ENT_QUOTES | ENT_HTML5, 'UTF-8'),
                    'url' => url('/product/' . $product->slug),
                ];
            })
            ->values();

        return response()->json([
            'categories' => $categories,
            'products' => $products,
        ]);
    }

    public function getSearchCategories($slug='', $id=''){
        $slug = trim(urldecode($slug));
        $categories = Category::where('status', 1)
            ->where('name', 'like', '%' . $slug . '%')
            ->where('parent_id', $id)
            ->orderBy('name', 'asc')
            ->limit(30)
            ->get(['name', 'slug']);

        $html = '';
        foreach ($categories as $category) {
            $html .= '<li><a href="' . e(url('/category/' . $category->slug)) . '">' . e(html_entity_decode(strip_tags($category->name), ENT_QUOTES | ENT_HTML5, 'UTF-8')) . '</a></li>';
        }
        return response($html)->header('Content-Type', 'text/html; charset=UTF-8');
    }

    public function getSearchCategoriesProducts($slug='', $id=''){
        $slug = trim(urldecode($slug));
        $categoryIds = $this->categoryIdsWithDescendants($id);
        $p_ids = ProductCategory::whereIn('category_id', $categoryIds)->pluck('product_id')->toArray();
        $products = Product::where('status', 1)
            ->where('name', 'like', '%' . $slug . '%')
            ->whereIn('id', $p_ids)
            ->orderBy('name', 'asc')
            ->limit(30)
            ->get(['name', 'slug']);

        $html = '';
        foreach ($products as $product) {
            $html .= '<li><a href="' . e(url('/product/' . $product->slug)) . '">' . e(html_entity_decode(strip_tags($product->name), ENT_QUOTES | ENT_HTML5, 'UTF-8')) . '</a></li>';
        }
        return response($html)->header('Content-Type', 'text/html; charset=UTF-8');
    }

    protected function categoryIdsWithDescendants($categoryId)
    {
        $ids = [(int) $categoryId];
        $frontier = [(int) $categoryId];

        for ($depth = 0; $depth < 4 && !empty($frontier); $depth++) {
            $children = Category::where(function ($query) use ($frontier) {
                $query->whereIn('parent_id', $frontier)
                    ->orWhereIn('second_parent_id', $frontier)
                    ->orWhereIn('third_parent_id', $frontier)
                    ->orWhereIn('four_parent_id', $frontier);
            })
                ->pluck('id')
                ->map(function ($id) { return (int) $id; })
                ->all();

            $children = array_values(array_diff($children, $ids));
            if (empty($children)) {
                break;
            }
            $ids = array_merge($ids, $children);
            $frontier = $children;
        }

        return array_values(array_unique($ids));
    }
    public function index()
    {
        try {
            $products = Product::where('status', 1)->orderBy('id', 'desc')->take(8)->get();
            $blogs = Blog::where('status', '1')->take(4)->orderBy('id', 'desc')->get();
            $faqs = Faq::where('status', 1)->take(5)->orderBy('id', 'desc')->get();
            $groups = Group::where('status', 1)->take(8)->orderBy('sort', 'asc')->get();
            $groups = $this->attachRelatedProductImagesToGroups($groups);
            $latest_cats = \App\Models\SidebarCategory::join('categories', 'sidebar_categories.category_id', '=', 'categories.id')->select('categories.name', 'categories.slug', 'categories.id', 'categories.image')->take(8)->get();
            $latest_cats = $this->attachRelatedProductImagesToCategories($latest_cats);

            return view('frontend.home', compact('products', 'blogs', 'faqs', 'groups', 'latest_cats'));
        } catch (\Exception $e) {
            \Log::error('Home page error: '.$e->getMessage());

            return view('frontend.home', [
                'products' => collect(),
                'blogs' => collect(),
                'faqs' => collect(),
                'groups' => collect(),
                'latest_cats' => collect(),
            ]);
        }
    }

    /**
     * Prefer a real product photo for each homepage group card.
     */
    protected function attachRelatedProductImagesToGroups($groups)
    {
        $usedImages = [];

        foreach ($groups as $group) {
            if (!empty($group->image)) {
                $usedImages[$group->image] = true;
                continue;
            }

            $categoryIds = GroupCategory::where('group_id', $group->id)->pluck('category_id')->toArray();
            if (empty($categoryIds)) {
                continue;
            }

            $childIds = Category::where(function ($query) use ($categoryIds) {
                $query->whereIn('parent_id', $categoryIds)
                    ->orWhereIn('second_parent_id', $categoryIds)
                    ->orWhereIn('third_parent_id', $categoryIds)
                    ->orWhereIn('four_parent_id', $categoryIds);
            })->pluck('id')->toArray();

            $allCategoryIds = array_values(array_unique(array_merge($categoryIds, $childIds)));
            $productImage = $this->firstProductImageForCategories($allCategoryIds, array_keys($usedImages));

            if ($productImage) {
                $group->image = $productImage;
                $usedImages[$productImage] = true;
                continue;
            }

            $categoryImage = Category::whereIn('id', $categoryIds)
                ->whereNotNull('image')
                ->where('image', '!=', '')
                ->value('image');

            if ($categoryImage) {
                $group->image = $categoryImage;
                $usedImages[$categoryImage] = true;
            }
        }

        foreach ($groups as $group) {
            $group->image_url = $this->optimizedProductImageUrl($group->image ?? null);
        }

        return $groups;
    }

    /**
     * Prefer a related product photo when a category has no image of its own.
     */
    protected function attachRelatedProductImagesToCategories($categories)
    {
        $usedImages = [];

        foreach ($categories as $category) {
            if (!empty($category->image)) {
                $usedImages[$category->image] = true;
                $category->image_url = $this->optimizedProductImageUrl($category->image);
                continue;
            }

            $childIds = Category::where(function ($query) use ($category) {
                $query->where('parent_id', $category->id)
                    ->orWhere('second_parent_id', $category->id)
                    ->orWhere('third_parent_id', $category->id)
                    ->orWhere('four_parent_id', $category->id);
            })->pluck('id')->toArray();

            $allCategoryIds = array_values(array_unique(array_merge([$category->id], $childIds)));
            $productImage = $this->firstProductImageForCategories($allCategoryIds, array_keys($usedImages));

            if ($productImage) {
                $category->image = $productImage;
                $usedImages[$productImage] = true;
            }

            $category->image_url = $this->optimizedProductImageUrl($category->image ?? null);
        }

        return $categories;
    }

    protected function optimizedProductImageUrl($image)
    {
        if (empty($image)) {
            return asset('assets/images/no_product.png');
        }

        $thumbRel = 'uploads/product_images/thumbs/' . pathinfo($image, PATHINFO_FILENAME) . '.webp';
        if (is_file(public_path($thumbRel))) {
            return asset($thumbRel);
        }

        return asset('uploads/product_images/' . $image);
    }

    protected function firstProductImageForCategories(array $categoryIds, array $excludeImages = [])
    {
        if (empty($categoryIds)) {
            return null;
        }

        $query = Product::join('product_categories', 'products.id', '=', 'product_categories.product_id')
            ->whereIn('product_categories.category_id', $categoryIds)
            ->where('products.status', 1)
            ->whereNotNull('products.image')
            ->where('products.image', '!=', '');

        if (!empty($excludeImages)) {
            $query->whereNotIn('products.image', $excludeImages);
        }

        $image = $query->orderByDesc('products.id')->value('products.image');

        if ($image || empty($excludeImages)) {
            return $image;
        }

        // Fallback if every matching product image was already used.
        return Product::join('product_categories', 'products.id', '=', 'product_categories.product_id')
            ->whereIn('product_categories.category_id', $categoryIds)
            ->where('products.status', 1)
            ->whereNotNull('products.image')
            ->where('products.image', '!=', '')
            ->orderByDesc('products.id')
            ->value('products.image');
    }

    public function showCaptchaForm()
    {
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
    
        return view('frontend.captcha', compact('num1', 'num2'));
    }
    
    

    //About us Page Function
    public function aboutUsPage()
    {
        try{
            return view('frontend.pages.about_us');
        } catch(\Exception $e){
            return back();
        }
    }


    //Products catalog (aticoexports-style category grid)
    public function productsCatalog()
    {
        try {
            $categories = Category::where('status', 1)
                ->where('parent_id', 0)
                ->orderBy('name', 'asc')
                ->select('id', 'name', 'slug', 'image')
                ->get();

            if ($categories->isEmpty()) {
                $categories = collect($this->defaultProductCategories())->map(function ($item) {
                    return (object) $item;
                });
            }

            $sideCategories = sidebarCategories();
            if ($sideCategories->isEmpty()) {
                $sideCategories = collect($categories)->map(function ($item) {
                    return (object) [
                        'name' => $item->name,
                        'slug' => $item->slug,
                        'id' => $item->id ?? null,
                        'sub_cats' => collect(),
                    ];
                });
            }

            return view('frontend.pages.products_index', compact('categories', 'sideCategories'));
        } catch (\Exception $e) {
            return back();
        }
    }

    /**
     * Fallback catalogue matching aticoexports.com/products when local categories are empty.
     */
    protected function defaultProductCategories()
    {
        $slides = [
            'assets/images/export-slides/Image1.webp',
            'assets/images/export-slides/Image2.webp',
            'assets/images/export-slides/Image3.webp',
            'assets/images/export-slides/Image4.webp',
            'assets/images/export-slides/Image5.webp',
            'assets/images/export-slides/Image6.webp',
            'assets/images/export-slides/Image7.webp',
            'assets/images/export-slides/Image8.webp',
        ];

        $names = [
            ['Automobile Engineering Lab Equipment', 'automobile-engineering-lab-equipment'],
            ['Automotive and Transportation Technology', 'automotive-and-transportation-technology'],
            ['Biology Lab Equipment', 'biology-lab-equipment'],
            ['Biomedical Lab Equipment', 'biomedical-lab-equipment'],
            ['Chemical Engineering Lab Equipment', 'chemical-engineering-lab-equipment'],
            ['Chemistry Lab Equipment', 'chemistry-lab-equipment'],
            ['Civil Engineering Lab Equipment', 'civil-engineering-lab-equipment'],
            ['Educational Lab Equipment', 'educational-lab-equipment'],
            ['Educational Lab Trainer Kits', 'educational-lab-trainer-kits'],
            ['Electrical Engineering Lab Equipment', 'electrical-engineering-lab-equipment'],
            ['Electronics Lab Trainer Kits', 'electronics-lab-trainer-kits'],
            ['Engineering Lab Equipments & Kits', 'engineering-lab-equipments-kits'],
            ['Engineering Lab Trainer Equipments', 'engineering-lab-trainer-equipments'],
            ['Fluid Mechanics Lab Equipment', 'fluid-mechanics-lab-equipment'],
            ['Hybrid Electrical Vehicle Hydrogen Fuel Technologies', 'hybrid-electrical-vehicle-hydrogen-fuel-technologies'],
            ['Laboratory Equipments', 'laboratory-equipments'],
            ['Laboratory Microscope', 'laboratory-microscope'],
            ['Material Testing Lab Equipment', 'material-testing-lab-equipment'],
            ['Mathematics Lab Equipment', 'mathematics-lab-equipment'],
            ['Mechanical Engineering Lab Equipment', 'mechanical-engineering-lab-equipment'],
            ['Medical Lab Equipment (Pharmacy Lab Equipment)', 'medical-lab-equipment-pharmacy-lab-equipment'],
            ['Metallurgical Engineering Lab Equipment', 'metallurgical-engineering-lab-equipment'],
            ['Mining Laboratory Equipment', 'mining-laboratory-equipment'],
            ['OilField Petroleum Testing Equipment', 'oilfield-petroleum-testing-equipment'],
            ['Physics Lab Equipment', 'physics-lab-equipment'],
            ['Physics Lab Experiments Setup', 'physics-lab-experiments-setup'],
            ['Research Lab Equipment', 'laboratory-research-equipment'],
            ['STEM Lab Kits', 'stem-lab-kits'],
            ['School Science Lab Equipment', 'school-science-lab-equipment'],
            ['School Science Lab Kits', 'school-science-lab-kits'],
            ['Specialised Engineering Labs', 'specialised-engineering-labs'],
            ['Technical Education Equipments', 'technical-education-equipments'],
            ['Testing Lab Machines', 'testing-lab-machines'],
            ['Vocational Training Lab Equipment (TVET)', 'vocational-training-lab-equipment-tvet'],
        ];

        $list = [];
        foreach ($names as $i => $row) {
            $list[] = [
                'id' => $i + 1,
                'name' => $row[0],
                'slug' => $row[1],
                'image' => $slides[$i % count($slides)],
                'image_is_asset' => true,
            ];
        }

        return $list;
    }

    //Products Function
    public function productsPage()
    {
        return $this->productsCatalog();
    }

    //Product Detail Function
    public function productDetailPage($slug=null)
    {
        try{
            if(!$slug){
                return redirect()->route('404_page');
            }
            $product = Product::where('slug', $slug)->first();
            $keyword = Product::where('slug', $slug)->select('meta_title', 'meta_description', 'meta_tag', 'slug')->first();
            if(!$product){
                return redirect()->route('404_page');   
            }
            $product_reviews = ProductReview::where('product_id', $product['id'])->where('status', 1)->get();       
            return view('frontend.pages.product_detail', compact('product', 'product_reviews', 'keyword'));
        } catch(\Exception $e){
           // dd($e);
            return back();
        }
    }

    //Blog page Function
    public function blogPage()
    {
        try{
            $blogs = Blog::where('status', 1)->orderBy('id', 'desc')->get();
            //dd($blogs);
            return view('frontend.pages.blogs', compact('blogs'));
        } catch(\Exception $e){
            return back();
        }
    }

    //Blog Detail Function
    public function blogDetailPage($slug)
    {
        try{
            $blog = Blog::where('slug', $slug)->first();
            if(!$blog){
                return redirect()->route('404_page');
            }
            $keyword = Blog::where('slug', $slug)->select('meta_title', 'meta_description', 'meta_tag')->first();
            
            $latest_blogs = Blog::where('status', 1)->where('id', '!=', $blog['id'])->take('6')->get();
            $blog_comments = BlogComment::where('blog_id', $blog['id'])->where('status', 1)->get();
            return view('frontend.pages.blog_detail', compact('blog', 'latest_blogs', 'blog_comments', 'keyword'));
        } catch(\Exception $e){
            return back();
        }
    }

    //Contact Us Function
    public function contactUsPage()
    {
        try{
            return view('frontend.pages.contact_us');
        } catch(\Exception $e){
            return back();
        }
    }

    //Faq Function
    public function faqPage()
    {
        try{
            $faqs = Faq::where('status',1)->orderBy('id', 'desc')->get();
            return view('frontend.pages.faq', compact('faqs'));
        } catch(\Exception $e){
            return back();
        }
    }
    //Certificate Function
    public function certificatePage()
    {
        try{
            return view('frontend.pages.certificate');
        } catch(\Exception $e){
            return back();
        }
    }

    //Lab Tender Function
    public function labTenderPage()
    {
        try{
            return view('frontend.pages.lab_tender');
        } catch(\Exception $e){
            return back();
        }
    }

    //termServicePage Function
    public function termServicePage()
    {
        try{
            return view('frontend.pages.terms');
        } catch(\Exception $e){
            return back();
        }
    }

    //testimonial Function
    public function testimonialPage()
    {
        try{
            return view('frontend.pages.testimonials');
        } catch(\Exception $e){
            return back();
        }
    }

    //Categories Function
    public function getCategories($slug = null)
    {
        try{
          //  dd($slug);
            
            if(!$slug){
                
                return redirect()->route('404_page');
            }
            
            
            if($slug == 'mechanical-engineering'){
               $slug = 'mechanical-lab-equipment'; 
            }
            
            if($slug == 'material-testing-equipment'){
               $slug = 'material-testing-lab-equipment'; 
            }
            
            if($slug == 'research-lab-equipment'){
               $slug = 'laboratory-research-equipment'; 
            }
            
            if($slug == 'chemical-reaction-engineering-lab'){
               $slug = 'chemical-engineering-lab-equipment'; 
            }
            
            if($slug == 'fluid-mechanics-lab'){
               $slug = 'fluid-mechanics-lab-equipment'; 
            }
             
           // $category = Category::where('slug', $slug)->where('status', 1)->where('parent_id', 0)->first();
           $category = Category::where('slug', $slug)->where('status', 1)->first();
            //dd($category);
            $keyword = Category::where('slug', $slug)->where('status', 1)->select('meta_title', 'meta_description', 'meta_tag', 'slug')->first();
            if(!$category){
                return redirect()->route('products.index');
            }
           
            if($category['parent_id'] == 0){
                 
                $category_ids = Category::where('slug', $slug)->where('status', 1)->pluck('id')->toArray();
                $categories = Category::whereIn('parent_id', $category_ids)->orwhereIn('second_parent_id', $category_ids)->orwhereIn('third_parent_id', $category_ids)->orwhereIn('four_parent_id', $category_ids)->where('status', 1)->get();
                $cat = Category::whereIn('id', $category_ids)->where('description', '!=', '')->first();
                if(count($categories) == 0){

                    $sub_sub_cat = $cat;
                   
                    $category_ids = Category::where('slug', $slug)->where('status', 1)->pluck('id')->toArray();
                    $product_ids = ProductCategory::whereIn('category_id', $category_ids)->pluck('product_id')->toArray();
                    $products = Product::whereIn('id', $product_ids)->where('status', 1)
                    ->select('products.name', 'products.image', 'products.slug', 'products.description')
                    ->get();

                    return view('frontend.pages.products', compact('products', 'categories', 'sub_sub_cat', 'category', 'keyword'));
                }
                
            }
            else {
                $sub_cats = Category::where('parent_id', $category['id'])->select('id')->get();
                if(count($sub_cats) > 0){
                    $category_ids = Category::where('slug', $slug)->where('status', 1)->pluck('id')->toArray();
                    $cat = Category::whereIn('id', $category_ids)->where('description', '!=', '')->first();
                    $categories = Category::whereIn('parent_id', $category_ids)->where('status', 1)->get();
                    if(count($categories)>0){
                        $sub_cat = Category::where('id', $categories[0]['parent_id'])->first();
                    }
                }
                else{
                   
                    $category_ids = Category::where('slug', $slug)->where('status', 1)->pluck('id')->toArray();
                
                    $cat = Category::whereIn('id', $category_ids)->where('description', '!=', '')->first();
                    if($cat){
                        $sub_sub_cat = $cat;                        
                    }
                    else{
                        $sub_sub_cat = Category::where('slug', $slug)->where('status', 1)->first();
                    }
                    if(isset($sub_sub_cat)){
                        $sub_cat = Category::where('id', $sub_sub_cat['parent_id'])->first();
                        if(isset($sub_cat)){
                            $cat = Category::where('id', $sub_cat['parent_id'])->first();
                        }
                    }
                    
                    $product_ids = ProductCategory::whereIn('category_id', $category_ids)->pluck('product_id')->toArray();
                    $products = Product::whereIn('id', $product_ids)->where('status', 1)
                    ->select('products.name', 'products.image', 'products.slug', 'products.description')
                    ->get();
 
                    return view('frontend.pages.products', compact('products', 'cat', 'sub_cat', 'sub_sub_cat', 'category', 'keyword'));
                }
            }
            
         
            
            return view('frontend.pages.category', compact('categories', 'cat', 'category', 'keyword'));
        } catch(\Exception $e){
            dd($e);
            return back();
        }
    }

    //category Seach Page
    public function categorySearch(Request $request)
    {
        try{
            $inputs = $request->all();
            if(!isset($inputs['slug'])){
                $categories = Category::where('parent_id', 0)->where('name', 'LIKE', '%' . $inputs['q'] . '%')->where('status', 1)->orderBy('id', 'desc')->get(); 
                return view('frontend.pages.all_categories', compact('categories')); 
            }
            $slug = $inputs['slug'];

            $category = Category::where('slug', $slug)->where('status', 1)->first();
            if(!$category){
                return redirect()->route('404_page');   
            }

            if($category['parent_id'] == 0){
                $category_ids = Category::where('slug', $slug)->where('status', 1)->pluck('id')->toArray();
                $categories = Category::whereIn('parent_id', $category_ids)->where('name', 'LIKE', '%' . $inputs['q'] . '%')->where('status', 1)->get();
                $cat = Category::whereIn('id', $category_ids)->where('description', '!=', '')->first();
            }
            else{
                $sub_cats = Category::where('parent_id', $category['id'])->select('id')->get();
                if(count($sub_cats) > 0){
                    $category_ids = Category::where('slug', $slug)->where('status', 1)->pluck('id')->toArray();
                    $categories = Category::whereIn('parent_id', $category_ids)->where('name', 'LIKE', '%' . $inputs['q'] . '%')->where('status', 1)->get();
                    $cat = Category::whereIn('id', $category_ids)->where('description', '!=', '')->first();
                    if(count($categories)>0){
                        $sub_cat = Category::where('id', $categories[0]['parent_id'])->first();
                        //$cat = Category::where('id', $sub_cat['parent_id'])->first();
                    }
                }
                else{
                    $sub_sub_cat = Category::where('slug', $slug)->where('status', 1)->first();
                    if(isset($sub_sub_cat)){
                        $sub_cat = Category::where('id', $sub_sub_cat['parent_id'])->first();
                        if(isset($sub_cat)){
                            $cat = Category::where('id', $sub_cat['parent_id'])->first();
                        }
                    }

                    $category_ids = Category::where('slug', $slug)->where('status', 1)->pluck('id')->toArray();
                    $product_ids = ProductCategory::whereIn('category_id', $category_ids)->pluck('product_id')->toArray();
                    $products = Product::whereIn('id', $product_ids)->where('name', 'LIKE', '%' . $inputs['q'] . '%')->where('status', 1)
                    ->select('products.name', 'products.image', 'products.slug', 'products.description')
                    ->get();

                    return view('frontend.pages.products', compact('products', 'categories', 'cat', 'sub_cat', 'sub_sub_cat', 'category'));
                }
            }
            return view('frontend.pages.category', compact('categories', 'cat', 'category', 'sub_cat'));

        }
        catch(\Exception $e){
            //dd($e);
            return back();
        }
    }

    //Product Seach Page
    public function productSearch(Request $request)
    {
        try{
            $inputs = $request->all();
            $products = Product::where('name', 'LIKE', '%' . $inputs['q'] . '%')->where('status', 1)->orderBy('id', 'desc')->get(); 
            return view('frontend.pages.all_products', compact('products')); 
        }
        catch(\Exception $e){
            //dd($e);
            return back();
        }
    }


    //All Categories
    public function allCategories()
    {
        try{
            $categories = Category::where('parent_id', 0)->where('status', 1)->orderBy('id', 'desc')->select('name', 'slug', 'description', 'image')->get();
            return view('frontend.pages.all_categories', compact('categories'));

        } catch(\Exception $e){
            //dd($e);
            return back();
        }
    }

    //All Products
    public function allProducts()
    {
        try{
            $products = Product::where('status', 1)->orderBy('id', 'desc')->select('name', 'slug', 'description', 'image')->get();
            return view('frontend.pages.all_products', compact('products'));

        } catch(\Exception $e){
            //dd($e);
            return back();
        }
    }

    //test Function
    public function groupCategory($group_id)
    {
        try{
            $categories = GroupCategory::join('categories', 'group_categories.category_id', '=', 'categories.id')->where('group_categories.group_id', $group_id)->select('categories.name', 'categories.slug', 'categories.short_name', 'categories.image', 'categories.description')->get();
            $group = Group::find($group_id);
            return view('frontend.pages.all_categories', compact('categories', 'group'));
        } catch(\Exception $e){
            //dd($e);
            return back();
        }
    }


    //test Function
    public function test()
    {
        try{
            return view('frontend.pages.home');
        } catch(\Exception $e){
            return back();
        }
    }

    public function replaceHTMLTagInDesc()
    {
        $products = Product::where('description', 'LIKE', '%' . '<img' . '%')->get();
        


       // dd($products);
        foreach ($products as $key => $value) {
            $desc = str_replace('[hr type="single" margin_top="4" margin_bottom="4"]', '', $value->description);
            Product::where('id', $value->id)->update(['description'=>$desc]);
        }
        //dd('fsfsd');
    }


    
 public function expPro(){
      try{
    $products =  Product::where('status', 1)->get();

 
      \Excel::create('$products', function($excel) use($products) {
            $excel->sheet('$products', function($sheet) use($products) {
                $excelData = [];
                $excelData[] = [
                'post_title',
                'post_name',
                'ID',
                'post_content',
                'post_status',
                'menu_order',
                'post_date',
                'post_author',
                'comment_status',
                'downloadable',
                'post_excerpt',
                'images',
                'Product Categories',
                
                ];
                foreach ($products as $key => $value) {
                $Category = "";   
                 $cat_p = ProductCategory::where('product_id', $value->id)->first();   
                if( $cat_p){
                $Category = Category::where('id', $cat_p->category_id)->first();
                }
                    
                $excelData[] = [
                $value->name,
                $value->slug,
                '5555'.$value->id,
                $value->description,
                'publish',
                0,
                $value->created_at,
                1,
                'open',
                'no',
                $value->description,
                'http://educational.monroemansions.com/wp-content/uploads/2020/08/'.$value->image,
               
               $Category  != '' ? $Category->name : '',
           
              
                ]; 
                }
                $sheet->fromArray($excelData, null, 'A1', true, false);
            });
            })->download('xlsx');
            
      } catch(\Exception $e){
          
        //  dd($e);
          
      }
        
    }

}
