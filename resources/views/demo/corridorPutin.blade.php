<!doctype html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Corridor Putin</title>
    <link rel="stylesheet" href="{{ asset('d/corridorPutin/TemplateData/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('d/corridorPutin/TemplateData/favicon.ico') }}" />
    <script src="{{ asset('d/corridorPutin/TemplateData/UnityProgress.js') }}"></script>
  </head>
  <body class="template">
    <div class="template-wrap clear">
      <canvas class="emscripten" id="canvas" oncontextmenu="event.preventDefault()" height="600px" width="960px"></canvas>
      <br>
      <div class="logo"></div>
      <div class="fullscreen"><img src="{{ asset('d/corridorPutin/TemplateData/fullscreen.png') }}" width="38" height="38" alt="Fullscreen" title="Fullscreen" onclick="SetFullscreen(1);" /></div>
      <div class="title">Putin.</div>
    </div>
    <script type='text/javascript'>
  var Module = {
    TOTAL_MEMORY: 268435456,
    errorhandler: null,			// arguments: err, url, line. This function must return 'true' if the error is handled, otherwise 'false'
    compatibilitycheck: null,
    backgroundColor: "#222C36",
    splashStyle: "Light",
    dataUrl: "{{ asset('d/corridorPutin/Release/web.data') }}",
    codeUrl: "{{ asset('d/corridorPutin/Release/web.js') }}",
    asmUrl: "{{ asset('d/corridorPutin/Release/web.asm.js') }}",
    memUrl: "{{ asset('d/corridorPutin/Release/web.mem') }}",
  };
</script>
<script src="{{ asset('d/corridorPutin/Release/UnityLoader.js') }}"></script>

  </body>
</html>
