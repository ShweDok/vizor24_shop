<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function registerPage()
    {
        return view('auth.register');
    }

    public function registerAction()
    {
        return redirect(route('app.login'));
    }
}
