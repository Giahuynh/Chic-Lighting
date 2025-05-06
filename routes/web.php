<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;

Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);

Route::get('register', [AuthController::class, 'showRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

Route::middleware(['auth'])->group(function () {
    Route::resource('products', ProductController::class);
    Route::resource('brands', BrandController::class);
});
