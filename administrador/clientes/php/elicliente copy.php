<?php

include( 'conexion.php' );

// $id_usuario = $_GET['id_usuario'];
$resultado = $CNX->query( 'SELECT estaActivo from usuarios WHERE id_us=2' );
$registro = $resultado->fetch_assoc();
echo "Estado inicial " . $registro['estaActivo'];

if ( $registro['estaActivo'] == 1 ) {
	$resultado = $CNX->query( 'UPDATE usuarios SET estaActivo = 0  WHERE id_us=2' );

} else {
    $resultado = $CNX->query( 'UPDATE usuarios SET estaActivo = 1  WHERE id_us=2' );
}

?>
