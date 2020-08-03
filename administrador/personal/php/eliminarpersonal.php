<?php
require('conexion.php');

$id_personal=$_GET['id_personal'];

$consulta="DELETE FROM personal WHERE 	id_personal='$id_personal'";

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
		window.location="../home.php";
	</script>
</body>
</html>