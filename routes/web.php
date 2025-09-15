<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ProductTagController;
use  App\Http\Controllers\front;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route::get('about', function () {
//     return view('about');
// })->name('about');

// Route::get('products', function () {
//     return view('products');
// })->name('products');

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


Route::get('welcome',[front::class,'welcome'])->name ('welcome');


Route::resource('category', CategoryController::class);
Route::resource('product', ProductController::class);
Route::resource('tag', TagController::class);
Route::resource('productTag', ProductTagController::class);

