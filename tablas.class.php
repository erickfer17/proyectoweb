<?php

include_once('config.php');


class  Tablas{

public function usuarios(){

$conexionSacadatos = new Conexion();
$mysqli = $conexionSacadatos->con();

$consulta = "SELECT * FROM nombre";
$resultado = $mysqli->query($consulta);
$i=0;
    while ($fila = $resultado->fetch_row()) {

if ($i%2==0){
  //  echo "el $numero es par";
    $stile="row1";
}else{
   // echo "el $numero es impar";
     $stile="row2";
}
echo "<tr class=".$stile.">";
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