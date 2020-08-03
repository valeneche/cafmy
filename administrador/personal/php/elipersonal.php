<?php
include('conexion.php');

$id_personal=$_GET['id_personal'];

$consulta="DELETE FROM personal WHERE id_personal='$id_personal'";

$resultado=mysqli_query($CNX,$consulta);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Eliminar Personal</title>
</head>
<body>
<script>
	alert("Su registro ha sido eliminado correctamente");
	window.location="../personal-list.php";
 </script>
</body>
</html>