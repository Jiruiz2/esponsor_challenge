<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;
use App\Models\Product;

class TransactionService
{
    public function buyProduct($product_id)
    {
        $product = Product::find($product_id);

        Transaction::create([
            'product_amount' => 1,
            'product_id' => $product_id,
            'user_id' => Auth::user()->id
        ]);

        $product->stock -= 1;
        $product->save();
    }
}
