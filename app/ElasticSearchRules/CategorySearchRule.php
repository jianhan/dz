<?php

namespace App\ElasticSearchRules;

use ScoutElastic\SearchRule;

class CategorySearchRule extends SearchRule
{
    /**
     * @inheritdoc
     */
    public function buildHighlightPayload()
    {
        return [
            'fields' => [
                'name' => [
                    'type' => 'plain'
                ]
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function buildQueryPayload()
    {
        return [
            'must' => [
                'match' => [
                    'name' => $this->builder->query
                ]
            ]
        ];
    }
}