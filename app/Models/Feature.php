<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feature extends Model
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
     * Mutator used to return empty string if value is null.
     *
     * @param $value
     * @return string
     */
    public function getPriorityAttribute($value)
    {
        if (is_null($value)) {
            return '';
        }

        return $value;
    }

    /**
     * Mutator used to return empty string if value is null.
     *
     * @param $value
     * @return string
     */
    public function getNotesAttribute($value)
    {
        if (is_null($value)) {
            return '';
        }

        return $value;
    }

    /**
     * Local scope to define customise ordering for priority field.
     *
     * @param $query
     * @param string $dir
     * @return mixed
     */
    public function scopeOrderByPriority($query, $dir = 'ASC')
    {
        $rawOrder = "FIELD(priority, 'nice to have', 'should have', 'must have') DESC";
        if ($dir == 'DESC') {
            $rawOrder = "FIELD(priority, 'must have','should have', 'nice to have') DESC";
        }

        return $query->orderByRaw(\DB::raw($rawOrder));
    }

    /**
     * idea defines one to many relationship between features and idea.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function idea()
    {
        return $this->belongsTo('App\Models\Idea');
    }
}
