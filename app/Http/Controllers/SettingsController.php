<?php

namespace App\Http\Controllers;

use App\Models\settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function settings()
    {
        $settings = Settings::where('id', 1)->first();
        return view('settings',['settings'=>$settings]);
    }

    public function saveSettings(Request $request)
    {

       settings::find(1)->update($request->all());
        return redirect('controls');
    }
}
