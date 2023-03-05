<?php

use Faker\Generator as Faker;
use App\Models\Product;

if (! function_exists('image_update_and_mini')) {

    /**
     * @param  \App\Models\Product  $product
     * @var $validatedData
     * @param Faker\Generator $faker
     * @return var unique name img $filename
     */

    function image_update_and_mini (Product $product, $validatedData, Faker $faker) {
        
        image_and_mini_destroy($product);

        $filename = image_load_and_mini($validatedData, $faker);

        return $filename;
    }
}