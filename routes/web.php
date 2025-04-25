<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;
use App\Models\Post;
use App\View\Components\Blog;
use App\View\Components\BlogDetail;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/contact-us/', [SiteController::class, 'contact'])->name('contact-us');

// Blog routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog'); // List all blog posts
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show'); // Show single blog post

// Product routes
Route::get('/category/{category:slug}', [ProductController::class, 'byCategory'])->name('by-category');
Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');
Route::get('/product/{product:slug}', [ProductController::class, 'show'])->name('product.detail');

// This should be the last route as it's a catch-all
Route::get('/{product:slug}', [ProductController::class, 'show'])->name('view');