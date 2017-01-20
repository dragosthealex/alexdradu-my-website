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
        <th>ID</th>
        <th>Name</th>
        <th>Date</th>
        <th>Tags</th>
      </thead>
      <tbody>
        <tr>
          <td>12</td>
          <td>asdasd asd</td>
          <td>12.22.2222</td>
          <td>as asd asd asd adas asd</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection
