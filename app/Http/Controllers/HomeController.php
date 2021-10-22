<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('products');
        }

        return redirect('login')->withSuccess('You are not allowed to access');
    }
}
