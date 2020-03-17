<?php

namespace Richdynamix\SharpspringRestLaravel;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Richdynamix\SharpspringRestLaravel\Skeleton\SkeletonClass
 */
class SharpspringRestLaravelFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sharpspring-rest-laravel';
    }
}
