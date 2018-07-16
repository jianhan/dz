<?php

namespace App;

use App\Traits\GuardID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use GuardID, SoftDeletes;

    /**
     * The ideas that belong to the category.
     */
    public function ideas()
    {
        return $this->belongsToMany('App\Model\Idea');
    }
}
