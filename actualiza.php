<?php
// CREANDO MI CONEXION



include_once('config.php');


class NuevoRegistro extends Conexion
{
	
	

	public $id;
	public $nombre;
	public $edad;
	public $contrasena;
	public $tipo;
	
	function __construct($id, $nombre, $edad, $contrasena, $tipo)
	{
	$this->id=$id;
	$this->nombre=$nombre;
	$this->edad=$edad;
	$this->contrasena=$contrasena;
	$this->tipo=$tipo;
	}

	public function actualiza()
	{
	$conexionSacadatos = new Conexion();
    $linkSacadatos = $conexionSacadatos->con();			
	$consulta = "UPDATE nombre SET nombre='$this->nombre', edad='$this->edad', contrasena='$this->contrasena', tipo='$this->tipo' where id=$this->id ";
			if ($linkSacadatos->query($consulta)){
				header("Location: ejemplo2.php");
											}
			else{
				header("Location: login.php");
				}

	}

	public function inserta()
	{
		$conexionSacadatos = new Conexion();
   		$linkSacadatos = $conexionSacadatos->con();
			$consulta = "INSERT into nombre values('', '$this->nombre', '$this->edad', '$this->contrasena', '$this->tipo') ";
			if ($linkSacadatos->query($consulta)){
				header("Location: ejemplo2.php");
											}
			else{
				header("Location: login.php");
				}

	}
	public function borra()
	{
		$conexionSacadatos = new Conexion();
   		$linkSacadatos = $conexionSacadatos->con();
			$consulta = "DELETE from nombre where id=$this->id";
			if ($linkSacadatos->query($consulta)){
				header("Location: ejemplo2.php");
											}
			else{
				header("Location: login.php");
				}

	}
}



/*
$nombre=$_POST["nombre"];
$edad=$_POST["edad"];
$contra=$_POST["contrasena"];
$tipo=$_POST["tipo"];

if(isset($_POST["id"])){
	$id=$_POST["id"];
		$consulta = "UPDATE nombre SET nombre='$nombre', edad='$edad', contrasena='$contra', tipo='$tipo' where id=$id ";
			if ($mysqli->query($consulta)){
				header("Location: ejemplo2.php");
											}
			else{
				header("Location: login.php");
				}
					}
elseif (isset($_POST["ids"])){
	//$id=$_POST["id"];
		$consulta = "INSERT into nombre values('', '$nombre', '$edad', '$contra', '$tipo') ";
			if ($mysqli->query($consulta)){
				header("Location: ejemplo2.php");
											}
			else{
				header("Location: login.php");
				}
}elseif (isset($_GET["borrar"])){
	$id=$_GET["borrar"];
	$consulta = "DELETE from nombre where id=$id ";
			if ($mysqli->query($consulta)){
				header("Location: ejemplo2.php");
											}
			else{
				header("Location: login.php");
				}
}else{  header("Location: ejemplo2.php"); }


*/


?>