<?php

use App\Models\Product;
use Illuminate\Support\Facades\Storage;

if (! function_exists('image_and_mini_destroy')) {

    /**
     * @param  \App\Models\Product  $product
     */

    function image_and_mini_destroy (Product $product) {

        $images = $product->images;

        foreach ($images as $image) {
            $filenameForDel = $image->img;
            Storage::delete('/public/' . $filenameForDel);
            Storage::delete('/public/mini/' . 'mini' . $filenameForDel);
        }
        

    }
}
