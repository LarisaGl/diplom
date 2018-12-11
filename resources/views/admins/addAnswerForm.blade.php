@extends('app')

@section('content')

  <h1>Add answer</h1>

    <form action="" method="POST">
      {{ csrf_field() }}
      <label>Enter your answer</label><textarea name="answer"></textarea>
      <input type="submit" value="Add">
  </form>
  <a href="{{ action ('AsksAdminsController@show') }}">Back</a>

@stop