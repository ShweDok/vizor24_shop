<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class RegistryAccrualController extends Controller
{
    public function index()
    {
        return view('app.registry-accrual');
    }
}
