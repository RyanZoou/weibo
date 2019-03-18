<!DOCTYPE html>
<html>
<head>
  <title>@yield('title', 'weibo app')-高大上微博</title>
  <link rel="stylesheet" type="text/css" href="http://localhost/weibo/public/css/app.css">
</head>
<body>
  @include('layouts._header')

  <div class="container">
    @include('shared._messages')
    @yield('content')
    @include('layouts._footer')
  </div>
</body>

<script src="http://localhost/weibo/public/js/app.js"></script>

</html>
