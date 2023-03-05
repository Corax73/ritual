<?php

use App\Models\Product;
use Illuminate\Support\Facades\Storage;

if (! function_exists('image_download')) {

    /**
     * @param  \App\Models\Product  $product
     */

    function image_download ($img) {      
        
        return Storage::download('/public/' . $img);

    }
}
