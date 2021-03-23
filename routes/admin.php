<?php

use Illuminate\Support\Facades\Route;

Route::name('admin.')->group(function () {
    Route::get('/dashboard', ['as' => 'index', 'uses' => 'admin\DashboardController@index']);
    Route::get('/profile', ['as' => 'profile', 'uses' => 'admin\ProfileController@index']);
    Route::get('/setting', ['as' => 'setting', 'uses' => 'admin\SettingController@index']);
    Route::get('/change.password', ['as' => 'change.password', 'uses' => 'admin\SettingController@changepassword']);
    Route::resource('post', 'admin\PostController');
    Route::resource('category', 'admin\CatagoryController');
    Route::post('/category/datatable', ['as' => 'category.datatable', 'uses' => 'admin\ProfileController@datatables']);
    Route::resource('slider', 'admin\SliderController');
    Route::resource('user', 'admin\UserController');

});
