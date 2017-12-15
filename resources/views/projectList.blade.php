@extends('layouts.project')

@section('menu')
<div class="col-lg-3">
  <h1 class="my-4">Proyectos</h1>
  <div class="list-group">
    <a href="/home" class="list-group-item active">{{Auth::User()->name}}</a>
    <a href="/hot" class="list-group-item">Hot</a>
    <a href="/explore" class="list-group-item">Explorar</a>
    <br><br><br>
    <a href="{{route('newProject')}}" class="list-group-item active">CREAR UN PROYECTO</a>
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
          <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
    4.0 stars
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
