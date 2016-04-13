<?php
// CREANDO MI CONEXION
include('config.php');
$nombre = mysql_real_escape_string($_POST['nombre']);
$contra = mysql_real_escape_string($_POST['contrasena']);

include('acceslogin.php');

$conexion=new Validacion($nombre,$contra);
$conexion->valida(); 







?>