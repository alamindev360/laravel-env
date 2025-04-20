<?php

namespace AlaminDev360\SetEnv\Facades;

use Illuminate\Support\Facades\Facade;

class Env extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'alamindev360-set-env';
    }
} 