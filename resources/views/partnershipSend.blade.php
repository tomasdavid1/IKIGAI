
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cuestionario</title>


    <link href="{{asset('/css/vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/cuestionario.css') }}">

    <link href="css/logo-nav.css" rel="stylesheet">

  </head>
  <body>

@include('layouts.nav')

    <br><br><br><br>

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-1"></div>

            <div id="editPost" class="col-md-4">
                <h3 id="demo">Quiero participar en tu proyecto!</h3>
                    <!-- <div id="bTitle">{{$project->title}}</div> -->

                    <form id="blogPost" action="/becomeCollaborator" method="POST">

                      {{csrf_field()}}
                      <fieldset id="postInput">
                    <textarea id="bContent" name="body" rows="4" placeholder="Por que te interesaria ser parte del proyecto?"></textarea>
                  </fieldset>
                  <input type="hidden" name="id" value="{{$project->id}}">
                  <input type="submit" id="submit" value="Enviar";>

                </form>
            </div>


        </div>
    </div>

  </body>
</html>
