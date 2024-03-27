<?php

namespace Rpungello\ApiLogger\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rpungello\ApiLogger\ApiLogger
 */
class ApiLogger extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Rpungello\ApiLogger\ApiLogger::class;
    }
}
