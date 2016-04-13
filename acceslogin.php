<?php

class Validacion{
	public $usuario;
	public $contrasena;

public function __construct($usuario, $contrasena)
    {
         $this->user = $usuario;
         $this->contra = $contrasena;
    }

 public function valida()
  											{

$mysqli = new mysqli("localhost", "root", "", "ejemplo");

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}


$consulta = "SELECT * FROM nombre where nombre='$this->user' and contrasena='$this->contra'";
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


  }



}
?>