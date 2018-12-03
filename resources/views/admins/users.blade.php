@extends('app')

@section('content')

  <h1>Users</h1>

  <a href="/admins/users/create">Create new</a>

  <table>
    <tr>
      <td>Name</td>
      <td>e-mail</td>
      <td>Password</td>
    </tr>
  @foreach ($users as $user)
    <tr>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->password }}</td>
      <td><a href="{{ action ('UsersAdminsController@updateForm', ['id' => $user -> id]) }}">Change</a></td>
      <td><a href="{{ action ('UsersAdminsController@delete', ['id' => $user -> id]) }}">Delete</a></td>
    </tr>
  @endforeach
  </table>
  <a href="{{ action ('AdminsController@index') }}">Back</a>

@stop