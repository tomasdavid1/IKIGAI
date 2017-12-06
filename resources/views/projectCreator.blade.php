

     <html>
       <head>
         <meta charset="utf-8">
         <title>Crea un Proyecto</title>

         <link rel="stylesheet" href="{{ asset('css/Stylecuestionario.css') }}">
       </head>
       <body>
         <h1>¡Arranquemos con el Proyecto!</h1>
     <div class="logo">
       <img src="logo.jpg" alt="Ikigai" class="ikilogo">

     </div>

     <div id='form' class='_form'>
       <form action='/createProject' method='POST' name='addUser'>

         <fieldset>
           <legend>Nombre</legend>
           <textarea name='Name'>Nombra tu proyecto</textarea>
         </fieldset>

         <fieldset>
           <legend>Este proyecto necesita de trabajo en profundidad.</legend>
           <label class='input-check'>
             					<input type='radio' name='uno' value='-1'><span>No</span>
     				      </label>
           <label class='input-check'>
             					<input type='radio' name='uno' value='0'><span>Indiferente</span>
     				      </label>
           <label class='input-check'>
     					        <input type='radio' name='uno' value='1'><span>Sí</span>
           				</label>

         </fieldset>


         <fieldset>
           <legend>Es importante el nivel de compromiso de los colaboradores.</legend>

           <label class='input-check'>
                       <input type='radio' name='dos' value='-1'><span>Sí</span>
                   </label>
           <label class='input-check'>
                       <input type='radio' name='dos' value='0'><span>Meh</span>
                   </label>
           <label class='input-check'>
                       <input type='radio' name='dos' value='1'><span>No</span>
                   </label>

         </fieldset>

         <fieldset>
           <legend>Resumen</legend>
           <textarea name='about-you'>Describe brevemente tu proyecto</textarea>
         </fieldset>

         <fieldset>
           <legend>Proyecto</legend>
           <textarea name='about-yout'>Explica el proyecto con mayor profundidad.</textarea>
         </fieldset>

         <fieldset>
           <legend>Te parece más importate</legend>
           <label class='input-select'>
             <select name='Once'>
               <option selected='selected'>- Select -</option>
               <option value='ps4'>Calidad</option>
               <option value='xbox'>Cantidad</option>
             </select>
           </label>


         </fieldset>

         <fieldset>
           <legend>Preferís mantener un lenguaje formal o más distendido</legend>
           <label class='input-check'>
             					<input type='radio' name='gender' value='m'><span>Formal</span>
     				      </label>
           <label class='input-check'>
     					        <input type='radio' name='gender' value='f'><span>Distendido</span>
           				</label>
         </fieldset>


         <input type='submit' name='submit' value='INNOVAR' />
       </form>
     </div>
       </body>
     </html>

   </body>
 </html>
