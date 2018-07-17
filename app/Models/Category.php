<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Category is the model for category.
 *
 * @package App
 */
class Category extends Model
{
    use SoftDeletes;

    /**
     * The attributes guarded.
     *
     * @var array
     */
    protected $guarded = [
        'id'
    ];

    /**
     * Automatically set slug.
     *
     * @param $value
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }

    /**
     * The ideas that belong to the category.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function ideas()
    {
        return $this->belongsToMany('App\Model\Idea');
    }
}
