<?php

namespace App\View\Components;

use App\Models\Category;
use Closure;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class productnav extends Component
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
            ->Join('category_product', 'categories.id', '=', 'category_product.category_id')
            ->select('categories.title', 'categories.slug', DB::raw('count(*) as total'))
            ->groupBy([
                'categories.title', 'categories.slug'
            ])
            ->orderByDesc('total')
            ->limit(10)
            ->get();


        return view('components.productnav', compact('categories'));
    }
}
