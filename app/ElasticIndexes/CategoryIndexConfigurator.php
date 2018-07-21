<?php

namespace App\ElasticIndexes;

use ScoutElastic\IndexConfigurator;
use ScoutElastic\Migratable;

class CategoryIndexConfigurator extends IndexConfigurator
{
    use Migratable;

    protected $settings = [
        'number_of_replicas' => 2,
        'number_of_shards' => 5,
        'analysis' => [
            'analyzer' => [
                'es_std' => [
                    'type' => 'standard',
                ]
            ]
        ]
    ];

    protected $mapping = [
        'properties' => [
            'name' => [
                'type' => 'keyword',
            ],
        ]
    ];
}
