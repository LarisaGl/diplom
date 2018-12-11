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

    public function create() {
      return view('admins.categoriesCreate');
    }

    public function store(Request $request) {
        $category = new Category([
          'category' => $request->input('category')
        ]);
        $category->save();
        return redirect()->action("CategoriesAdminsController@show");
    }

    public function delete($id) {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->action("CategoriesAdminsController@show");
    }

    public function updateForm(Category $category) {
      return view('admins.categoriesUpdate', ['category' => $category]);
    }

    public function update(Request $request) {
      $category = Category::findOrFail($request->id);
      $category->fill($request->all())->save();
      return redirect()->action("CategoriesAdminsController@show");
    }
}
