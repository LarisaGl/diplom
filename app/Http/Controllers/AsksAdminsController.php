<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ask;
use App\Category;
use App\User;
use App\Answer;
use Carbon\Carbon;

class AsksAdminsController extends Controller
{
    public function show() {
      $asks = Ask::all();
      $categories = Category::all();
      $users = User::all();
      $answers = Answer::all();

      return view('admins.asks', compact('asks', 'users', 'categories', 'answers'));
    }

    public function create() {
        $categories = Category::all();
        $users = User::all();
        $asks = Ask::all();
        $answers = Answer::all();
        return view('admins.asksCreate', compact('categories', 'users', 'asks', 'answers'));
    }

    public function store(Request $request) {
        $ask = new Ask([
          'ask' => $request->input('ask'),
          'status' => $request->input('status'),
          'category_id' => $request->input('category_id'),
          'user_id' => $request->input('user_id'),
          'answer' => $request->input('answer_id')
        ]);
        $ask->save();
        return redirect()->action("AsksAdminsController@show");
    }

    public function delete($id) {
        $ask = Ask::findOrFail($id);
        $ask->delete();
        return redirect()->action("AsksAdminsController@show");
    }
}
