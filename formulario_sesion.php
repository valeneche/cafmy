<?php
	session_start();
	include("BD/Conexion/conexion.php");
	if(isset($_SESSION['usuario'])){
	echo '<script> window.location="BD/bd.php"; </script>';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="inicio.css">
</head>
<title>Inicio de Sesión</title>
<body>
			<h1>Iniciar Sesión</h1>
			<form method="post" action="validar.php">
				<input type="text" class="form-control" name="usuario" placeholder="Usuario" required><br>
				<input type="password" class="form-control" name="contrasena" placeholder="Contraseña" required><br>
				<input type="submit" class="enviar" name="entrar" value="Entrar">
			</form>
</body>
</html>
