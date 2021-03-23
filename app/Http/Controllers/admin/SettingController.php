<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //

    public function index()
    {
        return view('admin.main.setting.index');

    }

    public function changepassword()
    {
        $user_id = auth()->id();
        $user = User::find($user_id);

    }
}
