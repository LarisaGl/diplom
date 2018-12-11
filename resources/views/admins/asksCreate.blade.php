@extends('app')

@section('content')

  <h1>Create Ask</h1>

  <form action="{{ action ('AsksAdminsController@store') }}" method="POST">
    {{ csrf_field() }}
    <label>Enter your ask</label><textarea name="ask"></textarea>
    <label>Chiose status</label>
      <select name="status">
        <option value="1">Oжидает ответа</option>
        <option value="2">Oпубликован</option>
        <option value="3">Cкрыт</option>
      </select>
    <label>Chiose category</label>
      <select name="category_id">
        @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->category }}</option>
        @endforeach
      </select>
    <label>Chiose user</label>
    <!--В дальнейшем будет добавление юзера из сессии, пока так-->
      <select name="user_id">
        @foreach ($users as $user)
        <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
      </select>
    <input type="submit" value="Add">
  </form>
  <a href="{{ action ('AsksAdminsController@show') }}">Back</a>

@stop