<?php
	session_start();
?>
<?php
  if(isset($_POST['enviar'])){
    include("../conexion/conexion.php");
	$usuario= $_POST['usuario'];
	$contrasena= $_POST['contrasena'];
$log=$conexion->query("SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$contrasena'");
	
	if ($log->num_rows>0) {
	  $row = mysqli_fetch_array($log);
	  $_SESSION["usuario"] = $row['usuario'];
	  print "<script>alert(\"Inicio de sesión exitoso.\");window.location='../user.html';</script>";
	  }else{
	  echo "<script>alert(\"Usuario o contraseña incorrecta.\");window.location='../index.html';</script>";
	}
}
?>
