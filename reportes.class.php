<?php

include_once('config.php');


class  Tablas{


function __construct($nombre, $edad, $tipo)
	{
	$this->nombre=$nombre;
	$this->edad=$edad;
	$this->tipo=$tipo;
	}


public function usuarios(){

$conexionSacadatos = new Conexion();
$mysqli = $conexionSacadatos->con();

if ($this->nombre!=="" || $this->edad!=="" || $this->tipo!=="" ){
 $consulta = "SELECT * FROM nombre where nombre='$this->nombre' and edad='$this->edad' or tipo='$this->tipo' ";
}else{
 $consulta = "SELECT * FROM nombre ";
}



$resultado = $mysqli->query($consulta);
$i=0;
    while ($fila = $resultado->fetch_row()) {

echo "<tr>";
echo "<td>".$fila[0]."</td><td>".$fila[1]."</td><td>".$fila[2]."</td><td>".$fila[4]."</td>
<td><center>
<a href=usuario.php?id_us=".$fila[0]."><img src=imagenes/edit.png width=35 height=35 /></a><a href=fusuario.php?borrar=".$fila[0]."><img src=imagenes/borrar.jpg width=35 height=35 /></a>
</center></td>";
echo "</tr>";

       
 $i++;
}
echo "</table>";

}


}




?>