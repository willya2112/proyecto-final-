<!DOCTYPE html>
<html>
<head>
	<title>boletos</title>
</head>
<link rel="stylesheet" type="text/css" href="boletos.css">
<link rel="stylesheet" type="php" href="boletos.php">
<body>
	<form class="formulario" action="procesar.php"?art=procesar.php method="POST">
		<ul class="registrate">Registrate</ul>
		<li class="letra">N# De Pasaporte<input type="text" name="idpasaporte" class="inp"></li>
		<li class="letra">Nombres<input type="text" name="nombres" class="inp1"></li>
		<li class="letra">Apellidos<input type="text" name="apellidos" class="inp2"></li>
		<li class="letra">Edad<input type="text" name="edad" class="inp3"></li>
		<li class="letra">Fecha De Nacimiento<input type="date" name="Fnacimiento" class="inp4"></li>
		<li class="letra">Nacionalidad<input type="text" name="nacionalidad" class="inp5"></li>
		<li class="letra">contraseña<input required type="password" name="clave" class="inp6"></li>
		<li class="letra">Acepto <a href="condiciones.php">terminos y condiciones</a><input class="ultimo" type="checkbox" name="" required="">
		<button class="boton" type="submit">Registrar</button>
	</form>
	<div class="ocul"></div>
</body>
</html>