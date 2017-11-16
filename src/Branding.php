<?php

namespace BinaryCabin\LaravelBranding;

use Route;

class Branding{

    public static function hasLogo(){
        if(file_exists(base_path('/branding/img/logo.png'))){
            return true;
        }
        return false;
    }

    public static function routes(){
        Route::prefix('/branding')->group(function(){
            Route::get('{any}', '\BinaryCabin\LaravelBranding\Http\Controllers\Branding\BrandingController@show')->where('any', '.*');
        });
    }

}