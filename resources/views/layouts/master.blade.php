<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Blog - @yield('title')</title>


    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">
  </head>
  <body>

        @include('layouts.nav')

        @section('carousel')
        @show


        <div>
            @yield('content')
        </div>

        @include('layouts.footer')

        <script src="/js/app.js"></script>
        <script src=""></script>
    </body>
</html>