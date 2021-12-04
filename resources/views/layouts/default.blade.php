<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <style>
    body {
      font-size:16px;
      margin: 5px;
    }
    h1 {
      font-size:60px;
      color:black;
      margin-left: 5px;
    }
    .content {
      margin: 10px;
    }
  </style>
</herd>
<body>
  <h1>@yield('title')</h1>
  <div class="content">
    @yield('content')
  </div>
</body>
