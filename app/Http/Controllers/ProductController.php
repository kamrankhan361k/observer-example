<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        // Creating a new product
        $product = Product::create([
            'name' => 'Laptop',
            'price' => 1500
        ]);

        return response()->json($product);
    }

    public function update($id)
    {
        // Updating the product
        $product = Product::find($id);
        $product->update([
            'price' => 1700
        ]);

        return response()->json($product);
    }

    public function delete($id)
    {
        // Deleting the product
        $product = Product::find($id);
        $product->delete();

        return response()->json('Product deleted');
    }
}
