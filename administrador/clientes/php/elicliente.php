<?php

include( 'conexion.php' );

$id_usuario = $_GET['id_usuario'];
$resultado = $CNX->query( "SELECT estaActivo from usuarios WHERE id_us= '$id_usuario'" );
$registro = $resultado->fetch_assoc();

if ( $registro['estaActivo'] == 1 ) {
	$resultado = $CNX->query( "UPDATE usuarios SET estaActivo = 0  WHERE id_us='$id_usuario'" );

} else {
    $resultado = $CNX->query( "UPDATE usuarios SET estaActivo = 1  WHERE id_us='$id_usuario'" );
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Cambiar estados de usuarios</title>
</head>
<body>
<script>
alert( 'Su registro ha sido actualizado correctamente' );
window.location = '../client-list.php';
</script>
</body>
</html>