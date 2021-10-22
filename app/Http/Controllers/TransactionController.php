<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\TransactionService;


class TransactionController extends Controller
{
    public function transactions()
    {
        return view('transaction.list', ['transactions' => Auth::user()->transactions()->get()]);
    }

    public function create(Request $request)
    {
        $data = $request->all();

        TransactionService::buyProduct($data['product_id']);

        return redirect('products');
    }
}
