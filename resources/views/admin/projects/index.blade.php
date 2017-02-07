@extends('layouts.admin')

@section('title', "Settings | Projects")

@section('css')

@endsection

@section('content')
<div class="content-card">
  <div class="card-header">
    <h2>
      Projects<a class="btn btn-round" href="{{ url('settings/projects/add') }}">+</a>
    </h2>
  </div>
  <div class="card-content">
    <table class="datatables table table-striped table-condensed">
      <thead>
        <th>Name</th>
        <th>Date</th>
        <th>Tags</th>
        <th>Actions</th>
      </thead>
      <tbody>
        @foreach($projects as $project)
        <tr>
          <td><?=$project->name?></td>
          <td><?=$project->date?></td>
          <td>
            @foreach($project->tags as $tag)
              <?=$tag->name?>,&nbsp;
            @endforeach
          </td>
          <td><a href="{{ url('projects/delete/'.$project->id)}}" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
