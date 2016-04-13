<?php


class Conexion
{

	public function con()
	{
		global $mysqli;	
 $mysqli = new mysqli("localhost", "root", "", "ejemplo");

/* comprobar la conexión */
if ($mysqli->connect_errno) {
    die('Connect Error: ' . $mysqli->connect_errno);
}
return $mysqli;

	}
}





?>