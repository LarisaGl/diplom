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

Route::get('admins', 'AdminsController@index');

Route::get('admins/administrators', 'MainAdminsController@show');
Route::get('admins/administrators/create', 'MainAdminsController@create');
Route::get('admins/administrators/delete', 'MainAdminsController@delete');
Route::get('admins/administrators/update', 'MainAdminsController@update');
Route::post('admins/administrators/create', 'MainAdminsController@store');

Route::get('admins/users', 'UsersAdminsController@show');

Route::get('admins/catogories', 'CategoriesAdminsController@show');

Route::get('admins/asks', 'AsksAdminsController@show');