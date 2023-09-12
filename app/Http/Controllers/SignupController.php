<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function create() {
        return view ('signup.signup');
    }

    public function store() {
        $attributes = request()->validate([
            'name' => 'required|min:2|max:255',
            'username' => 'required|min:3|max:255|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255',
        ]);

        $user = User::create($attributes);
        auth()->login($user);

        return redirect('articles')->with('success', 'Your account has been created successfully.');
    }
}
