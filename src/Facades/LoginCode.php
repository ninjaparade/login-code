<?php

namespace Ninjaparade\LoginCode\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ninjaparade\LoginCode\LoginCode
 */
class LoginCode extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Ninjaparade\LoginCode\LoginCode::class;
    }
}
