<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;
use App\View\Components\BlogDetail;
use App\View\Components\BlogSection;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/blog-section', [BlogSection::class, 'render'])->name('blog-section');
Route::get('/blog-detail', [BlogDetail::class, 'render'])->name('blog-detail');
Route::get('/contact-us/', [SiteController::class, 'contact'])->name('contact-us');
Route::get('/category/{category:slug}', [ProductController::class, 'byCategory'])->name('by-category');

Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');
Route::get('/product/{product:slug}', [ProductController::class, 'show'])->name('product.detail');
Route::get('/{product:slug}', [ProductController::class, 'show'])->name('view');