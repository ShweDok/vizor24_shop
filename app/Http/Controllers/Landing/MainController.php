<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function mainPage()
    {
        return view('landing.main');
    }
}
