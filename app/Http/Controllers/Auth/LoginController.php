<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function loginPage()
    {
        return view('auth.login');
    }

    public function loginAction()
    {
        return redirect(route('app.main'));
    }
}
