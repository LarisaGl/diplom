@extends('app')

@section('content')

  <h1>Update {{ $admin->login }}</h1>

  <form action="{{ action ('AdminsController@update') }}" method="POST">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <input type="hidden" name="id" value="{{ $admin->id }}">
      <label>Enter new login</label><input type="text" name="login" value="{{ $admin->login }}">
      <label>Enter new password</label><input type="password" name="password" value="{{ $admin->password }}">
      <input type="submit" value="Update">
  </form>
  <a href="{{ action ('AdminsController@show') }}">Back</a>

@stop