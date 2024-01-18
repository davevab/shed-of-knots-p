<?php

namespace App\View\Components;

use App\Models\Category;
use Closure;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class topics extends Component
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
        $query = Category::query()
            ->join('category_post', 'categories.id', '=', 'category_post.category_id')
            ->select('categories.title', 'categories.slug', DB::raw('count(*) as total'))
            ->groupBy([
                'categories.title', 'categories.slug'
            ])
            ->orderByDesc('total')
            ->limit(5);
        $categories = $query
            ->get();

        return view('components.topics', compact('categories'));
    }
}
