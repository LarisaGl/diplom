<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
use App\Category;
use App\Admin;
use App\Ask;

class AnswersAdminsController extends Controller
{
    public function show() {
      $answers = Answer::all();
      $categories = Category::all();
      $admins = Admin::all();
      $asks = Ask::all();

      return view('admins.answers', compact('answers', 'asks', 'admins', 'categories'));
    }

    public function delete($id) {
        $ask = Answer::findOrFail($id);
        $ask->delete();
        return redirect()->action("AnswersAdminsController@show");
    }

        public function create() {
        $categories = Category::all();
        $admins = Admin::all();
        $asks = Ask::all();
        $answers = Answer::all();
        return view('admins.answersCreate', compact('categories', 'admins', 'asks', 'answers'));
    }

    public function store(Request $request) {
        $answer = new Answer([
          'answer' => $request->input('answer'),
          'ask_id' => $request->input('ask_id'),
          'category_id' => $request->input('category_id'),
          'admin_id' => $request->input('admin_id')
        ]);
        $answer->save();
        return redirect()->action("AnswersAdminsController@show");
    }
}
