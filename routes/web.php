<?php
use App\Http\Controllers\Frontend\HomeController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend/home');
});
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('category/{slug?}', [HomeController::class, 'getCategories'])->name('categories');
