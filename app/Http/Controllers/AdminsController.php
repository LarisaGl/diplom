<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class AdminsController extends Controller
{
    public function index() {
      return view('admins.index');
    }

    public function show() {
      $admins = Admin::all();

      return view('admins.admins', compact('admins'));
    }

    public function create() {
      return view('admins.adminsCreate');
    }

    public function store(Request $request)
    {
        $admin = new Admin([
          'login' => $request->input('login'),
          'password' => $request->input('password')
        ]);
        $admin->save();
        return redirect()->action("AdminsController@show");
    }

    public function delete(Admin $admin)
    {
        $login = $admin->login;
        $admin -> delete();
        return redirect()->action("AdminsController@show");
    }

    public function updateForm(Admin $admin) {
      return view('admins.adminsUpdate', ['admin' => $admin]);
    }

    public function update(Request $request) {
      $admin = Admin::findOrFail($request->id);
      $admin->fill($request->all())->save();
      return redirect()->action("AdminsController@show");
    }
}
