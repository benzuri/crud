<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        request()->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        // store
        Product::create([
            'name' => request('name'),
            'description' => request('description'),
            'image' => request('image'),
        ]);

        // Redirect   
        return redirect()->route('products.index')->with('status', 'Product ' . request('name') . ' added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::where('id', $id)->get();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validation
        request()->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        // update
        Product::find($id)->update([
            'name' => request('name'),
            'description' => request('description'),
            'image' => request('image'),
        ]);

        // Redirect   
        return redirect()->route('products.index')->with('status', 'Product ' . request('name') . ' updated successfully');
    }

    /**
     * Show the form for deleting the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $product = Product::find($id);
        return view('products.delete', compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $product = Product::find($id);
        $product->delete();

        // Redirect   
        return redirect()->route('products.index')->with('status', 'Product ' . $product->name . ' deleted successfully');
    }
}
