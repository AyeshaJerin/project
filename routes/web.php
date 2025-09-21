<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ProductTagController;
use App\Http\Controllers\OrderController;
use  App\Http\Controllers\CouponController;
use App\Http\Controllers\OrderItemController;
use  App\Http\Controllers\front;
use  App\Http\Controllers\dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');

Route::get('jarin', function () {
    return view('layouts/back');
})->name('jarin');

// Route::get('dashboard', function () {
//     return view('auth/login');
// })->name('dashboard');

// Route::get('store', function () {
//     return view('store');
// })->name('store');


// Route::get('contact', function () {
//     return view('contact');
// })->name('contact');



// Route::get('page', function () {
//     return view('page');
// })->name('page');



// Route::get('features', function () {
//     return view('features');
// })->name('features');


// Route::get('blog', function () {
//     return view('blog');
// })->name('blog');



// Route::get('testimonial', function () {
//     return view('testimonial');
// })->name('testimonial');


// Route::get('404', function () {
//     return view('404');
// })->name('404');


Route::get('/',[front::class,'welcome'])->name ('welcome');
Route::get('about',[front::class,'about'])->name ('about');
Route::get('products',[front::class,'products'])->name ('products');
Route::get('store',[front::class,'store'])->name ('store');
Route::get('contact',[front::class,'contact'])->name ('contact');
Route::get('page',[front::class,'page'])->name ('page');
Route::get('features',[front::class,'features'])->name ('features');
Route::get('blog',[front::class,'blog'])->name ('blog');
Route::get('testimonial',[front::class,'testimonial'])->name ('testimonial');








Route::resource('category', CategoryController::class);
Route::resource('product', ProductController::class);
Route::resource('tag', TagController::class);
Route::resource('productTag', ProductTagController::class);
Route::resource('order', OrderController::class);
Route::resource('coupon', CouponController::class);
Route::resource('orderItem', OrderItemController::class);


Route::middleware('auth:web')->group(function () {

Route::get('dashboard',[Dashboard::class,'index'])->name('dashboard');
Route::get('dash',[Dashboard::class,'jerin'])->name ('dash');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



