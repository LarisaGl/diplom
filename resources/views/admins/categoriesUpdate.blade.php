@extends('app')

@section('content')

  <h1>Update Category {{ $category->category }}</h1>

  <form action="{{ action ('CategoriesAdminsController@update') }}" method="POST">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <input type="hidden" name="id" value="{{ $category->id }}">
      <label>Enter new category</label><input type="text" name="category">
      <input type="submit" value="Update">
  </form>
  <a href="{{ action ('CategoriesAdminsController@show') }}">Back</a>

@stop