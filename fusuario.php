<?php
// CREANDO MI CONEXION
include('config.php');
if (isset($_GET['id_us'])){
	$id=$_GET['id_us'];

$consulta = "SELECT * FROM nombre where id=$id";
$resultado = $mysqli->query($consulta);
$fila = $resultado->fetch_row();

}
?>
<div class="form-style-10">
		<h1>Modificar datos</h1>
		<form method="post" action="actualiza.php">
			
			<div class="inner-wrap">
		        <label>Nombre<input type="text" name="nombre" value="<?php echo  $fila[1];?>" require=""></label>
		        <label>Edad <input type="number" name="edad" value="<?php echo  $fila[2];?>" require=""></label>
		        <label>Contraseña <input type="password" name="contrasena" value="<?php echo  $fila[3];?>" required=""></label>
		        <label>Tipo 
		        	<select require="" name="tipo"><?php if($fila[4]==admin){ $a="selected"; $b="";} else {$a=""; $b="selected"; }?>
						<option >Elige una Opcion</option>
						<option value="admin" <?php echo $a; ?>>Admin</option>
						<option value="cliente" <?php echo $b; ?>>Cliente</option>
						</select>
		        </label>
		        <input type="hidden" name="id" value="<?php echo  $fila[0];?>">
		       
		    </div>
<center><button value="1" name="env" class="button"><span>Actualizar</span></button></center>
			
		</form>
					</div>