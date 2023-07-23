<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\ProductStoreRequest;
use Throwable;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $products = Product::latest()->paginate(5);
            return view('products.index', compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);
        } catch (Throwable $th) {
            return response()->json($th->getMessage(), 400);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            return view('products.create');
        } catch (Throwable $th) {
            return response()->json($th->getMessage(), 400);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request)
    {
        try {
            $request->validated();
            Product::create($request->all());
            return redirect()->route('products.index')->with('success', 'Product created successfully.');
        } catch (Throwable $th) {
            return redirect()->route('products.index')->with('failure', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        try {
            return view('products.edit', compact('product'));
        } catch (Throwable $th) {
            return response()->json($th->getMessage(), 400);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductStoreRequest $request, Product $product)
    {
        try {
            $request->validated();
            $product->update($request->all());
            return redirect()->route('products.index')->with('success', 'Product updated successfully');
        } catch (Throwable $th) {
            return redirect()->route('products.index')->with('failure', $th->getMessage());
        }

        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        try {
            $product->delete();
            return redirect()->route('products.index')->with('success', 'Product deleted successfully');
        } catch (Throwable $th) {
            return redirect()->route('products.index')->with('failure', $th->getMessage());
        }
    }
}
