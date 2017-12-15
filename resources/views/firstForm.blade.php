
<html>
  <head>
    <meta charset="utf-8">
    <title>Cuestionario</title>

    <link rel="stylesheet" href="{{  asset('css/Stylecuestionario.css') }}">
  </head>
  <body>
    <h1>¡Un pequeño cuestionario antes de arrancar!</h1>

  

<div id='form' class='_form'>
  <form action='/firstForm' method='POST' name='addUser'>
    {{csrf_field()}}
    <fieldset>
      <legend>Te interesan las actividades artisticas?</legend>
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
					        <input type='radio' name='uno' value='1'><span>Me gusta</span>
      				</label>
      <label class='input-check'>
        					<input type='radio' name='uno' value='2'><span>Adoro</span>
				      </label>

    </fieldset>


    <fieldset>
      <legend>Te motiva transofrmar a tu comunidad?</legend>
      <label class='input-check'>
                  <input type='radio' name='dos' value='-2'><span>Nada</span>
              </label>
      <label class='input-check'>
                  <input type='radio' name='dos' value='-1'><span>Un poco</span>
              </label>
      <label class='input-check'>
                  <input type='radio' name='dos' value='0'><span>Si, me interesa</span>
              </label>
      <label class='input-check'>
                  <input type='radio' name='dos' value='1'><span>Importante</span>
              </label>
      <label class='input-check'>
                  <input type='radio' name='dos' value='2'><span>Es el driver de mi vida</span>
              </label>
    </fieldset>

    <fieldset>
      <legend>Mucho dinero es un factor a la hora de elegir tu trabajo </legend>
      <label class='input-check'>
                  <input type='radio' name='tres' value='-2'><span>Poco</span>
              </label>
      <label class='input-check'>
                  <input type='radio' name='tres' value='-1'><span>Sí</span>
              </label>
      <label class='input-check'>
                  <input type='radio' name='tres' value='0'><span>Depende el trabajo </span>
              </label>
      <label class='input-check'>
                  <input type='radio' name='tres' value='1'><span>Para nada</span>
              </label>
      <label class='input-check'>
                  <input type='radio' name='tres' value='2'><span>Cosote</span>
              </label>
    </fieldset>

    <fieldset>
      <legend>Te considerás una persona más práctica que creativa</legend>
      <label class='input-check'>
                  <input type='radio' name='cuatro' value='-2'><span>Muy de acuerdo</span>
              </label>
      <label class='input-check'>
                  <input type='radio' name='cuatro' value='-1'><span>Algo de acuerdo</span>
              </label>
      <label class='input-check'>
                  <input type='radio' name='cuatro' value='0'><span>Meh</span>
              </label>
      <label class='input-check'>
                  <input type='radio' name='cuatro' value='1'><span>No estoy muy de acuerdo</span>
              </label>
      <label class='input-check'>
                  <input type='radio' name='cuatro' value='2'><span>No</span>
              </label>
    </fieldset>
    <legend>Te altera demasiado que cambien el orden de las cosas</legend>
    <fieldset>
      <label class='input-check'>
        					<input type='radio' name='cinco' value='-2'><span>No</span>
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
        					<input type='radio' name='cinco' value='2'><span>Demasiado</span>
				      </label>
    </fieldset>
    <legend>Tu estilo de trabajo se parece más a rachas aleatorias de mucha energía que a un enfoque metódico y organizado.</legend>
    <fieldset>
      <label class='input-check'>
        					<input type='radio' name='seis' value='-2'><span>Para nada</span>
				      </label>
      <label class='input-check'>
					        <input type='radio' name='seis' value='-1'><span>Un Poco</span>
      				</label>
      <label class='input-check'>
        					<input type='radio' name='seis' value='0'><span>Indiferente</span>
				      </label>
      <label class='input-check'>
					        <input type='radio' name='seis' value='1'><span>Sí</span>
      				</label>
      <label class='input-check'>
        					<input type='radio' name='seis' value='2'><span>Absolutamente</span>
				      </label>
    </fieldset>
    <fieldset>
      <legend>Tus sueños tienden a concentrarse en el mundo real y sus acontecimientos.</legend>
      <label class='input-check'>
        					<input type='radio' name='siete' value='-2'><span>Para nada</span>
				      </label>
      <label class='input-check'>
					        <input type='radio' name='siete' value='-1'><span>Un poco</span>
      				</label>
      <label class='input-check'>
        					<input type='radio' name='siete' value='0'><span>Meh</span>
				      </label>
      <label class='input-check'>
					        <input type='radio' name='siete' value='1'><span>Mucho</span>
      				</label>
      <label class='input-check'>
        					<input type='radio' name='siete' value='2'><span>Siempre</span>
				      </label>
    </fieldset>
    <fieldset>
      <legend>Eres más un improvisador natural que un planificador cuidadoso.</legend>
      <label class='input-check'>
        					<input type='radio' name='ocho' value='-2'><span>No</span>
				      </label>
      <label class='input-check'>
					        <input type='radio' name='ocho' value='-1'><span>Un poco</span>
      				</label>
      <label class='input-check'>
        					<input type='radio' name='ocho' value='0'><span>Ni uno ni lo otro</span>
				      </label>
      <label class='input-check'>
					        <input type='radio' name='ocho' value='1'><span>Suelo tirar para ese lado</span>
      				</label>
      <label class='input-check'>
        					<input type='radio' name='ocho' value='2'><span>Por supuesto</span>
				      </label>
    </fieldset>

    <fieldset>
      <legend>A menudo pasas tiempo explorando ideas irreales y poco prácticas pero intrigantes.</legend>
      <label class='input-check'>
        					<input type='radio' name='nueve' value='-2'><span>Para nada</span>
				      </label>
      <label class='input-check'>
					        <input type='radio' name='nueve' value='-1'><span>Casi nunca</span>
      				</label>
      <label class='input-check'>
        					<input type='radio' name='nueve' value='0'><span>Indiferente</span>
				      </label>
      <label class='input-check'>
					        <input type='radio' name='nueve' value='1'><span>Mucho</span>
      				</label>
      <label class='input-check'>
        					<input type='radio' name='nueve' value='2'><span>Siempre</span>
				      </label>
    </fieldset>

    <fieldset>
      <legend>Por lo general confías más en tu experiencia que en tu imaginación.</legend>
      <label class='input-check'>
        					<input type='radio' name='diez' value='-2'><span>Nunca</span>
				      </label>
      <label class='input-check'>
					        <input type='radio' name='diez' value='-1'><span>Casi nunca</span>
      				</label>
      <label class='input-check'>
        					<input type='radio' name='diez' value='0'><span>Indiferente</span>
				      </label>
      <label class='input-check'>
					        <input type='radio' name='diez' value='1'><span>A veces</span>
      				</label>
      <label class='input-check'>
        					<input type='radio' name='diez' value='2'><span>Siempre</span>
				      </label>
    </fieldset>

    <input type='submit' name='submit' value='SUBSCRIBE' />
  </form>
</div>
  </body>
</html>
