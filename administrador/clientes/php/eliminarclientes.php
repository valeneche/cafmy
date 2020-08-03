<?php
include('conexion.php');

$id_usuario=$_GET['id_usuario'];

$consulta="DELETE FROM usuarios WHERE id_usuario='$id_usuario'";

$resultado=mysqli_query($CNX,$consulta);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Eliminar</title>
</head>
<body>
	<script>
		alert("Su registro a sido eliminado correctamente");
		window.location="../client-list.php";
	</script>
</body>
</html>