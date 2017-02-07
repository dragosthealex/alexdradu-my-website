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
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">
      <link href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css"
        rel="stylesheet">
      <link href="{{ asset('plugins/datepicker/bootstrap-material-datetimepicker.css') }}"
        rel="stylesheet">
      <link href="{{ asset('plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}"
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
    src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js">
  </script>
  <script
    src="{{ asset('plugins/match-height/match-height.min.js') }}">
  </script>
  <script
    src="{{ asset('plugins/moment/moment.min.js') }}">
  </script>
  <script
    src="{{ asset('plugins/datepicker/bootstrap-material-datetimepicker.js') }}">
  </script>
  <script src="{{ asset('js/typeahead.js') }}"></script>
  <script
    src="{{ asset('plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}">
  </script>
  <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
  <script src="{{ asset('vendor/unisharp/laravel-ckeditor/adapters/jquery.js') }}"></script>
  <script src="{{ asset('js/global.js') }}"></script>
  @yield('post-scripts')
  <script>
    $(document).ready(function() {
      $(".datatables").DataTable();
      $(".datepicker").bootstrapMaterialDatePicker({time: false});
      $('textarea').ckeditor({
        filebrowserImageBrowseUrl: "{{ url('/laravel-filemanager?type=Images') }}",
        filebrowserImageUploadUrl: "{{ url('/laravel-filemanager/upload?type=Images&_token=' . csrf_token()) }}",
        filebrowserBrowseUrl: "{{ url('/laravel-filemanager?type=Files') }}",
        filebrowserUploadUrl: "{{ url('/laravel-filemanager/upload?type=Files&_token=' . csrf_token()) }}",
      });
      setTimeout(function(){
        $("#settings-section .same-height").matchHeight();
      }, 500);
    });
  </script>
</html>
