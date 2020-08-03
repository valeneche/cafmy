<?php
if (isset($_POST['activar'])) 
{
include('conexion.php');

$id_usuario=$_GET['id_usuario'];

$consulta_estado_usuario= "SELECT estaActivo from usuarios WHERE id_usuario='$id_usuario'";
$resultado_estado=mysqli_query($CNX,$consuta_estado_usuario);

if ($row['estaActivo'] == 1) {
	$consulta="UPDATE usuarios SET estaActivo = 0  WHERE id_usuario='$id_usuario'";
	$resultado=mysqli_query($CNX,$consulta);
} else {
	$consulta="UPDATE usuarios SET estaActivo = 1  WHERE id_usuario='$id_usuario'";
	$resultado=mysqli_query($CNX,$consulta);
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Eliminar Cliente</title>
</head>
<body>
<script>
	alert("Su registro ha sido actualizado correctamente");
	window.location="../client-list.php";
 </script>
</body>
</html>