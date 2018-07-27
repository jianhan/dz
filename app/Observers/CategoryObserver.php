<?php

namespace App\Observers;

use App\MOdels\Category;

class CategoryObserver
{
    /**
     * Handle the category "deleting" event.
     *
     * @param  \App\Category $category
     * @return void
     */
    public function deleting(Category $category)
    {
        $category->ideas()->detach();
    }
}
