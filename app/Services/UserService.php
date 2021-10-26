<?php

namespace App\Services;

use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserService
{
    public function createUser($user_data)
    {
        User::create([
            'name' => $user_data['name'],
            'username' => $user_data['username'],
            'email' => $user_data['email'],
            'password' => Hash::make($user_data['password'])
        ]);
    }
}
