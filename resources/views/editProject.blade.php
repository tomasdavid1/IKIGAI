

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>


     <h1>aca va el FORM de Create PROJECT</h1>



       <form action='/createProject' method='POST' name='addUser'>
         {{csrf_field()}}


         @if (count($errors) > 0)
          <div class="alert alert-danger">
          <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
          </ul>
          </div>
         @endif


         <fieldset>

             <label class='input-check'>Please provide a Description</label>
             <textarea name="name" rows="1" cols="10" ></textarea>

             <label for="input-text">Title</label>
             <input type="text" name="title" value = <php>$myProjects['title']</php>'}}>

             <input type="text" name="X" value="{{}}">X
             <input type="text" name="Y" value="{{}}">Y

             <input type="text" name="summary" value="{{}}">summary
             <input type="text" name="description" value="{{}}">descrpition
            <input type="text" name="location" value="{{}}"> location




         </fieldset>





         <input type='submit' name='submit' value='SUBSCRIBE' />




     </form>
   </body>
 </html>
