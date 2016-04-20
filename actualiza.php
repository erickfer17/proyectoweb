<?php
// CREANDO MI CONEXION



include_once('config.php');


class NuevoRegistro 
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




?>