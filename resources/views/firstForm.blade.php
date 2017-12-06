
<html>
  <head>
    <meta charset="utf-8">
    <title>Cuestionario</title>

    <link rel="stylesheet" href="{{   ('css/styleCuestionario.css') }}">
  </head>
  <body>
    <h1>¡Un pequeño cuestionario antes de arrancar!</h1>
<div class="logo">
  <img src="logo.jpg" alt="Ikigai" class="ikilogo">

</div>
<br><br><br>

<div> DESCRPCION:

TIpo... Ikigai es la plataforma que te ayudara a encontrar aquello que le da sentido a tu vida.

Para ello, necesitamos saber de ti!

Responde este breve cuestionario y estaremos listos para comenzar... </div>

<div id='form' class='_form'>
  <form action='/firstForm' method='POST' name='addUser'>
    {{csrf_field()}}
    <fieldset>
      <legend>COSO</legend>
      <label class='input-check'>
        					<input type='radio' name='uno' value='-2'><span>Nada</span>
				      </label>
      <label class='input-check'>
					        <input type='radio' name='uno' value='-1'><span>Poco</span>
      				</label>
      <label class='input-check'>
        					<input type='radio' name='uno' value='0'><span>Indiferente</span>
				      </label>
      <label class='input-check'>
					        <input type='radio' name='uno' value='1'><span>Mucho</span>
      				</label>
      <label class='input-check'>
        					<input type='radio' name='uno' value='2'><span>Imprescindible</span>
				      </label>

    </fieldset>


    <fieldset>
      <legend>COSO</legend>
      <label class='input-check'>
                  <input type='radio' name='dos' value='-2'><span>Cosote</span>
              </label>
      <label class='input-check'>
                  <input type='radio' name='dos' value='-1'><span>Cosito</span>
              </label>
      <label class='input-check'>
                  <input type='radio' name='dos' value='0'><span>Cosote</span>
              </label>
      <label class='input-check'>
                  <input type='radio' name='dos' value='1'><span>Cosito</span>
              </label>
      <label class='input-check'>
                  <input type='radio' name='dos' value='2'><span>Cosote</span>
              </label>
    </fieldset>

    <fieldset>
      <legend>COSO</legend>
      <label class='input-check'>
                  <input type='radio' name='tres' value='-2'><span>Cosote</span>
              </label>
      <label class='input-check'>
                  <input type='radio' name='tres' value='-1'><span>Cosito</span>
              </label>
      <label class='input-check'>
                  <input type='radio' name='tres' value='0'><span>Cosote</span>
              </label>
      <label class='input-check'>
                  <input type='radio' name='tres' value='1'><span>Cosito</span>
              </label>
      <label class='input-check'>
                  <input type='radio' name='tres' value='2'><span>Cosote</span>
              </label>
    </fieldset>

    <fieldset>
      <legend>COSO</legend>
      <label class='input-check'>
                  <input type='radio' name='cuatro' value='-2'><span>Cosote</span>
              </label>
      <label class='input-check'>
                  <input type='radio' name='cuatro' value='-1'><span>Cosito</span>
              </label>
      <label class='input-check'>
                  <input type='radio' name='cuatro' value='0'><span>Cosote</span>
              </label>
      <label class='input-check'>
                  <input type='radio' name='cuatro' value='1'><span>Cosito</span>
              </label>
      <label class='input-check'>
                  <input type='radio' name='cuatro' value='2'><span>Cosote</span>
              </label>
    </fieldset>
    <legend>COSO</legend>
    <fieldset>
      <label class='input-check'>
        					<input type='radio' name='cinco' value='-2'><span>Nada</span>
				      </label>
      <label class='input-check'>
					        <input type='radio' name='cinco' value='-1'><span>Poco</span>
      				</label>
      <label class='input-check'>
        					<input type='radio' name='cinco' value='0'><span>Indiferente</span>
				      </label>
      <label class='input-check'>
					        <input type='radio' name='cinco' value='1'><span>Mucho</span>
      				</label>
      <label class='input-check'>
        					<input type='radio' name='cinco' value='2'><span>Imprescindible</span>
				      </label>
    </fieldset>
    <legend>COSO</legend>
    <fieldset>
      <label class='input-check'>
        					<input type='radio' name='seis' value='-2'><span>Nada</span>
				      </label>
      <label class='input-check'>
					        <input type='radio' name='seis' value='-1'><span>Poco</span>
      				</label>
      <label class='input-check'>
        					<input type='radio' name='seis' value='0'><span>Indiferente</span>
				      </label>
      <label class='input-check'>
					        <input type='radio' name='seis' value='1'><span>Mucho</span>
      				</label>
      <label class='input-check'>
        					<input type='radio' name='seis' value='2'><span>Imprescindible</span>
				      </label>
    </fieldset>
    <fieldset>
      <legend>COSO</legend>
      <label class='input-check'>
        					<input type='radio' name='siete' value='-2'><span>Nada</span>
				      </label>
      <label class='input-check'>
					        <input type='radio' name='siete' value='-1'><span>Poco</span>
      				</label>
      <label class='input-check'>
        					<input type='radio' name='siete' value='0'><span>Indiferente</span>
				      </label>
      <label class='input-check'>
					        <input type='radio' name='siete' value='1'><span>Mucho</span>
      				</label>
      <label class='input-check'>
        					<input type='radio' name='siete' value='2'><span>Imprescindible</span>
				      </label>
    </fieldset>
    <fieldset>
      <legend>COSO</legend>
      <label class='input-check'>
        					<input type='radio' name='ocho' value='-2'><span>Nada</span>
				      </label>
      <label class='input-check'>
					        <input type='radio' name='ocho' value='-1'><span>Poco</span>
      				</label>
      <label class='input-check'>
        					<input type='radio' name='ocho' value='0'><span>Indiferente</span>
				      </label>
      <label class='input-check'>
					        <input type='radio' name='ocho' value='1'><span>Mucho</span>
      				</label>
      <label class='input-check'>
        					<input type='radio' name='ocho' value='2'><span>Imprescindible</span>
				      </label>
    </fieldset>

    <fieldset>
      <legend>COSO</legend>
      <label class='input-check'>
        					<input type='radio' name='nueve' value='-2'><span>Nada</span>
				      </label>
      <label class='input-check'>
					        <input type='radio' name='nueve' value='-1'><span>Poco</span>
      				</label>
      <label class='input-check'>
        					<input type='radio' name='nueve' value='0'><span>Indiferente</span>
				      </label>
      <label class='input-check'>
					        <input type='radio' name='nueve' value='1'><span>Mucho</span>
      				</label>
      <label class='input-check'>
        					<input type='radio' name='nueve' value='2'><span>Imprescindible</span>
				      </label>
    </fieldset>

    <fieldset>
      <legend>COSO</legend>
      <label class='input-check'>
        					<input type='radio' name='diez' value='-2'><span>Nada</span>
				      </label>
      <label class='input-check'>
					        <input type='radio' name='diez' value='-1'><span>Poco</span>
      				</label>
      <label class='input-check'>
        					<input type='radio' name='diez' value='0'><span>Indiferente</span>
				      </label>
      <label class='input-check'>
					        <input type='radio' name='diez' value='1'><span>Mucho</span>
      				</label>
      <label class='input-check'>
        					<input type='radio' name='diez' value='2'><span>Imprescindible</span>
				      </label>
    </fieldset>

    <input type='submit' name='submit' value='SUBSCRIBE' />
  </form>
</div>
  </body>
</html>
