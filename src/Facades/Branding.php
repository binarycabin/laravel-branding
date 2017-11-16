<?php

namespace BinaryCabin\LaravelBranding\Facades;

use Illuminate\Support\Facades\Facade;

class Branding extends Facade
{
    protected static function getFacadeAccessor() {
        return 'branding';
    }
}