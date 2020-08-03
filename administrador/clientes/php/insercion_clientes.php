<?php
if (isset($_POST['Guardar'])) 
{
include('conexion.php');
$Tipo_documento=$_POST["Tipo_documento"];
$N_documento=$_POST["N_documento"];
$Nombre=$_POST["Nombre"];
$Apellido=$_POST["Apellido"];
$Sexo=$_POST["Sexo"];
$Telefono=$_POST["Telefono"];
$Nacimiento=$_POST["Nacimiento"];
$Correo=$_POST["Correo"];
$Direccion=$_POST["Direccion"];
$Cargo=$_POST["Cargo"];

mysql_query($CNX,"INSERT INTO personal(Tipo_documento,N_documento,Nombre,Apellido,Sexo,Telefono,Nacimiento,Correo,Direccion,Cargo)VALUES('$Tipo_documento','$N_documento','$Nombre','$Apellido,'$Sexo','$Telefono','$Nacimiento','$Correo','$Direccion','$Cargo')");
}
?>

<script type="text/javascript">
	alert("no se ah podido ingresar");

</script>
