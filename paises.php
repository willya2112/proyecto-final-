<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="paises.css">
<body>
	<div class="cuadro">
		<p class="titulo">Valide su vuelo aqui<p>
			<p>* Verifique los detalles y horarios de su vuelo</p>
				<p>* Si su vuelño esta disponible pase a registrarse</p>
<form name="form" action="" method="get">
   <p class="l1">Indique Pais De Origen</p><input type="text" name="op1" class="menu">
     <p class="l1">Indique Pais De Destino</p>
        <input type="text" name="op2" class="menu">
         <p class="l1">Numero De Boleto</p>
        <input type="text" name="op3" class="menu">
      <p class="l1">Nombre Completo</p>
    <input type="text" name="op4" class="menu">
</form>
<button onclick="doo()" class="botoncito">Prueba</button>

<script language="javascript">

    var op1 = null;
    var op2 = null;
    var op3 = null;
    var o4 = null;

function doo(){
  op1 = document.getElementsByName("op1")[0].value;
  op2 = document.getElementsByName("op2")[0].value;
  op3 = document.getElementsByName("op3")[0].value;
  op4 = document.getElementsByName("op4")[0].value;
  alert("Felicidades "+op4+"su vuelo "+op3+" con destino a "+op2+" esta disponible");
resultado=window.confirm("Rellene el siguiente formulario");
window.open("boletos.php", "Formulario de registro!");
};
</script>
</body>

</html>