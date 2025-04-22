<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $rules = [
        "name" => "required|string|max:64",
        "description" => "required|string|max:512",
        "price" => "required|numeric|gt:0"
    ];

    public function index()
    {
        //
        return response()->json([
            "products" => auth()->user()->products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $data = $request->validate($this->rules);
        // $product = auth()->user()->products()->create($data);
        // return response()->json([
        //     'message' => 'Product created successfully',
        //     'product' => $product,
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        $this->authorize('view', $product);
        return response()->json("product");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $this->authorize("update", $product);
        $data = $request->validate($this->rules);
        $product->update($data);
        return response()->json([
            'message' => 'Product updated successfully',
            'product' => $product,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // $this->authorize("delete", $product);
        // $product->delete();
        // return response()->json([
        //     'message' => 'Product deleted successfully',
        //     'product' => $product
        // ]);
    }
}
