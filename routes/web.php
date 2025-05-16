<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\ProductController; // ✅ Sửa dòng này
use App\Http\Controllers\BrandController;



// Auth routes
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Public pages
Route::get('/', fn () => view('home'))->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::get('/shop', [ProductController::class, 'shop'])->name('shop');

// 🟢 PUBLIC route: Products listing
Route::get('products', [ProductController::class, 'index'])->name('products.index');

// 🛡️ PROTECTED: only logged-in users can access full CRUD
Route::middleware(['auth'])->group(function () {
    Route::resource('products', ProductController::class)->except(['index']);
    Route::resource('brands', BrandController::class);
Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::resource('products', ProductController::class)->except(['index']);
});
