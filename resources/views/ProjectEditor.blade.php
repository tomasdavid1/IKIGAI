<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modify Projet</title>
  </head>
  <body>

    <form class="" action="/project/{id}" method="post">
      {{csrf_field}}
      {{method_field('PUT')}}
    </form>

  </body>
</html>
