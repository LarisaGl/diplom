<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Diplom page</title>
  <style>
      table, tr, td { 
      border: 1px solid black;
      text-align: center;
      }
  </style>
</head>
<body>

  <div class="container">
    @yield('content')
  </div>

</body>
</html>