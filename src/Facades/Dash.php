<?php

namespace Softcenter\Dash\Facades;

use Illuminate\Support\Facades\Facade;

class Dash extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'dash';
    }
}
