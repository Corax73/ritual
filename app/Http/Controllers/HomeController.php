<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use Faker\Generator as Faker;

class HomeController extends Controller
{
    public function index(){
        
		$products = Product::all() -> sortByDesc('created_at');
		
		return view('home.index', [
		'products' => $products
		]);
	}

	public function store(Request $request, Faker $faker)
    {
        $validatedData = $request -> validate( [
            'title' => 'required|unique:products|max:255',
			'price' => 'required',
            'description' => 'required',
            'image' => 'required'
        ], 
        [
            'title.unique' => 'Name is not unique',
            'title.required' => 'Name is required',
			'price' => 'Price is required',
            'description.required' => 'description is required',
            'image.required' => 'Image is required'
        ]
    );
	    $filenameProduct = image_load_and_mini ($validatedData, $faker);

        unset($validatedData['image']);

        $product = Product::create($validatedData);
		
		foreach ($filenameProduct as $img) {
			ProductImage::create([
				'product_id' => $product -> id,
				'img' => $img
		]);
		}
		
        return redirect() -> route('home.index');
    }
}
