<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('titulo')</title>
  <style type="text/css">
    h1 {
      color: navy;
    }
    .container {
      width: 800px;
      margin: auto;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>@yield('titulo')</h1>
    @yield('content')
    <hr>
  </div>
</body>
</html>