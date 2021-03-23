<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $user = auth()->user();

        if (!Gate::allows('admin.all')) {
            return abort(401);
        }

        return view('admin.main.index');


    }
}
