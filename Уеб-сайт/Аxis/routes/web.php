<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\MeshVizualizorController;
use App\Models\Product;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Cart
Route::get('/', [ProductController::class, 'productList'])->name('products.list');
Route::get('/cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('/cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('/update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('/remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clearAllCart'])->name('cart.clear');


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
// Route::get('/blog-post', [BlogController::class, 'getBlog'])->name('blog.post');
Route::get('/blog-post/{id}', [BlogController::class, 'getBlogById'])->name('blog.post.number');
Route::get('/thank-you-page', [ShopController::class, 'thankYouPage'])->name('thank.you.page');
// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'postContact'])->name('contact');

Route::get('/product/{slug}', [ProductController::class, 'getProduct'])->name('product');
Route::post('/product/{slug}', [ProductReviewController::class, 'postReview'])->name('post.review');

// Mesh Vizualisor
Route::get('/mesh', [MeshVizualizorController::class, 'index'])->name('mesh');

// Login
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('products/{id}/purchase', [ProductController::class, 'purchase'])->name('products.purchase');
Route::post('shop/{product}/purchase', [ProductController::class, 'purchase'])->name('shop.purchase');
Route::get('checkout', [CheckoutController::class, 'checkout']);
Route::post('checkout', [CheckoutController::class, 'afterpayment'])->name('checkout.credit-card');
Route::get('/thank-you', [CheckoutController::class, 'thankYouPage'])->name('thank.you');
