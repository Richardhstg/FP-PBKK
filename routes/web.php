<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/cart', action: [CartController::class, 'index'])->name('cart');
    Route::post('/addtocart', [CartController::class, 'store'])->name('cart.store');
    Route::get('/checkout', action: [CheckoutController::class, 'index'])->name('checkout');
    Route::post('/order', action: [CheckoutController::class, 'order'])->name('order');
    Route::get('/myorder', action: [OrderController::class, 'index'])->name('order-status');
    Route::post('/cart/delete/{id}', [CartController::class, 'destroy'])->name('cart.delete');
});

Route::get('/shop', action: [ProductController::class, 'index'])->name('shop');
Route::get('/product/{id}', action: [ProductController::class, 'single'])->name('single');
Route::get('/detect-image', [ProductController::class, 'detectImage'])->name('detect');
Route::post('/up-foto', [ProductController::class, 'store_photo'])->name('photo.store');
Route::get('/search', [ProductController::class, 'search'])->name('product-search');

Route::get('/', function () {
    return view('frontend.home');
})->name('home');
Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/product', function () {
    return view('frontend.single-product');
})->name('single-product');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', action: [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/dashboard/product_info', action: [ProductController::class, 'index_dashboard'])->name('dashboard-product-info');

    Route::get('/dashboard/add_product', [ProductController::class, 'create'])->name('dashboard-add-product');
    Route::post('/dashboard/store_product', [ProductController::class, 'store'])->name('dashboard-store-product');
    Route::get('/dashboard/edit_product/{id}', [ProductController::class, 'edit'])->name('dashboard-edit-product');
    Route::post('/dashboard/update_product/{id}', [ProductController::class, 'update'])->name('dashboard-update-product');
    Route::post('/delete_product', [ProductController::class, 'destroy'])->name('dashboard-product-delete');

    Route::get('/dashboard/edit_user/{id}', [UserController::class, 'edit'])->name('dashboard-edit-user');
    Route::post('/dashboard/update_user/{id}', [UserController::class, 'update'])->name('dashboard-update-user');
    Route::post('/delete_user', [UserController::class, 'destroy'])->name('dashboard-user-delete');

    Route::get('/dashboard/order', action: [OrderController::class, 'index_dashboard'])->name('dashboard-order');
    Route::post('/dashboard/finish_order/{id}', [OrderController::class, 'finish'])->name('dashboard-finish-order');

    Route::get('/dashboard/user_info', action: [UserController::class, 'index'])->name('dashboard-user-info');
});
require __DIR__ . '/auth.php';
