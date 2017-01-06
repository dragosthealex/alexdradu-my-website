@extends('layouts.app')

@section('title', "Alex Radu's personal website")

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/vegas/vegas.min.css') }}">
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
  background-color: #3F51B5;
  box-shadow: 0px 2px 5px 2px rgba(0,0,0,0.4);
  transition: all 0.4s ease-in;
}
.header.sticky .navbar .navbar-brand,
.header.sticky .navbar ul > li > a {
  color: #fafafa;
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

/* Isotope cards */
.isotope-grid {
  margin-bottom: 6px;
}
.item-wrapper {
  margin-bottom: 6px;
}
.item-card {
  height: 300px;
  background-color: transparent;
  border-radius: 5px;
}
.item-card .card-description {
  height: 60px;
  margin-bottom: 20px;
}
.item-card .card-content {
  background-color: #fefefe;
}
.item-card .card-title {
  bottom: 20px;
  top: auto;
  margin-left: 20px;
  position: absolute;
}
.item-card .card-title a {
  color: #fafafa;
  text-shadow: 2px 2px 10px rgba(0,0,0,0.5);
}
.item-card .card-details {
  font-size: 15px;
  font-weight: bold;
}
.item-card .card-subtitle {
  display: none;
}
.item-card .card-body {
  height: 240px;
}
.item-card .card-body .card-title {
  position: static;
  margin-bottom: 5px;
  margin-top: 0;
  white-space: normal;
}
.item-card .card-body .card-title a {
  color: #333;
  text-shadow: 1px 1px 1px rgb(243, 243, 5);
}
.item-card .card-body .card-date {
  margin-bottom: 5px;
}
.item-card .card-cover {
  background-repeat: no-repeat;
  background-position: center;
  background-origin: 0,0;
  border-radius: 5px;
  background-size: cover;
  height: 100%;
  cursor: pointer;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;
  -webkit-box-shadow: inset 0 -50px 200px -50px #000;
  -moz-box-shadow: inset 0 -50px 200px -50px #000;
  box-shadow: inset 0 -50px 200px -50px #000;
}
.item-card .card-cover:hover {
  -webkit-box-shadow: inset 0 -50px 200px -10px #000;
  -moz-box-shadow: inset 0 -50px 200px -10px #000;
  box-shadow: inset 0 -50px 200px -10px #000;
}
.item-card .back .card-content {
  border-radius: 5px;
}
.item-card .back hr {
  margin: 10px 0 0;
}
.item-card .back .card-footer {
  padding: 0 8px;
}
.item-card .back .card-footer a {
  margin: 8px 4px 8px 0;
}
.item-card .front {
  z-index: 2!important;
  display: none;
}
.item-card.flip .front {
  display: block;
}
.item-card .front .card-title {
}
.item-card .front .card-date {
  bottom: 0;
  position: absolute;
  font-size: 16px;
  margin-bottom: 10px;
  margin-left: 16px;
}
.item-card .front .card-date a {
  color: #fff;
  text-shadow: 1px 1px 5px rgba(0,0,0,0.5);
}
.isotope-grid.mix {
  display: none;
  padding: 0 1px;
}
/* /isotope cards */
/* isotope controls */
.isotope-controls-bar {
  text-align: center;
  margin: 0 -15px 40px;
  padding: 10px 0;
  background: #fafafa;
  box-shadow: 0 1px 3px -2px rgba(0,0,0,0.4);
}
.isotope-controls {
  list-style: none;
  list-style-type: none;
  padding: 0;
  margin: 0;
}
.isotope-controls li {
  list-style: none;
  list-style-type: none;
  margin: 0 2px;
  display: inline-block;
}
.isotope-controls li a {

}
/* /isotope controls */
</style>
@endsection

@section('content')
<section class="section full-height full-width landing" id="landing-section">
    <h1 class="hero-text">Coming soon...</h1>
</section>
<section class="section padding full-width full-height" id="projects-section">
  <div class="container-fluid">
    <h1 class="section-title">Projects</h1>
    <div class="isotope-controls-bar">
      <div class="container">
        <ul class="isotope-controls">
          <li><a data-ripple-color="#C5CAE9"
            class="btn flat btn-default"><span>Python</span></a>
          </li>
          <li><a data-ripple-color="#C5CAE9"
            class="btn flat btn-default"><span>Java</span></a>
          </li>
          <li><a data-ripple-color="#C5CAE9"
            class="btn flat btn-default"><span>PHP</span></a>
          </li>
        </ul>
      </div>
    </div>
    <div class="isotope-grid">
      <div class="item-wrapper col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="has-cover item-card flip">
          <div class="front">
            <div class="card-cover" style="background-image:url('{{ asset('img/bg/landing-1.jpg') }}');"></div>
            <h2 class="card-title"><a href="#">test</a></h2>
            <h2 class="card-date"><a href="#"><?=date('l, j F Y', strtotime('10.11.2015'))?></a></h2>
          </div>
          <div class="back">
            <div class="card-content">
              <div class="card-body">
                <h2 class="card-title"><a href="#">test</a></h2>
                <h4 class="card-date"><?=date('l, j F Y', strtotime('10.11.2015'))?></h4>
                <p class="card-description">
                  ASDASDASD ASasdas asd asd asd a a sa sa asd
                  @if(false)
                    <?=substr("asdasdasdasd", 0, 100)?>... <a href="{{ url('events/' . $event->id) }}">More</a>
                  @endif
                </p>
                <p class="card-details">
                  12 - 12, 12, 12
                </p>
              </div>
              <hr>
              <div class="card-footer">
                <a class="btn btn-primary flat" href="#"
                  data-ripple-color="#FFE0B2">
                  <span>More</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('post-scripts')
<script src="{{ asset('plugins/vegas/vegas.min.js') }}"></script>
<script src="{{ asset('plugins/isotope/isotope.pkgd.min.js') }}"></script>
<script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
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
    // Apply fip
    $(".item-card.flip").flip();
    // Apply isotope
    $('.isotope-grid').isotope({
      // options
      itemSelector: '.item-wrapper',
      layoutMode: 'fitRows'
    });
  };
  $(window).resize(calledOnResize);
  init();
});

</script>
@endsection
