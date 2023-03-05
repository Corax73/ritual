<?php

use App\Models\Product;
use Illuminate\Support\Facades\Storage;

if (! function_exists('image_download')) {

    /**
     * @param  \App\Models\Product  $product
     */

    function image_download (Product $product) {

        $filenameForDown = $product -> image;

        return Storage::download('/public/' . $filenameForDown);

    }
}
