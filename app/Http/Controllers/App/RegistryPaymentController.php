<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistryPaymentController extends Controller
{
    public function index()
    {
        return view('app.registry-payment');
    }

    public function create(Request $request)
    {
        return view('app.registry-payment.create');
    }
}
