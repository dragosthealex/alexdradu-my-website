@extends('layouts.app')

@section('title', "Alex Radu's personal website")

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/vegas/vegas.min.css') }}">
<style>
#main-content {
    margin: 0;
    padding: 0;
    width: 100%;
}
section.full-height {
    height: 100vh;
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
    filter: blur(4px) brightness(0.75);
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
<section class="full-height landing" id="landing-section">
    <h1 class="hero-text">Coming soon...</h1>
</section>
@endsection

@section('post-scripts')
<script src="{{ asset('plugins/vegas/vegas.min.js') }}"></script>
<script>
$("#landing-section").vegas({
    slides: [
        { src: "{{ asset('img/bg/landing-1.jpg') }}" },
        { src: "{{ asset('img/bg/landing-2.jpg') }}" },
        { src: "{{ asset('img/bg/landing-3.jpg') }}" },
        { src: "{{ asset('img/bg/landing-4.jpg') }}" }
    ],
});
</script>
@endsection