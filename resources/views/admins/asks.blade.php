@extends('app')

@section('content')

  <h1>Asks</h1>

  <a href="/admins/asks/create">Create new</a>

  <table>
    <tr>
      <td>Ask</td>
      <td>Status</td>
      <td>Date add</td>
      <td>Category</td>
      <td>User</td>
      <td>Answer</td>
    </tr>
  @foreach ($asks as $ask)
    <tr>
      <td>{{ $ask->ask }}</td>
      @if ($ask->status == 1)
        <td>Oжидает ответа</td>
      @elseif ($ask->status == 2)
        <td>Oпубликован</td>
      @elseif ($ask->status == 3)
        <td>Скрыт</td>
      @endif
      <td>{{ $ask->created_at }}</td>
      @foreach ($categories as $category)
        @if ($category->id == $ask->category_id)
          <td>{{ $category->category }}</td>
        @endif
      @endforeach
      @foreach ($users as $user)
        @if ($user->id == $ask->user_id)
          <td>{{ $user->name }}</td>
        @endif
      @endforeach
      @foreach ($answers as $answer)
        @if ($ask->answer_id && $answer->id == $ask->answer_id)
          <td>{{ $answer->answer }}</td>
        @else
          <td><a href="#">Add answer</a></td>
        @endif
      @endforeach
      <td><a href="#">Change</a></td>
      <td><a href="{{ action ('AsksAdminsController@delete', ['id' => $ask -> id]) }}">Delete</a></td>
      @if ($ask->answer_id && $ask->status == 1)
        <td><a href="#">Измените статус!</a></td>
      @endif
    </tr>
  @endforeach
  </table>
  <a href="{{ action ('AdminsController@index') }}">Back</a>

@stop