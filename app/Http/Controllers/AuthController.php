<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Services\AuthService;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }


    public function createSession(Request $request)
    {
        $request->validate([
            'email_or_username' => 'required',
            'password' => 'required',
        ]);

        $data = $request->only('email_or_username', 'password');

        if (AuthService::validLogin($data)) {
            return redirect('');
        }

        return redirect('login');
    }

    public function logOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
