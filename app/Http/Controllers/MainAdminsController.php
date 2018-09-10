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

    public function store() {

    }

    public function delete() {
      
    }

    public function update() {
      
    }
}
