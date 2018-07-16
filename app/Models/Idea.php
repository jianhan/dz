<?php

namespace App\Models;

use App\Traits\GuardID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Idea extends Model
{
    use GuardID, SoftDeletes;


    /**
     * Get all of the idea's ratings.
     */
    public function ratings()
    {
        return $this->morphMany('App\Models\Rating', 'rateable');
    }

    /**
     * The categories that belong to the idea.
     */
    public function categories()
    {
        return $this->belongsToMany('App\Model\Category');
    }
}
