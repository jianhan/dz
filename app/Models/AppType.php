<?php

namespace App\Models;

use App\Traits\GuardID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AppType is the model for app type.
 *
 * @package App\Models
 */
class AppType extends Model
{
    use GuardID, SoftDeletes;

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
