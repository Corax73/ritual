<?php

use App\Models\Product;
use Illuminate\Support\Facades\Storage;

if (! function_exists('image_and_mini_destroy')) {

    /**
     * @param  \App\Models\Product  $news
     */

    function image_and_mini_destroy (Product $product) {

        $filenameForDel = $product->image;
        Storage::delete('/public/' . $filenameForDel);
        Storage::delete('/public/mini/' . 'mini' . $filenameForDel);

    }
}
