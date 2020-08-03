<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Modificar personal</title>

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
    <script src="./js/sweetalert2.min.js" ></script>
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
                                    <a href="client-new.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Cliente</a>
                                </li>
                                <li>
                                    <a href="client-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de clientes</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-btn-submenu"><i class="fas fa-pallet fa-fw"></i> &nbsp; Personal <i class="fas fa-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a href="../personal/personal-new.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar personal</a>
                                </li>
                                <li>
                                    <a href="../personal/personal-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de personal</a>
                                </li>
                                
                            </ul>
                    </li>
                </nav>
            </div>
        </section>
        <!-- Page content -->
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
                    <i class="fas fa-plus fa-fw"></i> &nbsp; MODIFICAR PERSONAL
                </h3>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque laudantium necessitatibus eius iure adipisci modi distinctio. Earum repellat iste et aut, ullam, animi similique sed soluta tempore cum quis corporis!
                </p>
            </div>
            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs">
                    <li>
                        <a class="active" href="../personal/personal-new.php"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR CLIENTE</a>
                    </li>
                    <li>
                        <a href="../clientes/client-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE CLIENTES</a>
                    </li>
                    
                </ul>
            </div>
             



            <!-- Content here-->
            <div class="container-fluid">
                <form action="modem_personal.php" method="POST" class="form-neon" autocomplete="off">
                    <fieldset>
                        <legend><i class="fas fa-user"></i> &nbsp; Modificar información básica</legend>

            <?php
            include('php/conexion.php');

            $id_personal = $_GET['id_personal'];

            $consulta = "SELECT * FROM personal WHERE id_personal = '$id_personal'";

            $resultado = mysqli_query($CNX,$consulta);

            while ($columna=$resultado->fetch_assoc()){ ?>

                        <div class="container-fluid">
                            <div class="row">

                                 <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="item_tipo" class="bmd-label-floating"> Tipo de documento</label>
                                        <select class="form-control" name="tipo" id="item_tipo" required="" value="<?php echo $columna['tipo_id'];?>">
                                            <option value="" selected="" disabled="">Seleccione una opción</option>
                                            <option>C.C. - Cedula de ciudadanía</option>
                                            <option>C.E. - Cedula de extranjería</option>
                                            <option>TI. - Tarjeta de identidad</option>

                                        </select>
                                    </div>
                                </div>
                                





                                <div class="col-12 col-md-6">
                                    <div class="form-group">

                                        <label for="cliente_dni" class="bmd-label-floating">Identificacion</label>

                                        <input type="text"  class="form-control" id="cliente_identificacion" name="identi" maxlength="27" onKeyPress="return soloNumeros(event)" required=""  value="<?php echo $columna['n_id'];?>" readonly="">
                                    </div>
                            </div>
                                
                                <div class="col-12 col-md-6">
                                    <div class="form-group">

                                        <label for="cliente_nombre" class="bmd-label-floating">Nombre(s)</label>

                                        <input type="text"  class="form-control" name="nombre" id="cliente_nombre" maxlength="40" onkeypress="return soloLetras(event)" required=""  value="<?php echo $columna['nombre'];?>" readonly="">
                                    </div>
                                </div>



                                <div class="col-12 col-md-6">
                                    <div class="form-group">

                                        <label for="cliente_apellido" class="bmd-label-floating">Apellido(s)</label>

                                        <input type="text"  class="form-control" name="apellido" id="cliente_apellido" maxlength="40" onkeypress="return soloLetras(event)" required=""  value="<?php echo $columna['apellido'];?>" readonly="">
                                    </div>
                                </div>
                                
                                  <div class="col-12 col-md-6">
                                    <div class="form-group">

                                        <label for="item_genero" class="bmd-label-floating"> Género</label>

                                        <select class="form-control" name="sexo" id="item_genero" required=""  value="<?php echo $columna['sexo'];?>">
                                            <option value="" selected="" disabled="">Seleccione una opción</option>
                                            <option>Masculino</option>
                                            <option>Femenino</option>
                                            <option>Otro</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="cliente_fecha" class="bmd-label-floating">Fecha de nacimiento</label>
                                        <input type="date"  class="form-control" id="cliente_fecha" name="fecha" maxlength="27" required="" readonly="readonly" value="<?php echo $columna['nacimiento'];?>" readonly="">
                                    </div>
                                </div>  
                                <div class="col-12 col-md-6">
                                    <div class="form-group">

                                        <label for="cliente_direccion" class="bmd-label-floating">  Direccion</label>

                                        <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="direccion" id="cliente_direccion" maxlength="40" required=""  value="<?php echo $columna['direccion'];?>">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">

                                        <label for="cliente_telefono" class="bmd-label-floating">Telefono</label>

                                        <input type="number"   class="form-control" name="telefono" id="cliente_telefono" maxlength="40" onKeyPress="return soloNumeros(event)" required=""  value="<?php echo $columna['telefono'];?>">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="form-group">

                                        <label for="item_correo" class="bmd-label-floating">Correo electronico</label>

                                        <input type="text"  class="form-control" name="correo" id="item_correo" maxlength="190" required=""  value="<?php echo $columna['correo'];?>">
                                    </div>
                                </div>
                                
                                <div class="col-12 col-md-6">
                                    <div class="form-group">

                                        <label for="cliente_usuario" class="bmd-label-floating">Usuario</label>

                                        <input type="text"  class="form-control" name="usuario" id="cliente_usuario" maxlength="40" required=""  value="<?php echo $columna['usuario'];?>">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="form-group">

                                        <label for="cliente_contraseña" class="bmd-label-floating">Contraseña</label>

                                        <input type="text"  class="form-control" name="contrasena" id="cliente_contraseña" maxlength="40" required=""  value="<?php echo $columna['contrasena'];?>">
                                    </div>
                                    <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="item_cargo" class="bmd-label-floating"> Cargo</label>
                                        <select class="form-control" name="Cargo" id="item_cargo">
                                            <option value="" selected="" disabled="" value="<?php echo $columna['cargo'];?>">Seleccione una opción</option>
                                            <option>Entrenador</option>
                                            <option>Deportologo</option>
                                            <option>Nutricionista</option>
                                            <option>Otro</option>

                                        </select>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <br>
                    <p class="text-center" style="margin-top: 40px;">
                        <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
                        &nbsp; &nbsp;
                        <button type="submit" class="btn btn-raised btn-info btn-sm" name="Modificar"><i class="far fa-save"></i> &nbsp; MODIFICAR</button>
                    </p>
                <?php } ?>
                </form>
            </div>  
        </section>

    </main>
     
    <
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
