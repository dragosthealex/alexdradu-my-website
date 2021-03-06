@extends('layouts.app')

@section('title', get_option('my_name') . ' - Software Engineer')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/vegas/vegas.min.css') }}">
<style>
.header {
  position: fixed;
  z-index: 1000;
  width: 100%;
}
.header .navbar {
  background-color: rgba(0,0,0,0);
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
  -moz-box-shadow: 0px 2px 5px 2px rgba(0,0,0,0.4);
  -webkit-box-shadow: 0px 2px 5px 2px rgba(0,0,0,0.4);
  transition: all 0.4s ease-in;
}
.header.sticky .navbar .navbar-brand,
.header.sticky .navbar ul > li > a {
  transition: all 0.4s ease-in;
}

#main-content {
    margin: 0;
    padding: 0;
    width: 100%;
}

section#landing-section {
    overflow: hidden;
    background-image: url("{{ asset('photos/1/bg/default.png') }}");
    background-position: center;
    background-size: cover;
    background-color: rgba(0,0,0,0.75);
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
.landing .container {
  color: #fafafa;
  text-align: center;
}
.landing .container .text {
  float: left;
  margin-left: 20px;
  max-width: 200px;
}
.landing .container .title {
  font-family: 'helvetica_neue', sans-serif;
  margin-top: 45px;
  text-transform: capitalize;
}
.landing .container .subtitle {
  font-family: 'Open Sans', sans-serif;
  margin-bottom: 25px;
  text-transform: capitalize;
}
.landing .container .profile-img {
  width: 200px;
  height: 200px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-color: transparent;
  border-radius: 50%;
  box-shadow: 0 1px 5px 0 rgba(0,0,0,0.5);
  -moz-box-shadow: 0 1px 5px 0 rgba(0,0,0,0.5);
  -webkit-box-shadow: 0 1px 5px 0 rgba(0,0,0,0.5);
  border: 1px solid rgba(255,255,255,0.5);
  float: right;
  margin-right: 20px;
}
.hero-text {
    margin-top: 200px;
    text-align: center;
    font-size: 70px;
    color: #fff;
    text-shadow: -1px -1px 5px rgba(0,0,0,0.4);
}
.btn-landing {
  margin-top: 50px;
  width: 50px;
  height: 50px;
  padding: 13px;
  text-align: center;
  background: rgba(68, 138, 255, 0.3);
}
.btn-landing:active,
.btn-landing:focus,
.btn-landing:active:hover {
  background: rgba(68, 138, 255, 0.4);
}

.btn-landing span {
  margin-left: 2px;
  margin-top: 2px;
  color: rgba(255,255,255,0.9);
}
/* Isotope cards */
.isotope-grid {
  margin-bottom: 6px;
}
.item-wrapper {
  margin-bottom: 16px;
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
  padding: 0;
}
.item-card .card-title {
  bottom: 20px;
  top: auto;
  margin-left: 20px;
  position: absolute;
}
.item-card .card-title a {
  color: #fafafa;
  font-family: 'Open Sans', sans-serif;
  text-transform: capitalize;
}
.item-card .card-title a:hover {
  text-decoration: none;
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
  overflow: hidden;
  padding: 0 16px;
}
.item-card .card-body .card-title {
  position: static;
  margin: 24px 0 16px 0;
  white-space: normal;
}
.item-card .card-body .card-title a {
  color: #333;
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
  text-shadow: 2px 2px 5px rgba(0,0,0,0.75);
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
  -moz-box-shadow: 0 1px 3px -2px rgba(0,0,0,0.4);
  -webkit-box-shadow: 0 1px 3px -2px rgba(0,0,0,0.4);
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
  margin: 4px 2px;
  display: inline-block;
}
.isotope-controls li .btn.active {
  padding-bottom: 4.4px;
  border-bottom: 2px solid #3F51B5;
}
/* /isotope controls */
@media(max-width:768px) {
  .landing .container {
    margin-top: 100px !important;
  }
  .landing .container .text {
    float: none;
    margin-left: 0;
    margin: auto;
  }
  .landing .container .profile-img {
    float: none;
    margin: auto;
    height: 150px;
    width: 150px;
  }
  .item-wrapper {
    padding: 0;
  }
}
</style>
@endsection

@section('content')
<section class="section full-height full-width landing" id="landing-section">
  <!-- <h1 class="hero-text">Coming soon...</h1> -->
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="profile-img img"
          style="background-image:url('{{ asset(get_option('profile_pic')) }}')">
        </div>
      </div>
      <div class="col-sm-6">
        <div class="text">
          <h1 class="title"><?=get_option('my_name')?></h1>
          <h4 class="subtitle"><?=get_option('name_subtitle')?></h4>
          <h5 class="quote"><?=get_option('quote')?></h5>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <a class="btn btn-round btn-landing btn-scroll"
           data-scroll-to="projects-section">
            <span class="glyphicon glyphicon-chevron-down"></span>
        </a>
      </div>
    </div>
  </div>
