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

              <li class="nav-item">
                <a class="nav-link" href="/partnershipsRecieved">
                <img src="{{asset('img/mensajes.png') }}" style="vertical-align: middle;
    border-style: none;
    height: 4vh;"></a>
              </li>
              <li class="dropdown">

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
            <li class="nav-item" style="padding-top: 0.63vw;
    padding-left: 0.9vw;">

                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu">
                      <li>
                          <a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
              </li>
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
  

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('css/bootstrap/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('css/bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</div>

</div>

  </body>

</html>
