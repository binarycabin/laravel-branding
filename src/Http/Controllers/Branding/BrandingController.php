<?php

namespace BinaryCabin\LaravelBranding\Http\Controllers\Branding;

use App\Http\Controllers\Controller;
use File;

class BrandingController extends Controller
{

    public function show($fileName){
        $filePath = base_path('branding/'.$fileName);
        if(!file_exists($filePath)){
            abort(404);
        }
        $fileContents = File::get($filePath);
        $mimeType = File::mimeType($filePath);
        return response($fileContents)->header('Content-Type', $mimeType);
    }
}