<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IKIGAI</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/bootstrap/css/shop-item.css') }}" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">IKIGAI</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
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
              <a class="nav-link" href="help">Help</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        @yield('menu')




        <!-- /.col-lg-3 -->

        @yield('content')
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('css/bootstrap/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('css/bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</div>

</div>

  </body>

</html>
