<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
{
    $posts = Post::latest()->paginate(8); // Adjust pagination as needed
    return view('components.blog', compact('posts'));
}


public function show($slug)
{
    $post = Post::where('slug', $slug)->firstOrFail();
    return view('components.blog-detail', compact('post'));
}
}
