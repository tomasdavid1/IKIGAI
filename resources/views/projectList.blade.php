@extends('layouts.project')

@section('menu')
<div class="col-lg-3">
  <h1 class="my-4">Proyectos</h1>
  <div class="list-group">
    <a href="/projectList/recomended" class="list-group-item active">@Name@</a>
    <a href="/projectList/hot" class="list-group-item">Hot</a>
    <a href="/profiles" class="list-group-item">Explorar</a>
    <br><br><br>
    <a href="/projectCreator" class="list-group-item active">CREAR UN PROYECTO</a>
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
          <form class="" action method='get'>
            <input type="submit" name="" value="">Learn More!
            <input type="hidden" name="project_id" value="<?php $project->id  ?>">
            
          </form>
        </div>
      </div>



  <?php endforeach; ?>

  <!-- /.card -->

  <!-- /.card -->
</div>



@endsection
