<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = new Setting();
        dd($settings->admin);
        return view('setting.index');
    }
}
