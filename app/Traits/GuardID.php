<?php

namespace App\Traits;

trait GuardID
{
    /**
     * The attributes guarded.
     *
     * @var array
     */
    protected $guarded = [
        'id'
    ];
}