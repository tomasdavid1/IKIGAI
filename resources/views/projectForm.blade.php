
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
    <link rel="stylesheet" href="{{ asset('/css/Stylecuestionario.css') }}">

    <link href="css/logo-nav.css" rel="stylesheet">

  </head>
  <body>

@include('layouts.nav')

    <br><br>

    <h1>¡Comencemos con el proyecto!</h1>
<div class="logo">
  <img src="{{asset('img/logo.jpg" alt="Ikigai')}}" class="ikilogo">

</div>

<div id='form' class='_form'>
  <form action='/createProject' method='POST' name='addUser'>

    {{csrf_field()}}
    <fieldset>
      <legend>Titulo</legend>
      <input type="text" name="title" value="">
    </fieldset>

    <fieldset>
      <legend>Que nivel de impacto humanitario tiene</legend>
      <label class='input-check'>
        					<input type='radio' name='impact' value='-1'><span>No</span>
				      </label>
      <label class='input-check'>
        					<input type='radio' name='impact' value='0'><span>Algo</span>
				      </label>
      <label class='input-check'>
					        <input type='radio' name='impact' value='1'><span>Mucho</span>
      				</label>

    </fieldset>


    <fieldset>
      <legend>Esta relacionado con una actividad cultural</legend>

      <label class='input-check'>
                  <input type='radio' name='culture' value='-1'><span>Vagamente</span>
              </label>
      <label class='input-check'>
                  <input type='radio' name='culture' value='0'><span>Si</span>
              </label>
      <label class='input-check'>
                  <input type='radio' name='culture' value='1'><span>Espinda dorsal del proyecto</span>
              </label>

    </fieldset>

    <fieldset>
      <legend>Describilo en pocas palabras!</legend>
      <input type="text" name="summary" value="">
    </fieldset>

    <fieldset>
      <legend>Ennumera las principales actividades</legend>
      <textarea name='description'rows="8" cols="80"></textarea>
    </fieldset>



    <fieldset>
      <legend>A que campo pertenece?</legend>
      <label class='input-select'>
        <select name='field'>
          <option value='1'>Pasion</option>
          <option value='2'>Mision</option>
          <option value='3'>Profesion</option>
          <option value='4'>Vocacion</option>
        </select>
      </label>


    </fieldset>

    <fieldset>
      <legend>Preferís mantener un lenguaje formal o más distendido</legend>
      <label class='input-check'>
        					<input type='radio' name='formal' value='1'><span>Formal</span>
				      </label>
      <label class='input-check'>
					        <input type='radio' name='informal' value='2'><span>Distendido</span>
      				</label>
    </fieldset>


    <input type='submit' name='submit' value='INNOVAR' />
  </form>
</div>
  </body>
</html>
