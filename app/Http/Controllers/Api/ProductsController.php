<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Resources\ProductResource;
use App\Models\Product;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProductResource::collection(Product::ProductList());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        
        if (Product::create($request->all())){
            return response()->json([
                'message' => "Success",
                'code' => '200'
            ],200);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new ProductResource(Product::findOrFail($id));
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
    public function update(Request $request, $id)
    {

        $update = Product::find($id);
        $update->update($request->all());
        if ($update->save()){
            return response()->json([
                'message' => "Success",
                'code' => '200'
            ],200);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if (Product::destroy($id)){
            return response()->json([
                'message' => "Success",
                'code' => '200'
            ],200);
        }

    }
}
