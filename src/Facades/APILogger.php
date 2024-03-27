<?php

namespace Rpungello\APILogger\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rpungello\APILogger\APILogger
 */
class APILogger extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Rpungello\APILogger\APILogger::class;
    }
}
