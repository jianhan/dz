<?php

namespace App\Http\Response;

class Formatter extends \Dingo\Api\Http\Response\Format\Json
{
    /**
     * Get the response content type.
     *
     * @return string
     */
    public function getContentType()
    {
        return 'application/vnd.api+json';
    }
}
