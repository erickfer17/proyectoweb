<?php
// CREANDO MI CONEXION
include('config.php');


$nombre=$_POST["nombre"];
$edad=$_POST["edad"];
$contra=$_POST["contrasena"];
$tipo=$_POST["tipo"];

if($_POST["id"]!="")
$id=$_POST["id"];

$consulta = "UPDATE nombre SET nombre='$nombre', edad='$edad', contrasena='$contra', tipo='$tipo' where id=$id ";

if ($mysqli->query($consulta)){

	header("Location: ejemplo2.php");
}
	else{

header("Location: login.php");
}





?>