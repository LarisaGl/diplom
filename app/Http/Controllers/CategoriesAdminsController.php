<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesAdminsController extends Controller
{
    public function show() {
      $categories = Category::all();

      return view('admins.categories', compact('categories'));
    }
}
