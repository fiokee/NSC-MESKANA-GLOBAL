<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/category/{category}', [ProductController::class, 'byCategory'])->name('by-category');
Route::get('/product/{product:slug}', [ProductController::class, 'show'])->name('product.detail');
Route::get('/{product:slug}', [ProductController::class, 'show'])->name('view');