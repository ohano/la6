<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/manage/login', 'LoginController@showLoginForm')->name('showLogin');
Route::post('/manage/login', 'LoginController@postLogin')->name('login');
Route::get('/manage/logout', 'LoginController@logout')->name('login');
Route::group(['prefix' => 'manage'], function () {

    Route::get('/', function () {
        dd('This is the Manage module index page. Build something great!');
    });

    Route::get('/backend', 'BackendController@index')->name('backend');
    Route::get('/createRole', 'PermissionController@createRole')->name('createRole');
    Route::get('/createPermission', 'PermissionController@createPermission')->name('createPermission');
    Route::get('/giveRole', 'PermissionController@giveRole')->name('giveRole');
});
