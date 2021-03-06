@extends('layouts.admin')

@section('breadcrumbs', Breadcrumbs::render('admin.pages.index'))

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-default">
        <div class="panel-heading"><span class="glyphicon glyphicon-file"></span> Posts</div>
        <ul class="list-group">
          {{ link_to_route('admin.posts.index', 'All posts', null, ['class' => 'list-group-item']) }}
          {{ link_to_route('admin.posts.create', 'New post', null, ['class' => 'list-group-item']) }}
        </ul>
      </div>
    </div>

    <div class="col-md-3">
      <div class="panel panel-default">
        <div class="panel-heading"><span class="glyphicon glyphicon-list"></span> Series</div>
        <ul class="list-group">
          {{ link_to_route('admin.series.index', 'All series', null, ['class' => 'list-group-item']) }}
          {{ link_to_route('admin.series.create', 'New series', null, ['class' => 'list-group-item']) }}
        </ul>
      </div>
    </div>

    <div class="col-md-3">
      <div class="panel panel-default">
        <div class="panel-heading"><span class="glyphicon glyphicon-briefcase"></span> Projects</div>
        <ul class="list-group">
          {{ link_to_route('admin.projects.index', 'All projects', null, ['class' => 'list-group-item']) }}
          {{ link_to_route('admin.projects.create', 'New project', null, ['class' => 'list-group-item']) }}
        </ul>
      </div>
    </div>

    <div class="col-md-3">
      <div class="panel panel-default">
        <div class="panel-heading"><span class="glyphicon glyphicon-user"></span> Users</div>
        <ul class="list-group">
          {{ link_to_route('admin.users.index', 'All users', null, ['class' => 'list-group-item']) }}
          {{ link_to_route('admin.users.create', 'New user', null, ['class' => 'list-group-item']) }}
        </ul>
      </div>
    </div>
  </div>

@stop
