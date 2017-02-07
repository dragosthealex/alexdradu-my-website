@extends('layouts.admin')

@section('title', "Settings | " . $project->name)

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
    <form method="POST" action="{{ url('/settings/projects/edit/'.$project->id) }}"
      id="add-project-form"
      enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group col-sm-6">
        <label required="required" for="name" class="control-label">Name</label>
        <input type="text" class="form-control" name="name" id="name"
          placeholder="Name" data-placeholder="Name" value="<?=$project->name?>">
      </div>
      <div class="form-group col-sm-6">
        <label required="required" for="date" class="control-label">Date</label>
        <input type="text" class="form-control datepicker" name="date" id="date"
          placeholder="Date" data-placeholder="Date"  value="<?=$project->date?>">
      </div>
      <div class="form-group col-sm-12">
        <label for="git" class="control-label">Git URL</label>
        <input type="text" class="form-control" name="git" id="git"
          placeholder="Git URL" data-placeholder="Git URL"  value="<?=$project->git?>">
      </div>
      <div class="form-group has-textarea col-sm-12">
        <label for="short_description" class="control-label">Short Description</label>
        <textarea required="required" type="text" class="form-control"
          name="short_description" id="short_description" placeholder="Short Description"
          data-placeholder="Short Description" rows="2"><?=$project->short_description?></textarea>
      </div>
      <div class="form-group has-textarea col-sm-12">
        <label for="description" class="control-label">Description</label>
        <textarea required="required" type="text" class="form-control editor"
          name="description" id="description" placeholder="Description"
          data-placeholder="Description" rows="5"><?=$project->description?></textarea>
      </div>
      <div class="form-group has-file col-sm-12">
        <label required="required" for="cover" class="control-label">Change Main Photo</label>
        <input type="text" class="form-control"
          placeholder="Change Main Photo" data-placeholder="Change Main Photo" data-file-input="1">
        <input type="file" class="form-control" name="cover" id="cover"
          placeholder="Change Main Photo" data-placeholder="Change Main Photo">
        <img class="thumb img-thumb img-thumbnail img-rounded img-responsive"
             src="{{ url('photos/'.Auth::id().'/projects/'.$project->slug.'/cover.png') }}">
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
<script>
$(document).ready(function() {
  // Add the tags
  input = $('.tagsinput');
  <?php foreach($project->tags as $tag) { ?>
    input.tagsinput('add', '<?=$tag->name?>');
  <?php } ?>
});
</script>
@endsection
