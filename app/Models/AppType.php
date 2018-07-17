<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AppType is the model for app type.
 *
 * @package App\Models
 */
class AppType extends Model
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
     * Get the ideas for the app type.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ideas()
    {
        return $this->hasMany('App\Model\Idea');
    }
}
