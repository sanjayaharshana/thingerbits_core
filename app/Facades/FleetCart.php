<?php

namespace FleetCart\Facades;

use Illuminate\Support\Facades\Facade;

class FleetCart extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \FleetCart\FleetCart::class;
    }
}
