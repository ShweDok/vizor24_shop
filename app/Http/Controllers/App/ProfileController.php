<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('app.setting.profile');
    }

    public function update()
    {
        return redirect(route('app.settings.profile'));
    }

    public function change_password()
    {
        return redirect(route('app.settings.profile'));
    }
}
