<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;
use App\Models\Post;
use App\View\Components\Blog;
use App\View\Components\BlogDetail;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('home');
// Route::get('/blog', [Blog::class, 'render'])->name('blog');
Route::get('/blog-detail', [BlogDetail::class, 'render'])->name('blog-detail');
Route::get('/contact-us/', [SiteController::class, 'contact'])->name('contact-us');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/category/{category:slug}', [ProductController::class, 'byCategory'])->name('by-category');

Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');
Route::get('/product/{product:slug}', [ProductController::class, 'show'])->name('product.detail');
Route::get('/{product:slug}', [ProductController::class, 'show'])->name('view');

// Route::get('/blog/{slug}', function($slug){ $post = Post::where('slug', $slug)->firstOrFail();
//     return view('components.blog', compact('post'));

// })->name('blog.show');

// Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');