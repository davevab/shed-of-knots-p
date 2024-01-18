<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;
use App\Http\Livewire\ContactForm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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
})->name('home');


Route::get('/register-form', \App\Http\Livewire\RegisterForm::class);
Route::get('/login-form', \App\Http\Livewire\LoginForm::class)->name('login');
Route::get('/logout-form', \App\Http\Livewire\LogoutForm::class);

Route::get('/contact', ContactForm::class)->name('contact');



Route::get('/shop', [ProductController::class, 'index'])->name('shop');
Route::get('/shop/category/{category:slug}', [ProductController::class, 'productCategory'])->name('product-category');
//Route::post('/checkout', [ProductController::class, 'checkout'])->name('checkout');
//Route::post('/success', [ProductController::class, 'success'])->name('checkout.success');
//Route::post('/cancel', [ProductController::class, 'cancel'])->name('checkout.cancel');


Route::get('/blog', [PostController::class, 'index'])->name('blog');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/category/{category:slug}', [PostController::class, 'byCategory'])->name('by-category');



Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('view');

Route::get('/product/{product:product_slug}', [ProductController::class, 'show'])->name('product-inner');












