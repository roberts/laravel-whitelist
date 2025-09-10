<?php

namespace Roberts\LaravelWhitelist\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Roberts\LaravelWhitelist\LaravelWhitelist
 */
class LaravelWhitelist extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Roberts\LaravelWhitelist\LaravelWhitelist::class;
    }
}
