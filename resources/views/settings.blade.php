@extends('layouts.app')

@section('title', "Settings")

@section('css')
<style>
.header .navbar {
  margin-bottom: 0;
}
#main-content {
  width: 100%;
  padding: 0;
}
.primary {
  background: #fafafa;
  padding: 0;
  border-right: 1px solid #dfdfdf;
}
.primary ul {
  list-style: none;
  list-style-type: none;
  padding: 0;
  margin: 10px 0;
}
.primary ul li a {
  padding: 6px 0 6px 50px;
  display: block;
}
.primary ul li a:hover {
  background-color: #f0f0f0;
}
.content-card {
  max-width: 800px;
  margin: auto;
}
.card-header {
  padding: 0 16px;
}
.card-content {
  padding: 16px;
}
</style>
@endsection

@section('content')
<section class="section full-width" id="settings-section">
  <div class="container-fluid">
    <div class="col-sm-3 primary">
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
    <div class="col-sm-9 secondary">
      <div class="content-card">
        <div class="card-header">

        </div>
        <div class="card-content">

        </div>
      </div>
    </div>
  </div>
</section>
@endsection
