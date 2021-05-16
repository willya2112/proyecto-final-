<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<link rel="stylesheet" type="text/css" href="procesar.css">
<body>
<p>USUARIO REGISTRADO</p>
<button><a href="aviones2.php">HOME</a></button>
</body>
</html>
<?php
 
include('conexion.php');
session_start();
 
if (isset($_POST['register'])) {
 
    $username = $_POST['idpasaporte'];
    $nombres = $_POST['nombres'];
    $ape = $_POST['apellidos'];
        $eda = $_POST['edad'];
            $fna = $_POST['Fnacimiento'];
                $nac = $_POST['nacionalidad'];
                    $cla = $_POST['clave'];
 
 
  
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO usuarios(idpasaporte,nombres,apellidos,edad,Fnacimiento,nacionalidad,clave) VALUES (:username,:nombres,:ape:eda,:fna,:nac,:cla)");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $query->bindParam("nombres", $nombres, PDO::PARAM_STR);
        $result = $query->execute();
 
        if ($result) {
            echo '<p class="success">Your registration was successful!</p>';
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }
}
 
?>