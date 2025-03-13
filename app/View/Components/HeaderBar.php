<?php

namespace App\View\Components;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class HeaderBar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $categories = Category::query()
            ->join('category_products', 'categories.id', '=', 'category_products.category_id')
            ->select('categories.id', 'categories.title', 'categories.slug', DB::raw('count(*) as total'))
            ->groupBy('categories.id', 'categories.title', 'categories.slug')
            ->orderByDesc('total')
            ->get();
        return view('components.header-bar', compact('categories'));
    }
}