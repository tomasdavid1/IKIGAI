
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Help</title>

		<link href="{{asset('/css/help') }}" rel="stylesheet">
	</head>
	<body id='cuerpo'>
<br><br>
@include('layouts.nav')
<link href="{{asset('/css/help') }}" rel="stylesheet">
		<br><br>
		<div class="contenedor">

		<header id='cabezal'>¿Necesitas ayuda?</header>

		<form id="formulario" class="topBefore">

				  <input id="name" type="text" placeholder="NAME">
				  <input id="email" type="text" placeholder="E-MAIL">
				  <textarea id="message" type="text" placeholder="MESSAGE"></textarea>
		  <input id="submit" type="submit" value="Ayuda!">

		</form>

				</div>

	</body>
</html>
