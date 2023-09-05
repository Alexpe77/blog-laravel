<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function create() {
        return view ('signup.create');
    }

    public function store() {
        $attributes = request()->validate([
            'name' => 'required|min:2|max:255',
            'username' => 'required|min:3|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:7|max:255',
        ]);

        User::create($attributes);

        return redirect ('/');
    }
}
