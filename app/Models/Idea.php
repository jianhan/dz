<?php

namespace App\Models;

use App\Traits\GuardID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Idea is the model for idea.
 *
 * @package App\Models
 */
class Idea extends Model
{
    use GuardID, SoftDeletes;

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
        return $this->belongsToMany('App\Model\Category');
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
}
