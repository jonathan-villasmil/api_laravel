<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ProductCollection;
use App\Http\Resources\Api\ProductResource;
use App\Filters\Api\ProductsFilter;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {   
        $filter = new ProductsFilter();
        $queryItems = $filter->transform($request);   //[['column', 'operator', 'value']]

        if(count($queryItems) == 0){
            return new ProductCollection(Product::paginate());
        }else{
            $products = Product::where($queryItems)->paginate();
            return new ProductCollection($products->appends($request->query()));

        }

        Product::where($queryItems);

        // return new ProductCollection(Product::paginate());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        // validar que el nombre no exista en la db
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return new ProductResource($product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
