		<?php
		if(isset($_POST['Modificar']))
{


     	include('php/conexion.php');

		$tipo_id = $_POST['tipo'];
		$n_id = $_POST['identi'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$sexo = $_POST['sexo'];
		$direccion = $_POST['direccion'];
		$telefono = $_POST['telefono'];
		$correo = $_POST['correo'];
		$usuario = $_POST['usuario'];
		$contrasena = $_POST['contrasena'];

		

		mysqli_query($CNX,"UPDATE usuarios SET tipo_id='$tipo_id',n_id='$n_id',nombre='$nombre',apellido='$apellido',sexo='$sexo',direccion='$direccion',telefono='$telefono',correo='$correo',usuario='$usuario',contrasena='$contrasena'");

		
		include('php/conexion.php');
         
        echo "<script>alert(\"Información modificada correctamente.\");window.location='client-list.php';</script>";
	}

		?>