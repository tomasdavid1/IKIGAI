<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="">
      New Partnership Request

    </div>

    <form class="" action="/becomeCollaborator" method="post">
      {{csrf_field()}}
      <label for="why"></label>
      <input type="text" id='why' name="why" value="">
      <input type="hidden" name="id" value="{{$project->id}}" ?>>


      <input type="hidden" name="id" value="{{$project->id}}" ?>>
      <input type="submit" name="" value="">

    </form>
  </body>
</html>
