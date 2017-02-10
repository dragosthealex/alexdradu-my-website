@extends('layouts.app')

@section('title', get_option('my_name') . ' | CV')

@section('content')
<section class="section full-height" id="cv-section">
  <div class="container">
    <div class="col-sm-12">
      <div class="content-card fluid">
        <div class="card-content">
          <object data="{{ url('/cv.pdf') }}" type="application/pdf" width="100%" height="600px">
            alt : <a href="{{ url('/cv.pdf') }}">CV.pdf</a>
          </object>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
