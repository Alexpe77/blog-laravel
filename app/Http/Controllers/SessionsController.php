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

        if (auth()->attempt($attributes)) {
            session()->regenerate();

            return redirect('/')->with('success', 'Welcome back !');
        }

        throw ValidationException::withMessages([
            'email' => 'This email does not exist.'
        ]);
    }
    
    public function destroy() {

        auth()->logout();

        return redirect('/')->with('success', 'Goodbye !');
    }
}
