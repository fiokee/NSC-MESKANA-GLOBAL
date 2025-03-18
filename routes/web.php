<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/contact-us/', [SiteController::class, 'contact'])->name('contact-us');
Route::get('/category/{category}', [ProductController::class, 'byCategory'])->name('by-category');

Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');
Route::get('/product/{product:slug}', [ProductController::class, 'show'])->name('product.detail');
Route::get('/{product:slug}', [ProductController::class, 'show'])->name('view');