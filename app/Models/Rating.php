<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Rating is the model for rating.
 *
 * @package App\Models
 */
class Rating extends Model
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
     * Get all of the owning rateable models.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function rateable()
    {
        return $this->morphTo();
    }

}
