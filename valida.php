<?php
// CREANDO MI CONEXION
include('config.php');


$nombre=$_POST["nombre"];
$contra=$_POST["contrasena"];

include('acceslogin.php');

$conexion=new Validacion($nombre,$contra);
$conexion->valida(); 




















/*

//$mysqli->set_charset("utf8");
 $consulta = "SELECT * FROM nombre where nombre='$nombre' and contrasena='$contra'";
$resultado = $mysqli->query($consulta);
$fila = $resultado->fetch_row();
//$n = $resultado->num_rows();

if ($fila[2]){
	$valido=1;
	session_start();
	$_SESSION["tipo"]=$fila[4];
	header("Location: ejemplo2.php?valido=$valido");
}
	else{
$valido=0;
header("Location: login.php?valido=$valido");
}

*/



?>