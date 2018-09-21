@extends('app')

@section('content')

  <h1>Category</h1>

  <a href="/admins/catogories/create">Create new</a>

  <table>
    <tr>
      <td>Category</td>
    </tr>
  @foreach ($categories as $category)
    <tr>
      <td>{{ $category->category }}</td>
      <td><a href="{{ action ('CategoriesAdminsController@updateForm', ['id' => $category -> id]) }}">Change</a></td>
      <td><a href="{{ action ('CategoriesAdminsController@delete', ['id' => $category -> id]) }}">Delete</a></td>
    </tr>
  @endforeach
  </table>
  <a href="{{ action ('AdminsController@index') }}">Back</a>

@stop