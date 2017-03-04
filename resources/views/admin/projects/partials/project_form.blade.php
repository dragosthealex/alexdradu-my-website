<form method="POST" action="<?=$action?>"
  id="add-project-form"
  enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="form-group col-sm-6">
    <label required="required" for="name" class="control-label">Name</label>
    <input type="text" class="form-control" name="name" id="name"
      placeholder="Name" data-placeholder="Name"
      value="<?=$project?$project->name:old('name')?>">
  </div>
  <div class="form-group col-sm-6">
    <label required="required" for="date" class="control-label">Date</label>
    <input type="text" class="form-control datepicker" name="date" id="date"
      placeholder="Date" data-placeholder="Date"
      value="<?=$project?$project->date:old('date')?>">
  </div>
  <div class="form-group col-sm-6">
    <label for="date_alt" class="control-label">Date (Alternative)</label>
    <input type="text" class="form-control" name="date_alt" id="date_alt"
      placeholder="Date (Alternative)" data-placeholder="Date (Alternative)"
      value="<?=$project?$project->date_alt:old('date_alt')?>">
  </div>
  <div class="form-group col-sm-12">
    <label for="git" class="control-label">Git URL</label>
    <input type="text" class="form-control" name="git" id="git"
      placeholder="Git URL" data-placeholder="Git URL"
      value="<?=$project?$project->git:old('git')?>">
  </div>
  <div class="form-group col-sm-12">
    <label for="demo" class="control-label">Demo URL</label>
    <input type="text" class="form-control" name="demo" id="demo"
      placeholder="Demo URL" data-placeholder="Demo URL"
      value="<?=$project && isset($project->urls['demo'])?
                $project->urls['demo']:old('demo')?>">
  </div>
  <div class="form-group col-sm-12">
    <label for="url1" class="control-label">URL 1</label>
    <input type="text" class="form-control" name="url1" id="url1"
      placeholder="URL 1" data-placeholder="URL 1"
      value="<?=$project && isset($project->urls['external'])?
                $project->urls['external']:old('url1')?>">
  </div>
  <div class="form-group has-textarea col-sm-12">
    <label for="short_description" class="control-label">Short Description</label>
    <textarea required="required" type="text" class="form-control"
      name="short_description" id="short_description" placeholder="Short Description"
      data-placeholder="Short Description" rows="2"><?=$project?$project->short_description:old('short_description')?></textarea>
  </div>
  <div class="form-group has-textarea col-sm-12">
    <label for="description" class="control-label">Description</label>
    <textarea required="required" type="text" class="form-control editor"
      name="description" id="description" placeholder="Description"
      data-placeholder="Description" rows="5"><?=$project?$project->description:old('description')?></textarea>
  </div>
  <div class="form-group has-file col-sm-12">
    <label required="required" for="cover" class="control-label">Main Photo</label>
    <input type="text" class="form-control"
      placeholder="Main Photo" data-placeholder="Main Photo" data-file-input="1">
    <input type="file" class="form-control" name="cover" id="cover"
      placeholder="Main Photo" data-placeholder="Main Photo">
    @if($project && $project->hasCover())
    <img class="thumb img-thumb img-thumbnail img-rounded img-responsive"
         src="{{ url('photos/'.Auth::id().'/projects/'.$project->slug.'/cover.png') }}">
    @endif
  </div>
  <div class="col-sm-12">
    <input type="text" class="form-control tagsinput" name="tags" id="tags"
      placeholder="Tags" data-placeholder="Tags" data-role="tagsinput">
  </div>
  <div class="form-group has-file col-sm-12 text-right" style="margin-top:20px;">
    <input type="submit" value="submit" name="submit" class="btn btn-primary">
  </div>
</form>
