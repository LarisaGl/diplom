@extends('app')

@section('content')

<h1>Administrators</h1>

<a href="/admins/administrators/create">Create new</a>

    <table>
      <tr>
        <td>Login</td>
        <td>Password</td>
      </tr>
    @foreach ($admins as $admin)
      <tr>
        <td>{{ $admin->login }}</td>
        <td>{{ $admin->password }}</td>
        <td><a href="{{ action ('MainAdminsController@updateForm', ['admin' => $admin -> id]) }}">Change</a></td>
        <td><a href="{{ action ('MainAdminsController@delete', ['admin' => $admin -> id]) }}">Delete</a></td>
      </tr>
    @endforeach
    </table>
    <a href="{{ action ('AdminsController@index') }}">Back</a>

@stop