</section>
<section class="section padding full-width full-height" id="projects-section">
  <div class="container-fluid">
    <h1 class="section-title">Projects</h1>
    <div class="isotope-controls-bar">
      <div class="container no-padding">
        <ul class="isotope-controls">
          <li><a data-ripple-color="#C5CAE9"
            class="btn flat btn-default active" data-filter="*"><span>All</span></a>
          </li>
          @foreach($tags as $tag)
            <li><a data-ripple-color="#C5CAE9"
              class="btn flat btn-default" data-filter=".<?=$tag->name?>"><span><?=$tag->getOriginal('name')?></span></a>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
      <div class="container no-padding">
      <div class="isotope-grid">
        @foreach($projects as $project)
          <div class="item-wrapper col-md-4 col-sm-6 col-xs-12 <?php foreach($project->tags as $tag){echo $tag->name." ";}?>">
            <div class="has-cover item-card flip">
              <div class="front">
                <div class="card-cover" style="background-image:url('<?=$project->getCover()?>');"></div>
                <h2 class="card-title"><a><?=$project->name?></a></h2>
                <h2 class="card-date">
                  <a>
                    @if($project->date_alt)
                      <?=$project->date_alt?>
                    @else
                      <?=date('l, j F Y', strtotime($project->date))?>
                    @endif
                  </a>
                </h2>
              </div>
              <div class="back">
                <div class="card-content">
                  <div class="card-body">
                    <h2 class="card-title"><a><?=$project->name?></a></h2>
                    <h4 class="card-date">
                      @if($project->date_alt)
                        <?=$project->date_alt?>
                      @else
                        <?=date('l, j F Y', strtotime($project->date))?>
                      @endif
                    </h4>
                    <p class="card-description">
                      <?=$project->short_description?>
                      @if(false)
                        <?=substr("asdasdasdasd", 0, 100)?>... <a href="{{ url('events/' . $event->id) }}">More</a>
                      @endif
                    </p>
                  </div>
                  <hr>
                  <div class="card-footer">
                    @if($project->git)
                    <a class="btn btn-default flat has-icon"
                      href="<?=$project->git?>" data-ripple-color="#FFE0B2"
                      target="_blank">
                      <span class="btn-icon"
                            style="background-image:url('{{ asset('img/icons/github.svg') }}')">
                      </span>
                      <span>Git</span>
                    </a>
                    @endif
                    @if(isset($project->urls['demo']) && $project->urls['demo'])
                    <a class="btn btn-default flat" data-ripple-color="#FFE0B2"
                      href="<?=$project->urls['demo']?>" target="_blank">
                      <span>Demo</span>
                    </a>
                    @endif
                    @if(isset($project->urls['external'])
                      && $project->urls['external'])
                    <a class="btn btn-default flat" data-ripple-color="#FFE0B2"
                      href="<?=$project->urls['external']?>" target="_blank">
                      <span>URL</span>
                    </a>
                    @endif
                    @if($project->description)
                    <a class="btn btn-primary flat" data-ripple-color="#FFE0B2"
                      href="{{ url('/projects/' . $project->slug) }}">
                      <span>More</span>
                    </a>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
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
    $("#landing-section .container").css("margin-top", $(window).height()
                                          * 2/5);
  },
  init = function() {
    $("#landing-section .container").css("margin-top", $(window).height()
                                          * 33/100);
    // Apply fip
    $(".item-card.flip").flip({trigger: 'hover'});
    // Apply isotope
    $grid = $('.isotope-grid').isotope({
    // options
    itemSelector: '.item-wrapper',
    layoutMode: 'fitRows'
    });
    // Isotope controls
    $('.isotope-controls .btn').click(function() {
    $('.isotope-controls .btn').removeClass('active');
    $(this).addClass('active');
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({filter: filterValue})
    });
  }
  mobileInit = function() {
    // Always sticky
    $("#main-header").addClass('sticky');
    // Btn scrolls
    $(".btn-scroll").click(function() {
      var el = $("#" + $(this).attr('data-scroll-to'));
      $('html, body').scrollTop(el.offset().top);
    });
    // If we have a tag
    <?php if(isset($_GET['tag'])) { ?>
    var tag = '<?=$_GET['tag']?>';
    // Scroll to projects
    setTimeout(function() {
      $('html, body').scrollTop($("#projects-section").offset().top);
    }, 500);
    // Filter by projects
    $grid.isotope({filter: '.' + tag});
    $('.isotope-controls .btn').removeClass('active');
    $('.isotope-controls .btn[data-filter=".' + tag + '"]').addClass('active');
    <?php } ?>
  },
  desktopInit = function() {
    // Lander slider
    $("#landing-section").vegas({
        slides: [
          <?php
            $files = scandir('photos/1/bg');
            foreach($files as $file) {
              if(in_array($file, ['default.png', '.', '..'])) {
                continue;
              }
          ?>
            { src: "{{ asset('photos/1/bg/' . $file) }}" },
          <?php } ?>
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
    if($(window).scrollTop() > 0) {
      $("#main-header").addClass('sticky');
    } else {
      $("#main-header").removeClass('sticky');
    }
    // Btn scrolls
    $(".btn-scroll").click(function() {
      var el = $("#" + $(this).attr('data-scroll-to'));
      $('html, body').animate({
          scrollTop: el.offset().top
      }, 1000);
    });
    // If we have a tag
    <?php if(isset($_GET['tag'])) { ?>
    var tag = '<?=$_GET['tag']?>';
    // Scroll to projects
    setTimeout(function() {
      $('html, body').animate({
        scrollTop: $("#projects-section").offset().top
      }, 1000);
    }, 500);
    // Filter by projects
    $grid.isotope({filter: '.' + tag});
    $('.isotope-controls .btn').removeClass('active');
    $('.isotope-controls .btn[data-filter=".' + tag + '"]').addClass('active');
    <?php } ?>
  };
  $(window).resize(calledOnResize);
  // Depending if mobile or not
  init();
  if(isMobile) {
    mobileInit();
  } else {
    desktopInit();
  }
});

</script>
@endsection
