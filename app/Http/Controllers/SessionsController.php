<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    
    public function login() {
        
        return view('login.login');
    }

    public function store() {

        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (! auth()->attempt($attributes)) {

            throw ValidationException::withMessages([
                'email' => 'This email does not exist.'
            ]);
        }

        session()->regenerate();

        return redirect('/articles')->with('success', 'Welcome back');

    }
    
    public function destroy() {

        auth()->logout();

        return redirect('/articles')->with('success', 'Goodbye');
    }
}
