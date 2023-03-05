<?php

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Faker\Generator as Faker;

if (! function_exists('image_load_and_mini')) {

    /**
     * @var $validatedData
     * @param Faker\Generator $faker
     * @return var unique name img $filename
     */

    function image_load_and_mini ($validatedData, $faker) {
        
        $filenameProduct = [];
        
        foreach ($validatedData['image'] as $imgProduct) {
            $filename = $imgProduct -> getClientOriginalName();
            $uniquePrefix = $faker -> swiftBicNumber;
            $uniqueFilename = $uniquePrefix . $filename;
            $filename = $uniqueFilename;
            
            $imgProduct -> move(Storage::path('/public'), $filename);
            
            $resizeImg = Image::make(Storage::path('/public/') . $filename);
            $resizeImg -> fit(300, 300, function($img) {
                $img -> aspectRatio();
                $img -> upsize();
            });
            
            $resizeImg->save(Storage::path('/public/mini/') . 'mini' . $filename);

            $filenameProduct[] = $filename;
            
        }
        
        return $filenameProduct;
    }
}