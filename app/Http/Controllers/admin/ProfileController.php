<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ProfileController extends Controller
{
    //
    public function index()
    {

//        $routeCollection = Route::getRoutes();
//dd($routeCollection);
//        foreach ($routeCollection as $value) {
//            echo $value->getPath();
//        }
   return view('admin.main.profile.index');
    }


}
