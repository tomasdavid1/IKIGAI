<?php


 ?>


 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>


     <h1>aca va el FORM de Create PROJECT</h1>

     <form class="create-project" action="/createProject" method="post">

       <form action='#' method='POST' name='addUser'>
         {{csrf_field()}}
         <fieldset>

             <label class='input-check'>Please provide a Description</label>
             <textarea name="name" rows="1" cols="10" ></textarea>

             <label for="input-text">Name your Project!</label>
             <input type="text" name="title" value="">

             <input type="text" name="X" value="">X
             <input type="text" name="Y" value="">Y

             <input type="text" name="summary" value="">summary
             <input type="text" name="descrption" value="">descrpition
            <input type="text" name="location" value=""> location




         </fieldset>





         <input type='submit' name='submit' value='SUBSCRIBE' />
       </form>



     </form>
   </body>
 </html>
