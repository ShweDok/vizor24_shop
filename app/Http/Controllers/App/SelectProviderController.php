<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class SelectProviderController extends Controller
{
    public function page()
    {
        return view('app.select-provider');
    }

    public function select($id)
    {
        return redirect(route('app.main'));
    }
}
