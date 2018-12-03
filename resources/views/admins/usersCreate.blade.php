@extends('app')

@section('content')

  <h1>Create Users</h1>

  <form action="{{ action ('UsersAdminsController@store') }}" method="POST">
    {{ csrf_field() }}
    <label>Enter name</label><input type="text" name="name">
    <label>Enter e-mail</label><input type="text" name="email">
    <label>Enter password</label><input type="password" name="password">
    <input type="submit" value="Add">
  </form>
  <a href="{{ action ('UsersAdminsController@show') }}">Back</a>

@stop