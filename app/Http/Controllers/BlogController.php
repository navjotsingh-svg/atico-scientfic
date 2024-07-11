<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        return view('admin.blog.index');
    }

    public function  create()
    {	
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        try{
            $inputs = $request->all();
            $validator = (new Blog)->validate($inputs);
           
            if( $validator->fails() ) {
                return back()->withErrors($validator)->withInput();
            }

            unset($inputs['slug']);
            $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $inputs['name'])));
            $inputs = $inputs + [ 'slug' => $slug ];

            if(isset($inputs['image']) or !empty($inputs['image']))
            {
            	$image_name = rand(100000, 999999);
	            $fileName = '';
	            if($file = $request->hasFile('image')) 
	            {
	                $file = $request->file('image') ;
	                $img_name = $file->getClientOriginalName();
	                $fileName = $image_name.$img_name;
	                $destinationPath = public_path().'/uploads/blog_images/' ;
	                $file->move($destinationPath, $fileName);
	            }

	            $image = $fileName;
            }
            else{
            	$image = null;
            }

	            unset($inputs['image']);
            $inputs = $inputs + [
                'created_by' => \Auth::user()->id,
                'status'    => isset($request->status)?$request->status:0,
                'image'	=>	$image
            ];
            (new Blog)->store($inputs);
            return redirect()->route('blog.index')
                ->with('success', lang('messages.created', lang('blog.blog')));
        }
        catch (\Exception $exception) {
            return redirect()->route('blog.create')
                ->withInput()
                ->with('error', lang('messages.server_error').$exception->getMessage());
        }
    }

    public function blogPaginate(Request $request, $pageNumber = null)
    {
        if (!\Request::isMethod('post') && !\Request::ajax()) { //
            return lang('messages.server_error');
        }

        $inputs = $request->all();
        $page = 1;
        if (isset($inputs['page']) && (int)$inputs['page'] > 0) {
            $page = $inputs['page'];
        }

        $perPage = 20;
        if (isset($inputs['perpage']) && (int)$inputs['perpage'] > 0) {
            $perPage = $inputs['perpage'];
        }

        $start = ($page - 1) * $perPage;
        if (isset($inputs['form-search']) && $inputs['form-search'] != '') {
            $inputs = array_filter($inputs);
            unset($inputs['_token']);

            $data = (new Blog)->getBlogs($inputs, $start, $perPage);

            $totalblog = (new Blog)->totalBlogs($inputs);
            $total = $totalblog->total;
        } else {
            $data = (new Blog)->getBlogs($inputs, $start, $perPage);
            $totalblog = (new Blog)->totalBlogs($inputs);
            $total = $totalblog->total;
        }
        return view('admin.blog.load_data', compact('inputs', 'data', 'total', 'page', 'perPage'));
    }

    public function blogToggle($id = null)
    {
         if (!\Request::isMethod('post') && !\Request::ajax()) {
            return lang('messages.server_error');
        }

        try {
            $blog = Blog::find($id);
        } catch (\Exception $exception) {
            return lang('messages.invalid_id', string_manip(lang('blog.blog')));
        }

        $blog->update(['status' => !$blog->status]);
        $response = ['status' => 1, 'data' => (int)$blog->status . '.gif'];
        // return json response
        return json_encode($response);
    }

    public function edit($id = null)
    {
        $result = (new Blog)->find($id);
        if (!$result) {
            abort(401);
        }
        return view('admin.blog.create', compact('result'));
    }

    public function update(Request $request, $id = null)
    {
        $result = (new Blog)->find($id);
        if (!$result) {
            abort(401);
        }

        try {
            $inputs = $request->all();
            $validator = (new Blog)->validate($inputs, $id);
            if( $validator->fails() ) {
                return back()->withErrors($validator)->withInput();
            }

            unset($inputs['slug']);
            $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $inputs['name'])));
            $inputs = $inputs + [ 'slug' => $slug ];

            if(isset($inputs['image']) or !empty($inputs['image']))
            {
            	$image_name = rand(100000, 999999);
	            $fileName = '';
	            if($file = $request->hasFile('image')) 
	            {
	                $file = $request->file('image') ;
	                $img_name = $file->getClientOriginalName();
	                $fileName = $image_name.$img_name;
	                $destinationPath = public_path().'/uploads/blog_images/' ;
	                $file->move($destinationPath, $fileName);
	            }
	            $image = $fileName;
            }
            else{
            	$image = $result['image'];
            }


            unset($inputs['image']);
            $inputs = $inputs + [
                'updated_by' => \Auth::user()->id,
                'status'	=>	isset($request->status) ? $request->status : '0',
                'image'	=>	$image
            ];
            (new Blog)->store($inputs, $id);
            return redirect()->route('blog.index')
                ->with('success', lang('messages.updated', lang('blog.blog')));
        } catch (\Exception $exception) {
            return redirect()->route('blog.edit', [$id])
                ->withInput()
                ->with('error', lang('messages.server_error'));
        }
    }
    
   
    
}
