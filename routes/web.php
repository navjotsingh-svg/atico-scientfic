<?php
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Auth\AuthController;

use Illuminate\Support\Facades\Route;



Route::get('/atico-admin', [AuthController::class, 'getLogin'])->name('admin');
Route::post('/atico-admin/login', [AuthController::class, 'postLogin'])->name('adminlogin');
Route::get('/atico-admin/logout', array('as' => 'admin-logout','uses' => 'Auth\AuthController@adminLogout'));


Route::get('/', function () {
    return view('frontend/home');
});
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('category/{slug?}', [HomeController::class, 'getCategories'])->name('categories');
Route::get('product/{slug?}', [HomeController::class, 'productDetailPage'])->name('product_detail');