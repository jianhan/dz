<?php

namespace App\Traits;

use League\Fractal;

trait FractalParamBagValidator
{
    function validateParamBag(Fractal\ParamBag $paramBag, $expectedParams = [])
    {
        if (count($expectedParams) != 0) {
            $paramsArray = array_keys(iterator_to_array($paramBag));
            if ($invalidParams = array_diff($paramsArray, $expectedParams)) {
                throw new \Exception(sprintf(
                    'Invalid param(s): "%s". Valid param(s): "%s"',
                    implode(',', $paramsArray),
                    implode(',', $expectedParams)
                ));
            }
        }
    }
}
