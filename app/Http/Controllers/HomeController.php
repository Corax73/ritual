<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use Faker\Generator as Faker;

class HomeController extends Controller
{
    public function index(){
        
		$products = Product::all() -> sortByDesc('updated_at');
        $products = $products->chunk(2);
        $count = $products -> count();

		return view('home.index', [
            'count' => $count,
            'products' => $products
		]);
	}

	public function store(Request $request, Faker $faker)
    {
        $validatedData = $request -> validate( [
            'title' => 'required|unique:products|max:255',
			'price' => 'required',
            'new_price' => 'nullable|lt:price',
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

	public function show(Request $request)
    {
        $product = Product::find($request -> id);
		$images = $product->images;
        
        return view('layouts.show', [
			'product' => $product,
			'images' => $images
	]);
    }

    public function edit(Request $request)
    {
        $product = Product::find($request -> id);
        
        return view('layouts.edit', ['product' => $product]);
    }
    
    public function update(Request $request)
    {
        $product = Product::find($request -> id);

        $images = $product->images;

        if ($request -> title) {

            $validatedData = $request -> validate( [
                'title' => 'required|max:255',
                'price' => 'required',
                'new_price' => 'nullable|lt:price',
                'description' => 'required'
            ], 
            [
                'title.required' => 'Title is required',
                'price.required' => 'Description is required',
                'description.required' => 'Description is required'
            ]
        );

        } else {
            
            $validatedData = $request -> validate( [
                'description' => 'required',
                'price' => 'required',
                'new_price' => 'nullable|lt:price',
            ], 
            [
                'description.required' => 'Description is required',
                'price.required' => 'Description is required'
            ]
        );}

        $product -> update($validatedData);
        
        return view('layouts.show', [
			'product' => $product,
			'images' => $images
	]);
    }

	public function destroy(Request $request, $id)
    {
        if ($request -> input('action') == 'delete') {
            
                $product = Product::find($id);
                
                image_and_mini_destroy($product);

                $product -> delete();
            }

            if ($request -> input('download')) {
                
                $product = Product::find($id);

                $img = $request -> input('download');

                return image_download($img);
        }

        return redirect('/');
    }

}
