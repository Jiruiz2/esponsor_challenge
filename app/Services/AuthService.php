<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

class AuthService
{
    public function validLogin($credentials)
    {
        if (Auth::attempt($credentials)) {
            return true;
        }

        return false;
    }
}
