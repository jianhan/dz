<?php

namespace App\ElasticIndexes;

use ScoutElastic\IndexConfigurator;

class CategoryIndexConfigurator extends IndexConfigurator
{

    protected $settings = [
        'number_of_replicas' => 3,
        'analysis' => [
            'analyzer' => [
                'es_std' => [
                    'type' => 'standard',
                ]
            ]
        ]
    ];
}
