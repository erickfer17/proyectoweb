
	<div>
		
			<center>		

			<?php
include('config.php');

echo "<table class=responstable>";
echo "<thead>";
echo "	<tr>
					<th>ID</th>
					<th>NOMBRE</th>
					<th>EDAD</th>
					<th>TIPO</th>
					<th>opciones</th>
					</tr>";
$consulta = "SELECT * FROM nombre";
$resultado = $mysqli->query($consulta);
    while ($fila = $resultado->fetch_row()) {
echo "<tr>";
echo "<td>".$fila[0]."</td><td>".$fila[1]."</td><td>".$fila[2]."</td><td>".$fila[4]."</td><td><a href=usuario.php?id_us=".$fila[0]."><span><center><img src=imagenes/edit.png width=35 height=35 /></center></span></a></td>";
echo "</tr>";

       
   
}
echo "</table>";





			?>
			<a href="usuario.php?id_us=10&amp;t=1"><button type="submit" class="button" style="margin-bottom: 30%;"><span>Agregar</span></button></a>
				
		</div>