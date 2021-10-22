<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class ProductService
{
    public function createProduct($product_data)
    {
        Product::create([
            'name' => $product_data['name'],
            'category' => $product_data['category'],
            'price' => $product_data['price'],
            'stock' => $product_data['stock'],
            'description' => $product_data['description'],
            'user_id' => Auth::user()->id,
        ]);
    }

    public function buyableProducts() 
    {
        return Product::where('user_id', '!=', Auth::user()->id)->get();
    }
}
