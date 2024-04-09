<?php

namespace App\Http\Controllers\Landing\Forms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ApplicationRegisterProviderFormController extends Controller
{
    public function __invoke(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'company' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        } else {
            Session::flash('message', 'Form submit Successfully.');
        }

        return redirect()->back();
    }
}
