<?php

namespace Shovit\DemoPackage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Shovit\DemoPackage\DemoPackage
 */
class DemoPackage extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Shovit\DemoPackage\DemoPackage::class;
    }
}
