<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function __invoke()
    {
        return view('app.main');
    }
}
