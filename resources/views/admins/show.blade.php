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
        <td><a href="/admins/administrators/update">Change password</a></td>
        <td><a href="/admins/administrators/delete">Delete</a></td>
      </tr>
    @endforeach
    </table>

@stop