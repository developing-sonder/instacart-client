<?php

namespace Developing Sonder\InstacartClient\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Developing Sonder\InstacartClient\InstacartClient
 */
class InstacartClient extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Developing Sonder\InstacartClient\InstacartClient::class;
    }
}
