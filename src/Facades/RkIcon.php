<?php

/**
 * @author : CodingwithRK
 */

namespace Codingwithrk\RkBrandIcons\Facades;

use Illuminate\Support\Facades\Facade;

class RkIcon extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'rk-icon';
    }
}