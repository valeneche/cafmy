 
  <?php
include("conexion.php");

$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$privilegio= ["usuario"];
$estado= ["activo"];

$query = "INSERT INTO iniciar_sesion (usuario, contrasena, privilegio, estado) values ('$usuario', '$contrasena', '$privilegio', '$estado')";
$resultado = $cone->query($query);

if ($resultado)
  {
    print "<script>alert(\"Guardado exitosamente.\");window.location='../index.php';</script>";
  }
   else
   {
    echo "no se inserto";
   }
?>
