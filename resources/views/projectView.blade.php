<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{$project->title}}</title>

    <!-- Bootstrap core CSS -->
  <link href="{{asset('css/bootstrap/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">
<br><br>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/projectList">IKIGAI</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/projectList">Proyectos
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/myProjects">Mis proyectos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/myProfile">Mi perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/help">Help</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
          <h1 class="my-4">Helicópteros Reciclados</h1>
          <div class="list-group">
            <a href="#" class="list-group-item active">Etapa 1</a>
            <a href="#" class="list-group-item active">Etapa X</a>
            <a href="#" class="list-group-item">Más Proyectos de @ @ </a>

          </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div class="card mt-4">
            <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
            <div class="card-body">
              <h3 class="card-title">Project Name</h3>
              <h4>By {{$project->author}}</h4>
              <p class="card-text">{{$project->description}}</p>

            </div>
          </div>
          <!-- /.card -->

          <?php if (Auth::User()->id == $project->collaborator_id || Auth::User()->id == $project->author): ?>


          <div class="card card-outline-secondary my-4">
            <div class="card-header">
              Project Collaborators
            </div>

            <?php if (count($project->collaborators) == 0): ?>

                <div class="card-body">
              <p>No collaborators have participated yet!</p>
            </div>

            <?php else: ?>

            <?php foreach ($project->collaborators as $collaborator): ?>

              <div class="card-body">
                <p style="display: flex;justify-content: space-between;">
                  <span>{{$collaborator->name}}</span>

                  <a class="" href="{{ route('deleteCollaborator',['collaborator_id'=>$collaborator->id, 'project_id' => $project->id])}}">
                  <img src="{{asset('img/images.png') }}" style="vertical-align: middle;
                  border-style: none;
                  height: 4vh;"></a>
                </p>
                <hr>
              </div>
            <?php endforeach; ?>

            <?php endif; ?>

                <?php if (Auth::User()->id != $project->author): ?>



                <a href="/becomeCollaborator/{{$project->id}}" class="btn btn-success">Contribute</a>

              <?php endif; ?>

          </div>

        <?php endif; ?>

          <div class="card card-outline-secondary my-4">
            <div class="card-header">
              Project Reviews
            </div>
            <div class="card-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Posted by @Contributor on 3/1/17</small>
              <hr>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Posted by @Contributor on 3/1/17</small>
              <hr>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Posted by @Contributor on @date</small>
              <hr>

                <?php if (Auth::User()->id != $project->author): ?>

                <a href="/becomeCollaborator/{{$project->id}}" class="btn btn-success">Contribute</a>

              <?php endif; ?>
            </div>
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col-lg-9 -->

      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
