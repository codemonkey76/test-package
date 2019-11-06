<?php

namespace Codemonkey76\TestPackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Codemonkey76\TestPackage\Skeleton\SkeletonClass
 */
class TestPackageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'test-package';
    }
}
