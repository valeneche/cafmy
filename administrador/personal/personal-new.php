<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Nueva persona </title>

    <script>
        // Solo permite ingresar letras.
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>

<script type="text/javascript">
// Solo permite ingresar numeros.
function soloNumeros(e){
    var key = window.Event ? e.which : e.keyCode
    return (key >= 48 && key <= 57)
}
</script>

    <!-- Normalize V8.0.1 -->
    <link rel="stylesheet" href="./css/normalize.css">

    <!-- Bootstrap V4.3 -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!-- Bootstrap Material Design V4.0 -->
    <link rel="stylesheet" href="./css/bootstrap-material-design.min.css">

    <!-- Font Awesome V5.9.0 -->
    <link rel="stylesheet" href="./css/all.css">

    <!-- Sweet Alerts V8.13.0 CSS file -->
    <link rel="stylesheet" href="./css/sweetalert2.min.css">

    <!-- Sweet Alert V8.13.0 JS file-->
    <script src="./js/sweetalert2.min.js"></script>

    <!-- jQuery Custom Content Scroller V3.1.5 -->
    <link rel="stylesheet" href="./css/jquery.mCustomScrollbar.css">

    <!-- General Styles -->
    <link rel="stylesheet" href="./css/style.css">


</head>


<body>
    <!-- Main container -->
    <main class="full-box main-container">
        <!-- Nav lateral -->
        <section class="full-box nav-lateral">
            <div class="full-box nav-lateral-bg show-nav-lateral"></div>
            <div class="full-box nav-lateral-content">
                <figure class="full-box nav-lateral-avatar">
                    <i class="far fa-times-circle show-nav-lateral"></i>
                    <img src="./assets/avatar/Avatar.png" class="img-fluid" alt="Avatar">
                    
                </figure>
                <div class="full-box nav-lateral-bar"></div>
                <nav class="full-box nav-lateral-menu">
                    <ul>
                        <li>
                            <a href="../home.php"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Inicio</a>
                        </li>

                     
                        <li>
                            <a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Clientes <i class="fas fa-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a href="../clientes/client-new.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Cliente</a>
                                </li>
                                <li>
                                    <a href="../clientes/client-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de personal</a>
                                </li>
                               
                            </ul>
                        </li>
                                                <li>
                            <a href="#" class="nav-btn-submenu"><i class="fas fa-pallet fa-fw"></i> &nbsp; Personal <i class="fas fa-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a href="personal-new.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar personal</a>
                                </li>
                                <li>
                                    <a href="personal-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de personal</a>
                                </li>
                               
                    </ul>
                </nav>
            </div>
        </section>
        <section class="full-box page-content">
            <nav class="full-box navbar-info">
                <a href="#" class="float-left show-nav-lateral">
                    <i class="fas fa-exchange-alt"></i>
                </a>
                <a href="user-update.html">
                    <i class="fas fa-user-cog"></i>
                </a>
                <a href="#" class="btn-exit-system">
                    <i class="fas fa-power-off"></i>
                </a>
            </nav>
            <!-- Page header -->
            <div class="full-box page-header">
                <h3 class="text-left">
                    <i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR PERSONAL
                </h3>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque laudantium necessitatibus eius iure adipisci modi distinctio. Earum repellat iste et aut, ullam, animi similique sed soluta tempore cum quis corporis!
                </p>
            </div>
            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs">
                    <li>
                        <a class="active" href="../personal/personal-new.php"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR PERSONAL</a>
                    </li>
                    <li>
                        <a href="../personal/personal-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DEL PERSONAL</a>
                    </li>
                     <legend> <h6> <i class=""></i> (todos los campos con un * son obligatorios) </h6> </legend>
                </ul>
            </div>
            
            <!--CONTENT-->
            <div class="container-fluid">
				<form action="personal-new.php" method="POST" class="form-neon" autocomplete="off">
					<fieldset>
						<legend><i class="far fa-plus-square"></i> &nbsp; Información del personal</legend>
						<div class="container-fluid">
							<div class="row">

                                 <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="item_tipo" class="bmd-label-floating"> Tipo de documento *</label>
                                        <select class="form-control" name="tipo" id="item_tipo" required="">
                                            <option value="" selected="" disabled="">Seleccione una opción</option>
                                            <option>C.C. - Cedula de ciudadanía</option>
                                            <option>C.E. - Cedula de extranjería</option>
                                            <option>TI. - Tarjeta de identidad</option>

                                        </select>
                                    </div>
                                </div>
								




                               <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="item_detalle" class="bmd-label-floating">Número de documento *</label>
                                        <input type="text"  class="form-control" name="n_doc" id="item_numero" maxlength="12" onKeyPress="return soloNumeros(event)" required="">
                                    </div>
                                </div>
								
								 <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="item_nombre" class="bmd-label-floating">Nombre(s) *</label>
                                        <input type="text"  class="form-control" name="nombre" id="item_nombre" maxlength="20" onkeypress="return soloLetras(event)" required="">
                                    </div>
                                </div>
								
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="item_apellido" class="bmd-label-floating">Apellido(s) *</label>
                                        <input type="text"  class="form-control" name="apellido" id="item_apellido" maxlength="20" onkeypress="return soloLetras(event)" required="">
                                    </div>
                                </div>
								
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="item_genero" class="bmd-label-floating"> Género *</label>
                                        <select class="form-control" name="sexo" id="item_genero" required="">
                                            <option value="" selected="" disabled="">Seleccione una opción</option>
                                            <option>Masculino</option>
                                            <option>Femenino</option>
                                            <option>Otro</option>

                                        </select>
                                    </div>
                                </div>
								
                                <div class="col-12 col-md-6">
									<div class="form-group">
										<label for="item_detalle" class="bmd-label-floating">Telefono *</label>
										<input type="text"  class="form-control" name="tele" id="item_telefono" maxlength="10" onKeyPress="return soloNumeros(event)" required="">
									</div>
								</div>

                                 <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="item_fecha" class="bmd-label-floating"> Fecha de nacimiento *</label>
                                        <input type="date"  class="form-control" name="naci" id="item_nacimiento" maxlength="20" required="">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="item_correo" class="bmd-label-floating">Correo electronico *</label>
                                        <input type="text"  class="form-control" name="correo" id="item_correo" maxlength="30" required="">
                                    </div>
                                </div>

                                 <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="item_direccion" class="bmd-label-floating">Dirección *</label>
                                        <input type="text" class="form-control" name="direc" id="item_direccion" maxlength="30" required="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="item_cargo" class="bmd-label-floating"> Cargo *</label>
                                        <?php
                                        include('php/conexion.php');
                                        $consulta="select cargo, cargo FROM rol ORDER BY id_rol";

                                        $resultado=mysqli_query($CNX,$consulta);
                                        ?>

                                        <td><select class="form-control" name="cargo" id="item_cargo" required=""> 
                                            <option value=""></option>
                                            


                                            <?php
                                            while($fila=mysqli_fetch_row($resultado)){echo"<option value='".$fila['1']."'>".$fila['1']."</option>"; 
                                        }
                                        ?>
                                          </select> 
                                    </div>
                                </div>
                        
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="cliente_usuario" class="bmd-label-floating">Usuario</label>
                                        <input type="text"  class="form-control" name="usuario" id="cliente_usuario" maxlength="40" required="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="cliente_contraseña" class="bmd-label-floating">Contraseña</label>
                                        <input type="text"  class="form-control" name="contrasena" id="cliente_contraseña" maxlength="40" required="">
                                    </div>
                                </div>

                            </div>
						</div>
					</fieldset>
					<br>
                    <p class="text-center" style="margin-top: 40px;">
                        <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
                        &nbsp; &nbsp;
                        <button type="submit" class="btn btn-raised btn-info btn-sm" name="Guardar"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
                    </p>
				</form>
			</div>
        </section>




    </main>
    
    	
	<!--=============================================
	=            Include JavaScript files           =
	==============================================-->
	<!-- jQuery V3.4.1 -->
	<script src="./js/jquery-3.4.1.min.js" ></script>

	<!-- popper -->
	<script src="./js/popper.min.js" ></script>

	<!-- Bootstrap V4.3 -->
	<script src="./js/bootstrap.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<script src="./js/jquery.mCustomScrollbar.concat.min.js" ></script>

	<!-- Bootstrap Material Design V4.0 -->
	<script src="./js/bootstrap-material-design.min.js" ></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

	<script src="./js/main.js" ></script>
</body>
</html>


<?php
if(isset($_POST['Guardar']))
{
include('php/conexion.php');
$tipo=$_POST["tipo"];
$n_doc=$_POST["n_doc"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$sexo=$_POST["sexo"];
$tele=$_POST["tele"];
$naci=$_POST["naci"];
$correo=$_POST["correo"];
$direc=$_POST["direc"];
$cargo=$_POST["cargo"];
$usuario=$_POST["usuario"];
$contrasena=$_POST["contrasena"];

mysqli_query($CNX,"INSERT INTO personal(tipo_id,n_id,nombre,apellido,sexo,telefono,nacimiento,correo,direccion,cargo,usuario,contrasena)VALUES('$tipo','$n_doc','$nombre', '$apellido','$sexo','$tele','$naci','$correo','$direc','$cargo','$usuario','$contrasena')");
}
?>  


