<?php

if (isset($_POST['id'])){

$nombre=$_POST["nombre"];
$edad=$_POST["edad"];
$tipo=$_POST["tipo"];
}else{
$nombre="";
$edad="";
$tipo="";

}
?>
	<div >
		
			<center>

			<!-- formulario de busquedas -->
			<div  class="form-style-10">
			<form method="post" action="#">
			
			<div class="inner-wrap">
		        <label>Nombre<input type="text" name="nombre" value="<?php echo $nombre?>" require=""></label>
		        <label>Edad <input type="number" name="edad" value="<?php echo  $edad?>" require=""></label>
		        <label>Tipo 
		        	<select require="" name="tipo"><?php if($tipo==admin){ $a="selected"; $b=""; $c="";} 
		        	elseif($tipo==cliente)  {$a=""; $b="selected"; $c="";} 
		        	else {$a=""; $b=""; $c="selected"; }  ?>
						<option value=""<?php echo $c; ?>>Elige una Opcion</option>
						<option value="admin" <?php echo $a; ?>>Admin</option>
						<option value="cliente" <?php echo $b; ?>>Cliente</option>
						</select>
		        </label>
		         <select class="form-control" placeholder="Odontologo" id="select" value="<?php echo $id_odontologo ?>" name="id_odontologo">
           
            <?php 
            include_once('config.php');
            $conexionSacadatos = new Conexion();
            $mysqli = $conexionSacadatos->con();
            $query2 = "SELECT * from preguntas";
            $resultado2 = $mysqli->query($query2) or die ($mysqli->error);
            while($row = mysqli_fetch_array($resultado2)){
           echo  $id_odontologo2=$row['id_odontologo'];
            $nombre_completo=$row['nombre_completo'];
            ?>
           <option <?php if ($id_odontologo2 == $id_odontologo ) echo 'selected'; 	?> value="<?php echo $row['idp']; ?>"><?php echo $row['pregunta']; ?></option>
          <?php }  ?>
             
          </select>
		        <input type="hidden" name="id">
		       
		    </div>
<center><button value="1" name="env" class="button"><span>Buscar</span></button></center>
</form></div>

<!-- FIN del formulario de busquedas -->

			
			<table class=responstable>";
<thead>	<tr>
					<th>ID</th>
					<th>NOMBRE</th>
					<th>EDAD</th>
					<th>TIPO</th>
					<th>opciones</th>
					</tr>		

			<?php
include_once('reportes.class.php');
$tablas = new Tablas($nombre,$edad,$tipo);
$tabla = $tablas->usuarios();


			?>
		</div>