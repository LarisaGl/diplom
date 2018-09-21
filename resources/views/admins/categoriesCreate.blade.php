@extends('app')

@section('content')

  <h1>Create Categories</h1>

    <form action="{{ action ('CategoriesAdminsController@store') }}" method="POST">
      {{ csrf_field() }}
      <label>Enter category</label><input type="text" name="category">
      <input type="submit" value="Add">
  </form>
  <a href="{{ action ('CategoriesAdminsController@show') }}">Back</a>

@stop