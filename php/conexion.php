<?php
$local="localhost";
$user="root";
$pw="";
$bd="sistema_gimnasio";
$CNX=new mysqli($local,$user,$pw,$bd);
if($cone->connect_error){
	echo"error";
	exit();
}


?>