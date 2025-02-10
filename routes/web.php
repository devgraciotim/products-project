<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\CartController;

// Route::get('/', [ProductController::class, 'index'])->name('user.index');

// Route::resource('/product', ProductController::class);

Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/product/{slug}', [SiteController::class, 'details'])->name('site.details');
Route::get('/category/{id}', [SiteController::class, 'category'])->name('site.category');

Route::get('/cart', [CartController::class, 'listCart'])->name('site.cart');
Route::post('/cart', [CartController::class, 'addCart'])->name('site.addCart');
