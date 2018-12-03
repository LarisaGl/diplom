<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersAdminsController extends Controller
{
    public function show() {
      $users = User::all();

      return view('admins.users', compact('users'));
    }

    public function create() {
      return view('admins.usersCreate');
    }

    public function store(Request $request)
    {
        $user = new User([
          'name' => $request->input('name'),
          'email' => $request->input('email'),
          'password' => $request->input('password')
        ]);
        $user->save();
        return redirect()->action("UsersAdminsController@show");
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->action("UsersAdminsController@show");
    }

    public function updateForm(User $user) {
      return view('admins.usersUpdate', ['user' => $user]);
    }

    public function update(Request $request) {
      $user = User::findOrFail($request->id);
      $user->fill($request->all())->save();
      return redirect()->action("UsersAdminsController@show");
    }
}
