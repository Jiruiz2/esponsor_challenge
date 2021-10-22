<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;

class UserController extends Controller
{
    public function register()
    {
        return view('user.register');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        $data = $request->all();

        UserService::createUser($data);

        return redirect('')->withSuccess('You have signed-in');
    }
}
