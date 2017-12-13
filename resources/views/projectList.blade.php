@extends('layouts.project')

@section('menu')
<div class="col-lg-3">
  <h1 class="my-4">Proyectos</h1>
  <div class="list-group">
    <a href="/projectList/recomended" class="list-group-item active">@Name@</a>
    <a href="/projectList/hot" class="list-group-item">Hot</a>
    <a href="/profiles" class="list-group-item">Explorar</a>
    <br><br><br>
    <a href="/createProject" class="list-group-item active">CREAR UN PROYECTO</a>
  </div>
</div>
@endsection

@section('content')
<div class="col-lg-9">

  <?php foreach ($mainProjects as $project): ?>

      <div class="card mt-4">

        <div class="card-body">
          <h3 class="card-title">{{ $project->title }}</h3>
          <h4>{{ $project->author }}</h4>
          <p class="card-text">{{ $project->summary }}></p>

          <br><br>
          <a href="/project/{{$project->id}}" class="btn btn-success" style='background-color: #28A7F5;
    border-color: #28A7F5;'>Find More</a>
        </div>
      </div>



  <?php endforeach; ?>

  <!-- /.card -->

  <!-- /.card -->
</div>



@endsection
