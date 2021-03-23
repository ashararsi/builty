<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();

//        $permissionNames = $user->getPermissionNames();
//
//        $user->assignRole('admin');
//        $roles = $user->getRoleNames();
////        $role->givePermissionTo('edit articles');
//        $data = $user->getAllPermissions();
        if (!Gate::allows('admin.all')) {

            return abort(401);
        } else {
            return redirect('/admin/dashboard');
        }
        return view('home');
    }
}
