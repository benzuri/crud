<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// Display all products
Route::get('products', function () {
    return Product::all();
});

// Display a single product
Route::get('products/{id}', function($id) {
    return Product::find($id);
});

// Create a new product
Route::post('products', function(Request $request) {
    $data = $request->all();
    return Product::create([
        'name' => $data['name'],
        'description' => $data['description'],
        'image' => $data['image'],
    ]);
});

// Update a product
Route::put('products/{id}', function(Request $request, $id) {
    $product = Product::findOrFail($id);
    $product->update($request->all());
    return $product;
});

// Delete a product
Route::delete('products/{id}', function($id) {
    Product::find($id)->delete();
    return 204;
});