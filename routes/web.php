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
Route::get('admins/administrators', 'AdminsController@show');
Route::get('admins/administrators/create', 'AdminsController@create');
Route::get('admins/administrators/{admin}/delete', 'AdminsController@delete');
Route::get('admins/administrators/{admin}/update', 'AdminsController@updateForm');
Route::put('admins/administrators/update', 'AdminsController@update');
Route::post('admins/administrators', 'AdminsController@store');

Route::get('admins/catogories', 'CategoriesAdminsController@show');
Route::get('admins/catogories/create', 'CategoriesAdminsController@create');
Route::get('admins/catogories/{id}/delete', 'CategoriesAdminsController@delete');
Route::post('admins/catogories', 'CategoriesAdminsController@store');
Route::get('admins/catogories/{category}/update', 'CategoriesAdminsController@updateForm');
Route::put('admins/catogories/update', 'CategoriesAdminsController@update');

Route::get('admins/asks', 'AsksAdminsController@show');
Route::get('admins/asks/create', 'AsksAdminsController@create');
Route::post('admins/asks', 'AsksAdminsController@store');
Route::get('admins/asks/{id}/delete', 'AsksAdminsController@delete');

Route::get('admins/users', 'UsersAdminsController@show');
Route::get('admins/users/create', 'UsersAdminsController@create');
Route::post('admins/users', 'UsersAdminsController@store');
Route::get('admins/users/{id}/delete', 'UsersAdminsController@delete');
Route::get('admins/users/{user}/update', 'UsersAdminsController@updateForm');
Route::put('admins/users/update', 'UsersAdminsController@update');

Route::get('admins/answers', 'AnswersAdminsController@show');
Route::get('admins/answers/{id}/delete', 'AnswersAdminsController@delete');
Route::get('admins/answers/create', 'AnswersAdminsController@create');
Route::post('admins/answers', 'AnswersAdminsController@store');