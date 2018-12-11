@extends('app')

@section('content')

  <h1>Create Administrators</h1>

  <form action="{{ action ('AdminsController@store') }}" method="POST">
    {{ csrf_field() }}
    <label>Enter login</label><input type="text" name="login">
    <label>Enter password</label><input type="password" name="password">
    <input type="submit" value="Add">
  </form>
  <a href="{{ action ('AdminsController@show') }}">Back</a>

@stop