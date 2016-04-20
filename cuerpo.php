
	<div>
		
			<center>
			<table class=responstable>";
<thead>	<tr>
					<th>ID</th>
					<th>NOMBRE</th>
					<th>EDAD</th>
					<th>TIPO</th>
					<th>opciones</th>
					</tr>		

			<?php
include_once('tablas.class.php');
$tablas = new Tablas();
$tabla = $tablas->usuarios();


			?>


			<a href="usuario.php"><button type="submit" class="button" style="margin-bottom: 30%;"><span>Agregar</span></button></a>
				
		</div>