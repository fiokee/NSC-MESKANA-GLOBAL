<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::query()
        ->where('active', 1)->get() ?? collect()
        ->orderBy('published_at', 'desc')
        ->paginate(10);

        // Ensure thumbnail is a decoded array
    foreach ($products as $product) {
        if (is_string($product->thumbnail)) {
            $product->thumbnail = json_decode($product->thumbnail, true);
        }
    }

    // Count products per category
    // $categories = Category::withCount('products')->get();
        return view('home', compact('products'));
    }

    public function byCategory(Category $category){
        $products = Product::query()
        ->join('category_products', 'products.id', '=', 'category_products.product_id')
        ->where('category_products.category_id', '=', $category->id)
        ->where('active', '=', true)
        ->orderBy('published_at', 'desc')
        ->paginate(10);

        // Ensure thumbnail is a decoded array
    foreach ($products as $product) {
        if (is_string($product->thumbnail)) {
            $product->thumbnail = json_decode($product->thumbnail, true);
        }
    }

        return view('components.shop', compact('products', 'category'));
    }

    public function search(Request $request)
{
    $query = $request->input('query');

    // Search in product title and description
    $products = Product::query()
            ->where('active', 1)
            ->where(function($q) use ($query) {
                $q->where('title', 'LIKE', "%$query%")
                    ->orWhere('body', 'LIKE', "%$query%");
            })
            ->orderBy('published_at', 'desc')
            ->paginate(10);
    
    // Ensure thumbnail is a decoded array
    foreach ($products as $product) {
        if (is_string($product->thumbnail)) {
            $product->thumbnail = json_decode($product->thumbnail, true);
        }
    }

    // If AJAX request, append query to pagination links
    if ($request->ajax()) {
        $products->appends(['query' => $query]);
    }
                    
    return view('components.shop', compact('products', 'query'));
}
    
    public function show(Product $product)
    {
        return view('components.product-detail', compact('product'));

    }
        /**
         * Show the form for creating a new resource.
         */
        // public function create()
        // {
        //     //
        // }
    
        // /**
        //  * Store a newly created resource in storage.
        //  */
        // public function store(Request $request)
        // {
        //     //
        // }
    
        // /**
        //  * Display the specified resource.
        //  */
   

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(Product $product)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, Product $product)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(Product $product)
    // {
    //     //
    // }
}
