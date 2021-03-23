<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;


class MainController extends Controller
{
    //
    public function index()
    {
//        $id = auth()->id();
//        $user = User::find($id);
//
//        $role = Role::find(2);
//        $permission = Permission::find(2);
//        $role->givePermissionTo($permission);
//        $permission->assignRole($role);
 
        return view('main.index');
    }

    public function about()
    {
        return view('main.about');
    }

    public function corona()
    {
        return view('main.about');
    }

    public function contact()
    {
        return view('main.contact');
    }

    public function post()
    {
        return view('main.post');
    }


}
