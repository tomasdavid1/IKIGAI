<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mis proyectos</title>

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
              <a class="nav-link" href="/partnershipsRecieved">
              <img src="{{asset('img/mensajes.png') }}" style="vertical-align: middle;
  border-style: none;
  height: 4vh;"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/projectList">Proyectos
              </a>
            </li>
            <li class="nav-item active">

              <a class="nav-link" href="/myProjects">Mis proyectos</a>
                <span class="sr-only">(current)</span>
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

      <!-- Jumbotron Header -->


      <!-- Page Features -->

      <?php if (count($myProjects) == 0): ?>



        <header class="jumbotron my-4">

          <h1 class="display-3"><?php echo Auth::User()->name ?> Aún no has creado ningú n proyecto!</h1>
          <p class="lead"> Un proyecto es una oportunidad de crecimiento personal y para eso IKIGAI te ayuda a conectarte con personas que estimulen tu desarrollo! Podes crear uno a continuacion y ya ser parte de nuestra comunidad!</p>
          <a href="/newProject" class="btn btn-primary btn-lg">Crear un proyecto +</a>
        </header>

      <?php else: ?>


        <header class="jumbotron my-4">

          <h1 class="display-3"><?php echo Auth::User()->name ?> estos son tus proyectos!</h1>
          <p class="lead"> Un proyecto es una oportunidad de crecimiento personal y para eso IKIGAI te ayuda a conectarte con personas que estimulen tu desarrollo! Podes crear uno a continuacion y ya ser parte de nuestra comunidad!</p>

        </header>

        <div class="row text-center">

          <?php foreach ($myProjects as $project ): ?>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">

                <div class="card-body">
                  <h4 class="card-title">{{$project->title}}</h4>
                  <p class="card-text">{{$project->summary}}</p>
                </div>
                <div class="card-footer">
                  <a href="/project/{{$project->id}}">Find More</a>

                </div>
              </div>
            </div>

          <?php endforeach; ?>

        </div>

      <?php endif; ?>

      <?php if (count($myPartnerships) == 0): ?>

        <header class="jumbotron my-4">

          <h1 class="display-3"><?php echo Auth::User()->name ?> Aún no has participado de ningun proyecto!</h1>
          <a href="/projectList" class="btn btn-primary btn-lg">Visita nuestras recomendaciones para ver cuales son los mejores para vos!</a>
        </header>


      <?php else: ?>

        <header class="jumbotron my-4">

          <h1 class="display-3"><?php echo Auth::User()->name ?> estos son tus participaciones!</h1>

        </header>

          <?php foreach ($myPartnerships as $partnership ): ?>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">

            <div class="card-body">
              <h4 class="card-title">{{$partnership->title}}</h4>
              <p class="card-text">{{$partnership->summary}}</p>
            </div>
            <div class="card-footer">

              <a href="/project/{{$partnership->id}}">Find More</a>

            </div>
          </div>
        </div>
      <?php endforeach; ?>


      <?php endif ?>

      <!-- /.row -->

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
