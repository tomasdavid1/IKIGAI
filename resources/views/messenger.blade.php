<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mensajes</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">

    <br><br>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/projectList">Ikigai</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/projectList">Proyectos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/myprojects">Mis proyectos</a>
                <span class="sr-only">(current)</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/myprofile">Mi perfil</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/messenger">Mensajes</a>
                  <span class="sr-only">(current)</span>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3">{{Auth::User()->name}}, estos son tus solicitudes de proyectos!</h1>
        <p class="lead">Aca podes aceptar o rechazar a sus solicitudes. Acordate que cuantos mas sean en el proyecto, mejor para todos!</p>

      </header>


      <!-- Page Features -->

      <!-- /.row -->
      <div class="card card-outline-secondary my-4">
        <div class="card-header">
          Project Requests
        </div>
        <div class="card-body">

          <?php foreach ($messages as $message): ?>

            <small class="text-muted">Me llamo </small>
            <p>Me gustaría participar en tu proyecto.</p>
            <p>{{$message->body}}</p>
            <small class="text-muted">Posted by </small>
            <br>
            <br>
            <form class="" action="/requestDecision" method="post">
              {{csrf_field()}}
              <input type="submit" name="decision" value="Accept" class="btn btn-success">
              <input type="submit" name="decision" value="Decline" class="btn btn-danger">
              <input type="hidden" name="collaborator_id" value="{{$message->sender_id}}">
              <input type="hidden" name="project_id" value="{{$message->project_id}}">
            </form>

            <hr>

          <?php endforeach; ?>




        </div>
      </div>
    <!-- /.container -->
  </div>

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
