<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('logout', 'Auth\LoginController@logout');

/*Route::group(['middleware' => ['auth', 'permissions'], function() {
    // protected routes here
    Route::get('admin', 'DashboardController@index');
}]);*/

/*Route::get('/home', 'HomeController@index');
Route::group(['prefix' => 'admin', 'middleware' => ['role:Administrator']], function() {

    Route::resource('users', 'UserController');

    Route::resource('roles', 'RoleController');

    Route::resource('permissions', 'PermissionController');
});*/


Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index');
    Route::resource('users', 'UserController', ['middleware' => ['permission:user-add|user-edit']]);
    // Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('permissions', 'PermissionController');
    Route::resource('users', 'UserController');
    Route::resource('doctors', 'DoctorController');
    /*
    \Artisan::call('route:list');
    echo '<pre>'; print_r(\Artisan::output());
    dd(123);
    */
});
