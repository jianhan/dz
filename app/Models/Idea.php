<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Tags\HasTags;

/**
 * Class Idea is the model for idea.
 *
 * @package App\Models
 */
class Idea extends Model
{
    use SoftDeletes, HasTags;

    /**
     * The attributes guarded.
     *
     * @var array
     */
    protected $guarded = [
        'id'
    ];

    /**
     * Get mutator to ensure return blank string when it is null.
     *
     * @param $value Value of description.
     * @return string  Return value of description..
     */
    public function getDescriptionAttribute($value)
    {
        if (is_null($value)) {
            return '';
        }

        return $value;
    }

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
     * Get all of the idea's ratings.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function ratings()
    {
        return $this->morphMany('App\Models\Rating', 'rateable');
    }

    /**
     * The categories that belong to the idea.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    /**
     * Get app type for idea.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function appType()
    {
        return $this->belongsTo('App\Models\AppType');
    }

    /**
     * Defines many to many relationship between idea and country.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function countries()
    {
        return $this->belongsToMany('App\Models\Country');
    }
}
