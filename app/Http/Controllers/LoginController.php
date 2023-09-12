<?php

namespace App\Http\Controllers;

use App\Models\User;

class LoginController extends Controller {
    public function login() {
        return view ('login.login');
    }
}