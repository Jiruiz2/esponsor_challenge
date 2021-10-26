<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

class AuthService
{
    public function validLogin($login_data)
    {
        $credentials = [
            'email' => $login_data['email_or_username'],
            'password' => $login_data['password'],
        ];

        if (Auth::attempt($credentials)) {
            return true;
        }

        $credentials = [
            'username' => $login_data['email_or_username'],
            'password' => $login_data['password'],
        ];

        if (Auth::attempt($credentials)) {
            return true;
        }

        return false;
    }
}
