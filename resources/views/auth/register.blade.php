@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form name="formulario"class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>


                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"  autofocus>
                                <div id="emptyname" style="color:red ; display:none">
                                  *Este espacio es obligatorio.
                                </div>
                                <div id="maxname" style="color:red ; display:none">
                                  *Este espacio debe tener menos de 20 caracteres.

                                </div>
                                <div id="nonumbername" style="color:red ; display:none">
                                  *Este espacio no puede tener números.

                                </div>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" >
                                <div id="emptymail" style="color:red ; display:none">
                                  *Este espacio es obligatorio.

                                </div>


                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" >
                                <div id="minpass" style="color:red ; display:none">
                                  *La contraseña no puede tener menos de 6 caracteres.

                                </div>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
                                <div id="passrepeat" style="color:red ; display:none">
                                  *Las contraseñas no son iguales.

                                </div>


                            </div>

                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">


window.onload = function(){

  document.forms[0].onsubmit = function(e){

        var nombre = document.getElementById('name');
    console.log(nombre);

      if (nombre.value == "") {
           document.getElementById("emptyname").style.display = "block";
          e.preventDefault();
      }else {
        document.getElementById("emptyname").style.display = "none";
      }


      if (nombre.value.length > 15) {
          document.getElementById("maxname").style.display = "block";
          e.preventDefault();
      }else {
        document.getElementById("maxname").style.display = "none";
      }
       var numbers = /[0-9]/g;

      if(nombre.value.match(numbers)){
          document.getElementById("nonumbername").style.display = "block";
          e.preventDefault();
      }else {
        document.getElementById("nonumbername").style.display = "none";
      }




        var mail = document.getElementById('email');
        console.log(mail);

        if(mail.value == ""){
          document.getElementById("emptymail").style.display = "block";
          e.preventDefault();
        }else {
          document.getElementById('emptymail').style.display = "none"
        }





              var pass = document.getElementById('password');
          console.log(pass.value);
          var passco = document.getElementById('password-confirm');
      console.log(passco.value);

      if(pass.value != passco.value){
          document.getElementById("passrepeat").style.display = "block";
          e.preventDefault();
      }else {
        document.getElementById("passrepeat").style.display = "none";
      }


      if (pass.value.length < 6) {
          document.getElementById("minpass").style.display = "block";
          e.preventDefault();
      }else {
        document.getElementById("minpass").style.display = "none";
      }
        }





};

</script>
@endsection
