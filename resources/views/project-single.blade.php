@extends('layouts.app')

@section('title', 'Alex Radu | ' . ucwords($project->name))

@section('css')
@endsection

@section('content')
<section class="project-section" id="project_section">
  <div class="content-card">
    @if($project->hasCover())
    <div class="card-header-image">
      <img class="img-responsive" src="<?=$project->getCover()?>">
    </div>
    @endif
    <div class="card-content post">
      <?=$project->description?>
      <div class="tag-list">
        <h4>Tags</h4>
        @foreach($project->tags as $tag)<!--
          --><?=$tag == $project->tags->first()?'':',&nbsp;'?><!--
          --><a class="tag"
                href="{{ url('/?tag=' . $tag->name) }}"><?=trim($tag->name)?></a><!--
        -->@endforeach
      </div>
    </div>
  </div>
</div>
@endsection

@section('post-scripts')
@endsection
