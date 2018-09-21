<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class MainAdminsController extends Controller
{
    public function show() {
      $admins = Admin::all();

      return view('admins.show', compact('admins'));
    }

    public function create() {
      return view('admins.create');
    }

    public function store(Request $request)
    {
        $admin = new Admin([
          'login' => $request->input('login'),
          'password' => $request->input('password')
        ]);
        $admin->save();
        return redirect()->action("MainAdminsController@show");
    }

    public function delete(Admin $admin)
    {
        $login = $admin->login;
        $admin -> delete();
        return redirect()->action("MainAdminsController@show");
    }

    public function updateForm(Admin $admin) {
      return view('admins.updateForm', ['admin' => $admin]);
    }

    public function update(Request $request) {
      $admin = Admin::findOrFail($request->id);
      $admin->fill($request->all())->save();
      return redirect()->action("MainAdminsController@show");
    }
}
