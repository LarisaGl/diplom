@extends('app')

@section('content')

  <h1>Update {{ $user->name }}</h1>

  <form action="{{ action ('UsersAdminsController@update') }}" method="POST">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <input type="hidden" name="id" value="{{ $user->id }}">
      <label>Enter new name</label><input type="text" name="name" value="{{ $user->name }}">
      <label>Enter new e-mail</label><input type="text" name="email" value="{{ $user->email }}">
      <label>Enter new password</label><input type="password" name="password" value="{{ $user->password }}">
      <input type="submit" value="Update">
  </form>
  <a href="{{ action ('UsersAdminsController@show') }}">Back</a>

@stop