<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <link rel="stylesheet"
          type="text/css" href="{{ asset('css/admin.css') }}">
      @yield('css')
      @yield('pre-scripts')
  </head>
  <body class="home">
      @include('partials.header')
      <div class="container main-content" id="main-content">
        <section class="section full-width" id="settings-section">
          <div class="container-fluid">
            <div class="col-sm-3 primary same-height">
              <ul class="settings">
                <li>
                  <a href="{{ url('/settings') }}">Projects</a>
                </li>
                <li>
                  <a href="{{ url('/settings/tags') }}">Tags</a>
                </li>
                <li>
                  <a href="{{ url('/settings/users') }}">Users</a>
                </li>
              </ul>
            </div>
            <div class="col-sm-9 secondary same-height">
              @yield('content')
            </div>
          </div>
        </section>
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
  <script
    src="{{ asset('js/match_height.min.js') }}">
  </script>
  <script src="{{ asset('js/global.js') }}"></script>
  @yield('post-scripts')
  <script>
    $(document).ready(function() {
      $("#settings-section .same-height").matchHeight();
    });
  </script>
</html>
