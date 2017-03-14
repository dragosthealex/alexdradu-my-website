<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="I am a passionate and enthusiast Artificial Intelligence student, always keen to learn new technologies. With enough determination, everything is possible.">
        <title>@yield('title')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600"
          rel="stylesheet" type="text/css">
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto"
          rel="stylesheet">
        <link rel="stylesheet"
          type="text/css" href="{{ asset('css/global.css') }}">
        @yield('css')
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-93697893-1', 'auto');
          ga('send', 'pageview');

        </script>
        @yield('pre-scripts')
    </head>
    <body class="home">
        @include('partials.header')
        <div class="container main-content" id="main-content">
            @yield('content')
        </div>
        @include('partials.footer')
    </body>
    <script
      src="https://code.jquery.com/jquery-1.12.4.min.js"
      integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
      crossorigin="anonymous">
    </script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
    <script src="{{ asset('js/global.js') }}"></script>
    @yield('post-scripts')

</html>
