<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
{
    $posts = Post::latest()->where('active', 1)
    ->paginate(6); // Adjust pagination as needed
    // ->orderBy('published_at', 'desc');
    
    return view('components.blog', compact('posts'));
}


public function show($slug)
{
    $post = Post::where('slug', $slug)->firstOrFail();
    return view('components.blog-detail', compact('post'));
}
}
