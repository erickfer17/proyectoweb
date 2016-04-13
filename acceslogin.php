<?php


include_once('config.php');



class Validacion{
	public $usuario;
	public $contrasena;

public function __construct($usuario, $contrasena)
    {
         $this->user = $usuario;
         $this->contra = $contrasena;
    }

 public function valida(){

 $conexionSacadatos = new Conexion();
 $linkSacadatos = $conexionSacadatos->con();
 
$consulta = "SELECT * FROM nombre where nombre='$this->user' and contrasena='$this->contra'";
$resultado = $linkSacadatos->query($consulta);
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
  }
}


?>