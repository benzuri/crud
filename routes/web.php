<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Display all products
Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::redirect('/products', '/', 301);
// Display a single product by id
Route::get('/products/{id}', [ProductController::class, 'show'])->whereNumber('id')->name('products.show');

// Create a single product
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
// Store a single product
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// Edit a single product by id
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->whereNumber('id')->name('products.edit');
// Update a single product by id
Route::post('/products/{id}', [ProductController::class, 'update'])->whereNumber('id')->name('products.update');

// Destroy a single product by id
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->whereNumber('id')->name('products.destroy');
// Delete a single product by id
Route::get('/products/{id}/delete', [ProductController::class, 'delete'])->whereNumber('id')->name('products.delete');