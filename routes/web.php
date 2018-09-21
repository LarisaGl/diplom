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
Route::get('admins/administrators/{admin}/delete', 'MainAdminsController@delete');
Route::get('admins/administrators/{admin}/update', 'MainAdminsController@updateForm');
Route::put('admins/administrators/update', 'MainAdminsController@update');
Route::post('admins/administrators', 'MainAdminsController@store');

Route::get('admins/users', 'UsersAdminsController@show');

Route::get('admins/catogories', 'CategoriesAdminsController@show');
Route::get('admins/catogories/create', 'CategoriesAdminsController@create');
Route::get('admins/catogories/{id}/delete', 'CategoriesAdminsController@delete');
Route::post('admins/catogories', 'CategoriesAdminsController@store');
Route::get('admins/catogories/{category}/update', 'CategoriesAdminsController@updateForm');
Route::put('admins/catogories/update', 'CategoriesAdminsController@update');

Route::get('admins/asks', 'AsksAdminsController@show');