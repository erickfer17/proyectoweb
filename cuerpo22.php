<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">Close</button>
                   
                </div>
                <div class="ct">
              
                </div>

            </div>
        </div>
    </div>

<!-- fin del modal -->


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
			include_once('config.php');
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
<a data-toggle='modal' data-target='#exampleModal' data-whatever=".$fila[0]."><img src=imagenes/edit.png width=35 height=35 /></a><a href=fusuario22.php?borrar=".$fila[0]."><img src=imagenes/borrar.jpg width=35 height=35 /></a>
</center></td>";
echo "</tr>";

       
 $i++;
}
echo "</table>";

			?>


			<a data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $fila[0]; ?>"><button type="submit" class="button" data-target="#exampleModal" style="margin-bottom: 30%;"><span>Agregar</span></button></a>
	
		</div>
		   <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-latest.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script>
    $('#exampleModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          var modal = $(this);
          var dataString = 'id_us=' + recipient;

            $.ajax({
                type: "GET",
                url: "fusuario22.php",
                data: dataString,
                cache: false,
                success: function (data) {
                    console.log(data);
                    modal.find('.ct').html(data);
                },
                error: function(err) {
                    console.log(err);
                }
            });  
    })
    </script>