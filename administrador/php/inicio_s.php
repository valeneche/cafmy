<?php 

$userok="";
$rol="";


if (isset($_POST["ingresar"])) {
	
	require ("conexion.php");

	$usuario=$_POST['usuario'];
	$contrasena=$_POST['clave'];

$consulta1= "SELECT usuario, contrasena, id_cargo FROM personal WHERE usuario = '$usuario' AND contrasena = '$contrasena' AND id_cargo=1";

	
$consulta2= "SELECT usuario, contrasena, id_cargo FROM personal WHERE usuario = '$usuario' AND contrasena = '$contrasena' AND id_cargo=2";

	
$consulta3= "SELECT usuario, contrasena, id_cargo FROM personal WHERE usuario = '$usuario' AND contrasena = '$contrasena' AND id_cargo=3";

	
$consulta4= "SELECT usuario, contrasena, id_cargo FROM personal WHERE usuario = '$usuario' AND contrasena = '$contrasena' AND id_cargo=4";





	if ($resultado = mysqli_query($CNX, $consulta1)) {
		while($row = $resultado-> fetch_array()){

			$userok = $row["usuario"];
			$passok = $row["contrasena"];
			$rol = $row["id_cargo"];
		}


	}

	if ($resultado = mysqli_query($CNX, $consulta2)) {
		while($row = $resultado-> fetch_array()){
			$userok = $row["usuario"];
			$passok = $row["contrasena"];
			$rol = $row["id_cargo"];
		}

	}



	if ($resultado = mysqli_query($CNX, $consulta3)) {
		while($row = $resultado-> fetch_array()){

			$userok = $row["usuario"];
			$passok = $row["contrasena"];
			$rol = $row["id_cargo"];
		}


	}

if ($resultado = mysqli_query($CNX, $consulta4)) {
		while($row = $resultado-> fetch_array()){

			$userok = $row["usuario"];
			$passok = $row["contrasena"];
			$rol = $row["id_cargo"];
		}


	}


	



	if ($rol == 1) {
		if (isset($usuario) && isset($contrasena)) {
			if ($usuario == $userok && $contrasena == $passok) {
				$_SESSION["admin"]= $_POST["ingresar"];

				echo '<script type="text/javascript">
				alert("Inició sesión correctamente");
				window.location.href="";
				</script>';
			}else{
				echo '<script type="text/javascript">

				alert("usuario y/o contraseña erroneas; VUELVE A INTENTARLO");
				window.location.href=""; </script>';

			}

		} else {
			header("location:");
		}

	} else {

	}

	
	if ($rol == 2) {
		if (isset($usuario) && isset($contrasena)) {
			if ($usuario == $userok && $contrasena == $passok) {
				$_SESSION["Entrenador"]= $_POST["ingresar"];

				echo '<script type="text/javascript">
				alert("Inició sesión correctamente");
				window.location.href="../entrenador.html";
				</script>';
			} else {
				echo '<script type="text/javascript">

				alert("usuario y/o contraseña erroneas; VUELVE A INTENTARLO");
				window.location.href="../index.php";
				</script>';
			}

		} else {
			header("location: ../index.php");
		}

	} else {
		
	}


if ($rol == 3) {
		if (isset($usuario) && isset($contrasena)) {
			if ($usuario == $userok && $contrasena == $passok) {
				$_SESSION["Deportologo"]= $_POST["ingresar"];

				echo '<script type="text/javascript">
				alert("Inició sesión correctamente");
				window.location.href="../deportologo.html";
				</script>';
			} else {
				echo '<script type="text/javascript">

				alert("usuario y/o contraseña erroneas; VUELVE A INTENTARLO");
				window.location.href="../index.php";
				</script>';
			}

		} else {
			header("location: ../index.php");
		}

	} else {

	}



	if ($rol == 4) {
		if (isset($usuario) && isset($contrasena)) {
			if ($usuario == $userok && $contrasena == $passok) {
				$_SESSION["Nutricionista"]= $_POST["ingresar"];

				echo '<script type="text/javascript">
				alert("Inició sesión correctamente");
				window.location.href="../nutricionista.html";
				</script>';
			} else {
				echo '<script type="text/javascript">

				alert("usuario y/o contraseña erroneas; VUELVE A INTENTARLO");
				window.location.href="";
				</script>';
			}

		} else {
			header("location: ../");
		}

	} else {

	}

}









?>

