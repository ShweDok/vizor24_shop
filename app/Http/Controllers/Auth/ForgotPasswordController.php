<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class ForgotPasswordController extends Controller
{
    public function forgotPasswordPage()
    {
        return view('auth.forgot_password');
    }

    public function forgotPasswordAction()
    {
        return redirect(route('app.login'));
    }
}
