<?php
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\RequestQuoteController;
use App\Http\Controllers\ProductQueryController;
use App\Http\Controllers\SidebarCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogCommentController;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\SubSubCategoryController;



use Illuminate\Support\Facades\Route;



Route::get('/atico-admin', [AuthController::class, 'getLogin'])->name('admin');
Route::post('/atico-admin/login', [AuthController::class, 'postLogin'])->name('adminlogin');
Route::get('/atico-admin/logout', array('as' => 'admin-logout','uses' => 'Auth\AuthController@adminLogout'));

Route::group(['middleware' => 'auth', 'after' => 'no-cache'], function () {

    Route::prefix('atico-admin')->group(function () {

            //Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);
            Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

            // Change Password Routes
            Route::any('myaccount', ['as' => 'setting.manage-account',
                'uses' => 'SettingController@myAccount']);

            // Change Password Routes

            // Category route start

            Route::resource('category', CategoryController::class, [
                'names' => [
                    'index' => 'category.index',
                    'create' => 'category.create',
                    'store' => 'category.store',
                    'edit' => 'category.edit',
                    'update' => 'category.update',
                ],
                'except' => ['show', 'destroy']
            ]);
            Route::any('category/paginate/{page?}', [CategoryController::class, 'categoryPaginate'])->name('category.paginate');

          //  Route::any('category/paginate/{page?}', ['as' => 'category.paginate',
            //    'uses' => 'CategoryController@categoryPaginate']);
            Route::any('category/toggle/{id?}', ['as' => 'category.toggle',
                'uses' => 'CategoryController@categoryToggle']);
            Route::any('category/drop/{id?}', ['as' => 'category.drop',
                'uses' => 'CategoryController@drop']);

            Route::get('category-excel', [CategoryController::class, 'exportCategory'])->name('category.excel');

            
            Route::get('category-no-product', 'CategoryController@catNoProduct')->name('cat_no_product');
            Route::get('sub-category-no-product', 'SubCategoryController@subCatNoProduct')->name('sub_cat_no_product');
            Route::get('sub-sub-category-no-product', 'SubSubCategoryController@subSubCatNoProduct')->name('sub_sub_cat_no_product');

            Route::get('category-change-status', 'CategoryController@catChangeStatus')->name('cat_change_status');
            Route::get('sub-category-change-status', 'SubCategoryController@subCatChangeStatus')->name('sub_cat_change_status');
            Route::get('sub-sub-category-change-status', 'SubSubCategoryController@subSubCatChangeStatus')->name('sub_sub_cat_change_status');

            Route::get('category-product', 'CategoryController@categoryProduct')->name('category_product');
            Route::get('sub-category-product', 'SubCategoryController@subCategoryProduct')->name('sub_category_product');
            Route::get('replace-cat-name', 'CategoryController@replaceCatLine')->name('replace_cat_name');
            Route::get('duplicate-slug', 'CategoryController@getDuplicateSlug')->name('duplicate_slug');
            //Category Route End

            // Category route start
            // Route::resource('sub_category', 'SubCategoryController', [
            //     'names' => [
            //         'index' => 'sub_category.index',
            //         'create' => 'sub_category.create',
            //         'store' => 'sub_category.store',
            //         'edit' => 'sub_category.edit',
            //         'update' => 'sub_category.update',
            //     ],
            //     'except' => ['show', 'destroy']
            // ]);
            // Route::any('sub_category/paginate/{page?}', ['as' => 'sub_category.paginate',
            //     'uses' => 'SubCategoryController@subCategoryPaginate']);
            // Route::any('sub_category/toggle/{id?}', ['as' => 'sub_category.toggle',
            //     'uses' => 'SubCategoryController@subCategoryToggle']);
            // Route::any('sub_category/drop/{id?}', ['as' => 'sub_category.drop',
            //     'uses' => 'SubCategoryController@drop']);
            // Route::get('sub-category-excel', 'SubCategoryController@exportSubCategory')->name('sub_category.excel');


            Route::resource('sub_category', SubCategoryController::class, [
                'names' => [
                    'index' => 'sub_category.index',
                    'create' => 'sub_category.create',
                    'store' => 'sub_category.store',
                    'edit' => 'sub_category.edit',
                    'update' => 'sub_category.update',
                ],
                'except' => ['show', 'destroy']
            ]);
            Route::any('sub_category/paginate/{page?}', [SubCategoryController::class, 'subCategoryPaginate'])->name('sub_category.paginate');
            Route::any('sub_category/toggle/{page?}', [SubCategoryController::class, 'subCategoryToggle'])->name('sub_category.toggle');
            Route::any('sub_category/drop/{page?}', [SubCategoryController::class, 'drop'])->name('sub_category.drop');
            Route::get('sub-category-excel', [SubCategoryController::class, 'exportSubCategory'])->name('sub_category.excel');

            //Category Route End

            // Category route start
            Route::resource('sub_sub_category', 'SubSubCategoryController', [
                'names' => [
                    'index' => 'sub_sub_category.index',
                    'create' => 'sub_sub_category.create',
                    'store' => 'sub_sub_category.store',
                    'edit' => 'sub_sub_category.edit',
                    'update' => 'sub_sub_category.update',
                ],
                'except' => ['show', 'destroy']
            ]);
            Route::any('sub_sub_category/paginate/{page?}', ['as' => 'sub_sub_category.paginate',
                'uses' => 'SubSubCategoryController@subSubCategoryPaginate']);
            Route::any('sub_sub_category/toggle/{id?}', ['as' => 'sub_sub_category.toggle',
                'uses' => 'SubSubCategoryController@subSubCategoryToggle']);
            Route::any('sub_sub_category/drop/{id?}', ['as' => 'sub_sub_category.drop',
                'uses' => 'SubSubCategoryController@drop']);
           // Route::get('get_sub_cat', 'CategoryController@getSubCategory')->name('get_sub_cat');
            Route::any('get_sub_cat', [CategoryController::class, 'getSubCategory'])->name('get_sub_cat');
           
            Route::get('sub-sub-category-excel', 'SubSubCategoryController@exportSubSubCategory')->name('sub_sub_category.excel');
            
            
            Route::resource('sub_sub_category', SubSubCategoryController::class, [
                'names' => [
                    'index' => 'sub_sub_category.index',
                    'create' => 'sub_sub_category.create',
                    'store' => 'sub_sub_category.store',
                    'edit' => 'sub_sub_category.edit',
                    'update' => 'sub_sub_category.update',
                ],
                'except' => ['show', 'destroy']
            ]);
            Route::any('sub_sub_category/paginate/{page?}', [SubSubCategoryController::class, 'subSubCategoryPaginate'])->name('sub_sub_category.paginate');
            Route::any('sub_sub_category/toggle/{page?}', [SubSubCategoryController::class, 'subSubCategoryToggle'])->name('sub_sub_category.toggle');
            Route::any('sub_sub_category/drop/{page?}', [SubSubCategoryController::class, 'drop'])->name('sub_sub_category.drop');
            Route::get('sub_sub_category/drop/{page?}', [SubSubCategoryController::class, 'exportSubSubCategory'])->name('sub_sub_category.excel');

            //Category Route End


            //Question Import
             Route::get('product/import', ['as' => 'product.import',
                'uses' => 'ProductController@ProductImport']);
             Route::any('product/word/upload', ['as' => 'product-word.upload',
                'uses' => 'ProductController@ProductWordUpload']);

             //Category Import
             Route::get('category/import', 'CategoryController@importCategories')->name('category_import');
             Route::post('category-excel', 'CategoryController@importCategoryStore')->name('category-excel.upload');

             Route::get('get-products', 'ProductController@getProductImage')->name('get_product');

            //Product route start
            // Route::resource('product', 'ProductController', [
            //     'names' => [
            //         'index' => 'product.index',
            //         'create' => 'product.create',
            //         'store' => 'product.store',
            //         'edit' => 'product.edit',
            //         'update' => 'product.update',
            //     ],
            //     'except' => ['show', 'destroy']
            // ]);
            // Route::any('product/paginate/{page?}', ['as' => 'product.paginate',
            //     'uses' => 'ProductController@productPaginate']);
            // Route::any('product/toggle/{id?}', ['as' => 'product.toggle',
            //     'uses' => 'ProductController@productToggle']);
            // Route::any('product/drop/{id?}', ['as' => 'product.drop',
            //     'uses' => 'ProductController@drop']);

                Route::resource('product', ProductController::class, [
                    'names' => [
                       'index' => 'product.index',
                    'create' => 'product.create',
                    'store' => 'product.store',
                    'edit' => 'product.edit',
                    'update' => 'product.update',
                    ],
                    'except' => ['show', 'destroy']
                ]);
                Route::any('product/paginate/{page?}', [ProductController::class, 'productPaginate'])->name('product.paginate');
                Route::any('product/toggle/{page?}', [ProductController::class, 'productToggle'])->name('product.toggle');
                Route::any('product/drop/{page?}', [ProductController::class, 'drop'])->name('product.drop');
    
                

            //Route::get('product-excel', 'ProductController@exportProduct')->name('product.excel');
            Route::get('product-excel', [ProductController::class, 'exportProduct'])->name('product.excel');

            //Category Route End

            Route::get('get_prod_sub_cat', 'CategoryController@getProdSubCat')->name('get_prod_sub_cat');
            Route::get('get_prod_sub_sub_cat', 'CategoryController@getProdSubSubCat')->name('get_prod_sub_sub_cat');

            //Replace Category Image Path

            // Route::get('category_image_path_change', 'CategoryController@CatImgPathChange'); 
            // Route::get('product_image_path_change', 'ProductController@ProductImgPathChange'); 

            Route::get('category_image_path_change', [CategoryController::class, 'CatImgPathChange']);

            Route::get('product_image_path_change', [ProductController::class, 'ProductImgPathChange']);

            // Group route start
            Route::resource('group', GroupController::class, [
                'names' => [
                    'index' => 'group.index',
                    'create' => 'group.create',
                    'store' => 'group.store',
                    'edit' => 'group.edit',
                    'update' => 'group.update',
                ],
                'except' => ['show', 'destroy']
            ]);
            Route::any('group/paginate/{page?}', [GroupController::class, 'groupPaginate'])->name('group.paginate');
            Route::any('group/drop/{page?}', [GroupController::class, 'drop'])->name('group.drop');
            Route::any('group/toggle/{page?}', [GroupController::class, 'groupToggle'])->name('group.toggle');


            
            //Category Route End

            // ProductQuery route start

            Route::resource('product_query', ProductQueryController::class, [
                'names' => [
                   'index' => 'product_query.index',
                    'create' => 'product_query.create',
                    'edit' => 'product_query.edit',
                    'update' => 'product_query.update',
                ],
                'except' => ['show', 'destroy']
            ]);
            Route::any('product_query/paginate/{page?}', [ProductQueryController::class, 'productQueryPaginate'])->name('product_query.paginate');
            Route::any('product_query/drop/{page?}', [ProductQueryController::class, 'destroy'])->name('product_query.drop');


            // Route::resource('product_query', 'ProductQueryController', [
            //     'names' => [
            //         'index' => 'product_query.index',
            //         'create' => 'product_query.create',
            //         'edit' => 'product_query.edit',
            //         'update' => 'product_query.update',
            //     ],
            //     'except' => ['show', 'destroy']
            // ]);
            // Route::any('product_query/paginate/{page?}', ['as' => 'product_query.paginate',
            //     'uses' => 'ProductQueryController@productQueryPaginate']);
            // Route::any('product_query/drop/{id?}', ['as' => 'product_query.drop',
            //     'uses' => 'ProductQueryController@drop']);

            // Request Quote route start

            Route::resource('request_quote', RequestQuoteController::class, [
                'names' => [
                    'index' => 'request_quote.index',
                    'create' => 'request_quote.create',
                    'edit' => 'request_quote.edit',
                    'update' => 'request_quote.update',
                ],
                'except' => ['show', 'destroy']
            ]);
            Route::any('request_quote/paginate/{page?}', [RequestQuoteController::class, 'requestQuotePaginate'])->name('request_quote.paginate');
            Route::any('request_quote/drop/{page?}', [RequestQuoteController::class, 'drop'])->name('request_quote.drop');

           


            // Request Quote route start
            Route::resource('blog_comment', BlogCommentController::class, [
                'names' => [
                    'index' => 'blog_comment.index',
                    'create' => 'blog_comment.create',
                    'edit' => 'blog_comment.edit',
                    'update' => 'blog_comment.update',
                ],
                'except' => ['show', 'destroy']
            ]);
            Route::any('blog_comment/paginate/{page?}', [BlogCommentController::class, 'blogCommentPaginate'])->name('blog_comment.paginate');
            Route::any('blog_comment/drop/{page?}', [BlogCommentController::class, 'drop'])->name('blog_comment.drop');
            Route::any('blog_comment/toggle/{page?}', [BlogCommentController::class, 'blogCommentToggle'])->name('blog_comment.toggle');

           
           


            // Request Quote route start

            Route::resource('enquiry', EnquiryController::class, [
                'names' => [
                    'index' => 'enquiry.index',
                  'create' => 'enquiry.create',
                   'edit' => 'enquiry.edit',
                    'update' => 'enquiry.update',
                ],
                'except' => ['show', 'destroy']
            ]);
            Route::any('enquiry/paginate/{page?}', [EnquiryController::class, 'enquiryPaginate'])->name('enquiry.paginate');
            Route::any('enquiry/drop/{page?}', [EnquiryController::class, 'destroy'])->name('enquiry.drop');


            // Route::resource('enquiry', 'EnquiryController', [
            //     'names' => [
            //         'index' => 'enquiry.index',
            //         'create' => 'enquiry.create',
            //         'edit' => 'enquiry.edit',
            //         'update' => 'enquiry.update',
            //     ],
            //     'except' => ['show', 'destroy']
            // ]);
            // Route::any('enquiry/paginate/{page?}', ['as' => 'enquiry.paginate',
            //     'uses' => 'EnquiryController@enquiryPaginate']);
            // Route::any('enquiry/drop/{id?}', ['as' => 'enquiry.drop',
            //     'uses' => 'EnquiryController@drop']);
            //Category Route End


            //About
            Route::get('sidebar-categories/create', [SidebarCategoryController::class, 'create'])->name('sidebar_category.create');
            Route::post('sidebar-categories/store', [SidebarCategoryController::class, 'store'])->name('sidebar_category.store');
           
            
            // Route::resource('product_review','ProductReviewController', [
            //     'names' => [
            //         'index'     => 'product_review.index',
            //         'create'    => 'product_review.create',
            //         'store'     => 'product_reviewes.store',
            //         'edit'      => 'product_review.edit',
            //         'update'    => 'product_review.update',
            //     ],
            //     'except' => ['show','destroy']
            // ]);

            // Route::any('product_review/paginate/{page?}', ['as' => 'product_review.paginate',
            //     'uses' => 'ProductReviewController@productReviewPaginate']);
            // Route::any('product_review/toggle/{id?}', ['as' => 'product_review.toggle',
            //     'uses' => 'ProductReviewController@productReviewToggle']);
            // Route::any('product_review/drop/{id?}', ['as' => 'product_review.drop',
            //     'uses' => 'ProductReviewController@drop']);
            
            Route::resource('product_review', ProductReviewController::class, [
                    'names' => [
                        'index'     => 'product_review.index',
                        'create'    => 'product_review.create',
                        'store'     => 'product_reviewes.store',
                        'edit'      => 'product_review.edit',
                        'update'    => 'product_review.update',
                    ],
                    'except' => ['show', 'destroy']
                ]);
                Route::any('product_review/paginate/{page?}', [ProductReviewController::class, 'productReviewPaginate'])->name('product_review.paginate');
                Route::any('product_review/toggle/{id?}', [ProductReviewController::class, 'productReviewToggle'])->name('product_review.toggle');
                Route::any('product_review/drop/{page?}', [ProductReviewController::class, 'drop'])->name('product_review.drop');
            //Blog Start
            Route::resource('blog', BlogController::class, [
                'names' => [
                    'index' => 'blog.index',
                    'create' => 'blog.create',
                    'store' => 'blog.store',
                    'edit' => 'blog.edit',
                    'update' => 'blog.update',
                ],
                'except' => ['show', 'destroy']
            ]);
            Route::any('blog/paginate/{page?}', [BlogController::class, 'blogPaginate'])->name('blog.paginate');
            Route::any('blog/toggle/{id?}', [BlogController::class, 'blogToggle'])->name('blog.toggle');
            Route::any('blog/drop/{page?}', [BlogController::class, 'drop'])->name('blog.drop');

            // Route::resource('blog', 'BlogController', [
            //     'names' => [
            //         'index' => 'blog.index',
            //         'create' => 'blog.create',
            //         'store' => 'blog.store',
            //         'edit' => 'blog.edit',
            //         'update' => 'blog.update',
            //     ],
            //     'except' => ['show', 'destroy']
            // ]);
            // Route::any('blog/paginate/{page?}', ['as' => 'blog.paginate',
            //     'uses' => 'BlogController@blogPaginate']);
            // Route::any('blog/toggle/{id?}', ['as' => 'blog.toggle',
            //     'uses' => 'BlogController@blogToggle']);
            // Route::any('blog/drop/{id?}', ['as' => 'blog.drop',
            //     'uses' => 'BlogController@drop']);

            // FAQ route start
            Route::resource('faq', FaqController::class, [
                'names' => [
                    'index' => 'faq.index',
                    'create' => 'faq.create',
                    'store' => 'faq.store',
                    'edit' => 'faq.edit',
                    'update' => 'faq.update',
                ],
                'except' => ['show', 'destroy']
            ]);
            Route::any('faq/paginate/{page?}', [FaqController::class, 'FaqPaginate'])->name('faq.paginate');
            Route::any('faq/toggle/{id?}', [FaqController::class, 'FaqToggle'])->name('faq.toggle');
            Route::any('faq/drop/{page?}', [FaqController::class, 'drop'])->name('faq.drop');


            /*Route::any('faq/paginate/{page?}', ['as' => 'faq.paginate',
                'uses' => 'FaqController@FaqPaginate']);
            Route::any('faq/toggle/{id?}', ['as' => 'faq.toggle',
                'uses' => 'FaqController@FaqToggle']);
            Route::any('faq/drop/{id?}', ['as' => 'faq.drop',
                'uses' => 'FaqController@drop']);*/

        // Route::get('get-unallocated-categories', 'CategoryController@getUnAllocated')->name('get_unallocated_cats');

        // Route::any('get-unallocated-categories/paginate/{page?}', ['as' => 'get_unallocated_cats_paginate',
        //         'uses' => 'CategoryController@unAllocatedCategoryPaginate']);
        
        Route::get('get-unallocated-categories', [CategoryController::class, 'getUnAllocated'])->name('get_unallocated_cats');
        Route::any('get-unallocated-categories/paginate/{page?}', [CategoryController::class, 'unAllocatedCategoryPaginate'])->name('get_unallocated_cats_paginate');
        
    });

});
Route::get('/', function () {
    return view('frontend/home');
});
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('category/{slug?}', [HomeController::class, 'getCategories'])->name('categories');
Route::get('product/{slug?}', [HomeController::class, 'productDetailPage'])->name('product_detail');