@extends('app')

@section('content')

  <h1>Category</h1>

  <table>
    <tr>
      <td>Category</td>
    </tr>
  @foreach ($categories as $category)
    <tr>
      <td>{{ $category->category }}</td>
    </tr>
  @endforeach
  </table>

@stop