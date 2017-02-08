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
    @include('admin.projects.partials.project_form',[
                'project' =>  $project,
                'action'  =>  url('settings/projects/edit/'.$project->id)])
  </div>
</div>
@endsection

@section('post-scripts')
<script>
$(document).ready(function() {
  // Add the tags
  input = $('.tagsinput');
  <?php foreach($project->tags as $tag) { ?>
    input.tagsinput('add', '<?=$tag->getOriginal('name')?>');
  <?php } ?>
});
</script>
@endsection
