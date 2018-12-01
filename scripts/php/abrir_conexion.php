<?php 

	//variables para la conexion.
	$host = "p:localhost";
	$usuariobd = "root";
	$password = "";
	$bdd = "mundofeliz";
	
	//lista de tablas de la bd
	$tbl1 = "superusuario";
	$tusua = "usuario";

	//asi es el parametro para acceder a una BD, en las nuevas versiones.
	$conexion=mysqli_connect($host,$usuariobd,$password,$bdd);
	if ($conexion->connect_errno){
		echo "Nuestro sitio esta experimentando fallos {$conexion->connect_errno}";
		exit();
	}
?>
