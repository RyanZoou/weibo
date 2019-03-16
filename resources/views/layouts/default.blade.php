<!DOCTYPE html>
<html>
<head>
  <title>@yield('title', 'weibo app')-高大上微博</title>
  <link rel="stylesheet" type="text/css" href=".{{mix('css/app.css')}}">
</head>
<body>
  @include('layouts._header')

  <div class="container">
    @yield('content')
    @include('layouts._footer')
  </div>
</body>
</html>
