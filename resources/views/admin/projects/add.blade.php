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
    <form method="POST" action="{{ url('/settings/projects/add') }}"
      id="add-project-form">
      {{ csrf_field() }}
      <div class="form-group col-sm-6">
        <label required="required" for="name" class="control-label">Name</label>
        <input type="text" class="form-control" name="name" id="name"
          placeholder="Name" data-placeholder="Name">
      </div>
      <div class="form-group col-sm-6">
        <label required="required" for="date" class="control-label">Date</label>
        <input type="text" class="form-control datepicker" name="date" id="date"
          placeholder="Date" data-placeholder="Date">
      </div>
      <div class="form-group has-textarea col-sm-12">
        <label for="description" class="control-label">Description</label>
        <textarea required="required" type="text" class="form-control"
          name="description" id="description" placeholder="Description"
          data-placeholder="Description" rows="5"></textarea>
      </div>
      <div class="form-group has-file col-sm-12">
        <label required="required" for="cover" class="control-label">Main Photo</label>
        <input type="text" class="form-control"
          placeholder="Main Photo" data-placeholder="Main Photo" data-file-input="1">
        <input type="file" class="form-control" name="cover" id="cover"
          placeholder="Main Photo" data-placeholder="Main Photo">
      </div>
      <div class="col-sm-12">
        <input type="text" class="form-control tagsinput" name="tags" id="tags"
          placeholder="Tags" data-placeholder="Tags" data-role="tagsinput">
      </div>
      <div class="form-group has-file col-sm-12 text-right" style="margin-top:20px;">
        <input type="submit" value="submit" name="submit" class="btn btn-primary">
      </div>
    </form>
  </div>
</div>
@endsection

@section('post-scripts')
@endsection
