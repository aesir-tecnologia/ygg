<?php

namespace Aesir\Ygg\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Aesir\Ygg\Ygg
 */
class Ygg extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Aesir\Ygg\Ygg::class;
    }
}
