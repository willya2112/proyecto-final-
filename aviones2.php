<?php include 'conexion.php';?>
<!DOCTYPE html>
<html lang="es">
<header>
<article>
<link type="text/css" href="avionescss1.css" rel="stylesheet"/>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
 <body>
 <ul class="topnav">
 <li><a class="active" href="aviones2.php">HOME</a></li>
 <li><a class="active" href="boletos.php">REGISTRO</a></li>
 <li><a class="active" href="paises.php">VALIDAR</a></li>
 <li><a class="active" >HOTELES</a></li>
 <li><a class="active" >MAPAS</a></li>
 <li><a class="active">GUÍA</a></li>
 <li><a class="active">SALIR</a></li>
 </ul>  
				<p class="verdana">RESERVA YA!</p>
			
			<marquee style="position:relative; top:-310px; left: 300px; font-family:Berlin Sans FB;  font-size: 50px; color: white" direction="left" width="55%">Bienvenidos a AereoWilly </marquee>

</header>

		<div class="dropdown">
<button class="dropbtn"></button>
<div class="dropdown-content">

        <img class="willy11" src="imagenes/alemania1.jpg"  hspace="5">
        <img class="willy11" src="imagenes/alemania2.jpg" hspace="5">
        <img class="willy11" src="imagenes/alemania3.jpg" hspace="5">
        <img class="willy11" src="imagenes/alemania3.jpg" hspace="5">
        </div>
        </div>

        <div class="dropdown1">
<button class="dropbtn1"></button>
<div class="dropdown-content1">

        <img class="willy11" src="imagenes/paris1.jpg" hspace="5">
        <img class="willy11" src="imagenes/paris2.jpg" hspace="5">
        <img class="willy11" src="imagenes/paris3.jpg" hspace="5">
        <img class="willy11" src="imagenes/paris4.jpg" hspace="5">
        
</div>
</div>

<div class="dropdown2">
<button class="dropbtn2"></button>
<div class="dropdown-content2">

        <img class="willy11" src="imagenes/madrid1.jpg" hspace="5">
        <img class="willy11" src="imagenes/madrid2.jpg" hspace="5">
        <img class="willy11" src="imagenes/madrid3.jpg" hspace="5">
        <img class="willy11" src="imagenes/madrid4.jpg" hspace="5">
        
</div>
</div>
  </head>
  <body>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">

        </div>
      </nav>
    </header>
<div class="container">
 <hr>

<div class="row">
  <div class="col-12 col-md-12">
<ul class="list-group">
  <li class="list-group-item">
<form method="post">
  <div class="form-row align-items-center">
    <div id="li">
      <input required name="PalabraClave"  type="text" id="input2"  placeholder="Ingrese nombres ">  
      <input name="buscar" type="hidden"  value="v">
    </div>
   
    <div class="sd">
      <button type="submit" class="">Buscar Ahora</button>
    </div>
  </div>
</form>
  </li>

</ul>
<?php
 
if(!empty($_POST))
{
      $aKeyword = explode(" ", $_POST['PalabraClave']);
      $query ="SELECT * FROM usuarios WHERE nombres like '%" . $aKeyword[0] . "%' OR idpasaporte like '%" . $aKeyword[0] . "%'";   
      
     for($i = 1; $i < count($aKeyword); $i++) {
        if(!empty($aKeyword[$i])) {
            $query .= " OR idpasaporte like '%" . $aKeyword[$i] . "%'";
             $query .= " OR nombres like '%" . $aKeyword[$i] . "%'";
        }
      }
     
     $result = $db->query($query);
     echo "<br>Has buscado la palabra clave:<b> ". $_POST['PalabraClave']."</b>";
                     
     if(mysqli_num_rows($result) > 0) {
        $row_count=0;
        echo "<br><br>Resultados encontrados: ";
        echo "<br><table class='table table-striped'>";
        While($row = $result->fetch_assoc()) {   
            $row_count++;                         
            echo "<tr>   Nombre     /Pasaportes    /Edades  /Nacionalidades   /Año de nacido<td>".$row_count." </td><td>". $row['nombres'] . "</td><td>". $row['idpasaporte'] . "</td><td>". $row['edad']."</td><td>". $row['nacionalidad']."</td><td>". $row['Fnacimiento']."</td><td>";
        }
        echo "</table>";
  
    }
    else {
        echo "<br>Resultados encontrados: Ninguno";
    
    }
}
 
?>
</div>
</div>
</div>
    <footer class="footer">
      <div class="container">
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    
<div class="foto1" ></div>
<div class="foto2" ></div>
<p class="letrafina">Usuarios Registrados</p>
</body>
</html>