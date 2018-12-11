@extends('app')

@section('content')

  <h1>Answers</h1>

  <a href="/admins/answers/create">Create new</a>

  <table>
    <tr>
      <td>Answer</td>
      <td>Date add</td>
      <td>Ask</td>
      <td>Category</td>
      <td>Admin</td>
    </tr>
  @foreach ($answers as $answer)
    <tr>
      <td>{{ $answer->answer }}</td>
      <td>{{ $answer->created_at }}</td>
      @foreach ($asks as $ask)
        @if ($ask->id == $answer->ask_id)
          <td>{{ $ask->ask }}</td>
        @endif
      @endforeach
      @foreach ($categories as $category)
        @if ($category->id == $answer->category_id)
          <td>{{ $category->category }}</td>
        @endif
      @endforeach
      @foreach ($admins as $admin)
        @if ($admin->id == $answer->admin_id)
          <td>{{ $admin->login }}</td>
        @endif
      @endforeach
      <td><a href="#">Change</a></td>
      <td><a href="{{ action ('AnswersAdminsController@delete', ['id' => $answer -> id]) }}">Delete</a></td>
    </tr>
  @endforeach
  </table>
  <a href="{{ action ('AdminsController@index') }}">Back</a>

@stop