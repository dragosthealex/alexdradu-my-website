@extends('layouts.app')

@section('title', "Alex Radu's personal website")

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/vegas/vegas.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}">
<style>
.header {
  position: fixed;
  z-index: 1000;
  width: 100%;
}
.header .navbar {
  border-radius: 0;
  background-color: rgba(0,0,0,0);
  border: none;
  transition: all 0.4s ease-in;
}
.header .navbar .navbar-brand,
.header .navbar ul > li > a {
  color: #fefefe;
  transition: all 0.4s ease-in;
}
.header .navbar .navbar-brand:hover,
.header .navbar ul > li > a:hover {
  color: #e0e0e0;
}
.header.sticky .navbar {
  background-color: rgba(255,255,255,0.99);
  box-shadow: -3px 0px 5px 1px rgba(0,0,0,0.3);
  transition: all 0.4s ease-in;
}
.header.sticky .navbar .navbar-brand,
.header.sticky .navbar ul > li > a {
  color: #333;
  transition: all 0.4s ease-in;
}

#main-content {
    margin: 0;
    padding: 0;
    width: 100%;
}

section#landing-section {
    overflow: hidden;
}
.vegas-wrapper, .vegas-slide {
    margin: -5px!important;
}
.vegas-slide-inner {
    -webkit-filter: filter(value);
    -moz-filter: filter(value);
    -o-filter: filter(value);
    -ms-filter: filter(value);
    filter: blur(4px) brightness(0.6);
}
.hero-text {
    margin-top: 200px;
    text-align: center;
    font-size: 70px;
    color: #fff;
    text-shadow: -1px -1px 5px rgba(0,0,0,0.4);
}
</style>
@endsection

@section('content')
<section class="section full-height full-width landing" id="landing-section">
    <h1 class="hero-text">Coming soon...</h1>
</section>
<section class="section padding full-width full-height" id="projects-section">
  <div class="container-fluid">
    <h1 class="section-title">Projects</h1>
  </div>
</section>
@endsection

@section('post-scripts')
<script src="{{ asset('plugins/vegas/vegas.min.js') }}"></script>
<script>
$(document).ready(function() {
  // Called every time window is resized
  var calledOnResize = function() {
    $("#landing-section").css("height", $(window).height());
  },
  init = function() {
    // Lander slider
    $("#landing-section").vegas({
        slides: [
            { src: "{{ asset('img/bg/landing-1.jpg') }}" },
            { src: "{{ asset('img/bg/landing-2.jpg') }}" },
            { src: "{{ asset('img/bg/landing-3.jpg') }}" },
            { src: "{{ asset('img/bg/landing-4.jpg') }}" }
        ],
    });
    // Sticky class to navbar
    $(window).scroll(function() {
      if($(window).scrollTop() > 0) {
        $("#main-header").addClass('sticky');
      } else {
        $("#main-header").removeClass('sticky');
      }
    });
  };
  $(window).resize(calledOnResize);
  init();
});

</script>
@endsection
