<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class RegistryAccrualSpecialController extends Controller
{
    public function index()
    {
        return view('app.registry-accrual-special');
    }

    public function create(Request $request)
    {
        return view('app.registry-accrual-special.create');
    }
}
