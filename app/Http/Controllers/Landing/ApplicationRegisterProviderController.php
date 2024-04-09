<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;

class ApplicationRegisterProviderController extends Controller
{
    public function applicationRegisterProviderPage()
    {
        return view('landing.application_register_provider');
    }
}
