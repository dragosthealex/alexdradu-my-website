@extends('layouts.admin')

@section('title', "Settings | Projects")

@section('css')

@endsection

@section('content')
<div class="content-card">
  <div class="card-header">
    <h2>
      Projects
    </h2>
  </div>
  <div class="card-content">
    @include('admin.projects.partials.project_form',[
                'project' =>  null,
                'action'  =>  url('settings/projects/add')])
  </div>
</div>
@endsection

@section('post-scripts')
@endsection
