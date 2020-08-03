<?php
$local="localhost";
$usuariobd="root";
$password="";
$db="sistema_gimnasio";
$conexion= new mysqli ($local,$usuariobd,$password,$db);

if($conexion->connect_error){
	echo"error";
	exit();
}


?>