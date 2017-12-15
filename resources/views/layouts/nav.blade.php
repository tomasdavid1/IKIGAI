
<link href="{{asset('css/bootstrap/vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="css/logo-nav.css" rel="stylesheet">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          IKIGAI
        </a>
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
