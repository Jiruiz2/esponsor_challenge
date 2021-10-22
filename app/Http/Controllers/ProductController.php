<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Services\ProductService;

class ProductController extends Controller
{
    public function buyableProducts()
    {
        $products = ProductService::buyableProducts();
        return view('product.buyableProducts', ['products' => $products]);
    }

    public function myProducts()
    {
        return view('product.list', ['products' => Auth::user()->products()->get()]);
    }

    public function new()
    {
        return view('product.create');
    }


    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'description' => 'required|max:250',
        ]);

        $data = $request->all();

        ProductService::createProduct($data);

        return redirect('myProducts');
    }
}
