<?php
$servidor= "localhost";
$usuario= "root";
$password = "";
$nombreBD= "viajes";
$db = new mysqli($servidor, $usuario, $password, $nombreBD);
if ($db->connect_error) {
    die("la conexión ha fallado: " . $db->connect_error);
}
if (!$db->set_charset("utf8")) {

    exit();
} else {
    
}
?>

      