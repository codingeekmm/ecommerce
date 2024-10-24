<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;

class ProductApiController extends Controller
{
    public function index()
    {
        return Product::with('category')->get();
        // return ProductResource::collection(Product::with('category')->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product = Product::create($request->all());
        return new ProductResource($product);
        // return response()->json($product, 201);
    }

    public function show($id)
    {
        $product = Product::with('category')->findOrFail($id);
        return new ProductResource($product);
        // return response()->json($product);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());
        return new ProductResource($product);
        // return response()->json($product);
    }

    public function destroy($id)
    {
        // Step 1: Find the product, or return a 404 if not found
        $product = Product::findOrFail($id);
        
        // Step 2: Create an in-memory copy of the product to return later
        $deletedProduct = $product->replicate(); 
        
        // Step 3: Delete the product from the database
        $product->delete();
        
        // Step 4: Return the details of the deleted product
        return response()->json([
            'message' => 'Product deleted successfully.',
            'product' => $deletedProduct
        ], 200);
    }
}
