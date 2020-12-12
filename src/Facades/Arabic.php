<?php   namespace okasha\arabic\Facades;

use Illuminate\Support\Facades\Facade;

class Arabic extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'okasha.arabic';
    }
}
