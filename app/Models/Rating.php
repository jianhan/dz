<?php

namespace App\Models;

use App\Traits\GuardID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rating extends Model
{
    use GuardID, SoftDeletes;

    /**
     * Get all of the owning rateable models.
     */
    public function rateable()
    {
        return $this->morphTo();
    }
}
