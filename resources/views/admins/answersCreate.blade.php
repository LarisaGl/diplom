@extends('app')

@section('content')

  <h1>Create Answer</h1>

  <form action="{{ action ('AnswersAdminsController@store') }}" method="POST">
    {{ csrf_field() }}
    <label>Enter your answer</label><textarea name="answer"></textarea>
    <label>Chiose ask</label>
      <select name="ask_id">
        @foreach ($asks as $ask)
          <option value="{{ $ask->id }}">{{ $ask->ask }}</option>
        @endforeach
      </select>
    <label>Chiose category</label>
    <!--Продумать как подтягивать категорию автоматически из таблицы вопросов и нужны ли вообще категории в этой таблице-->
      <select name="category_id">
        @foreach ($categories as $category)
          <option value="{{ $category->id }}">{{ $category->category }}</option>
        @endforeach
      </select>
    <label>Chiose admin</label>
    <!--В дальнейшем будет добавление админа из сессии, пока так-->
      <select name="admin_id">
        @foreach ($admins as $admin)
          <option value="{{ $admin->id }}">{{ $admin->login }}</option>
        @endforeach
      </select>
    <input type="submit" value="Add">
  </form>
  <a href="{{ action ('AnswersAdminsController@show') }}">Back</a>

@stop