<?php


namespace App\Http\View\Composer;
use Illuminate\View\View;
use App\Models\Category;
class CategoryComposer
{
    public function compose(View $view)
    {
        $categories = Category::with('products')->get();
        $view->with('categories', $categories);
    }
}
