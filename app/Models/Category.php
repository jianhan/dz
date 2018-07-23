<?php

namespace App\Models;

use App\ElasticIndexes\CategoryIndexConfigurator;
use App\ElasticSearchRules\CategorySearchRule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use ScoutElastic\Searchable;
use function is_null;


/**
 * Class Category is the model for category.
 *
 * @package App
 */
class Category extends Model
{
    use SoftDeletes, Searchable;

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

    protected $indexConfigurator = CategoryIndexConfigurator::class;

    protected $searchRules = [
        CategorySearchRule::class
    ];

    // Here you can specify a mapping for a model fields.
    protected $mapping = [
        'properties' => [
            'name' => [
                'type' => 'text',
                'fields' => [
                    'raw' => [
                        'type' => 'keyword',
                    ]
                ]
            ],
        ]
    ];

    /**
     * The ideas that belong to the category.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function ideas()
    {
        return $this->belongsToMany('App\Models\Idea');
    }
}
