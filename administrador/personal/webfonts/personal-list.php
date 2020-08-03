<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Lista de personal</title>

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
                            <a href="home.html"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Inicio</a>
                        </li>

                            <li>
                            <a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Clientes <i class="fas fa-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a href="client-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Cliente</a>
                                </li>
                                <li>
                                    <a href="client-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de clientes</a>
                                </li>
                                <li>
                                    <a href="client-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar cliente</a>
                                </li>
                            </ul>
                        </li>
                                                <li>
                            <a href="#" class="nav-btn-submenu"><i class="fas fa-pallet fa-fw"></i> &nbsp; Personal <i class="fas fa-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a href="personal-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar personal</a>
                                </li>
                                <li>
                                    <a href="personal-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de personal</a>
                                </li>
                                <li>
                                    <a href="personal-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar personal</a>
                                </li>
                            </ul>
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
                    <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PERSONAL
                </h3>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum delectus eos enim numquam fugit optio accusantium, aperiam eius facere architecto facilis quibusdam asperiores veniam omnis saepe est et, quod obcaecati.
                </p>
            </div>
            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs">
                    <li>
                        <a href="personal-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR PERSONAL</a>
                    </li>
                    <li>
                        <a class="active" href="personal-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PERSONAL</a>
                    </li>
                    <li>
                        <a href="personal-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR PERSONAL</a>
                    </li>
                </ul>
            </div>
            
            <!--CONTENT-->
           <div class="container-fluid">
				<div class="table-responsive">
					<table class="table table-dark table-sm">
						<thead>
							<tr class="text-center roboto-medium">
								<th>Tipo de documento</th>
								<th>Identificación</th>
								<th>Nombre</th>
								<th>Apellido</th>
                                <th>Género</th>
                                <th>Fecha de nacimiento</th>
                                <th>Correo electronico</th>
                                <th>Cargo</th>
                                <th>ACTUALIZAR</th>
								<th>ELIMINAR</th>
							</tr>
						</thead>


        <?php
        include('conexion.php');
        $consulta="SELECT * FROM usuarios ";
        $resultado=mysqli_query($CNX,$consulta);
        ?>
    </tr>
      <?php
      while($row=$resultado->fetch_assoc()){ ?>
        <tr>
            
      <td><?php echo $row['id_usuario']; ?></td>
      <td><?php echo $row['tipo']; ?></td>
      <td><?php echo $row['identificación']; ?></td>
      <td><?php echo $row['apellido']; ?></td>
      <td><?php echo $row['nombre'];  ?></td>
      <td><?php echo $row['sexo'];  ?></td> 
      <td><?php echo $row['fecha_nacimiento'];  ?></td>
      <td><?php echo $row['direccion'];  ?></td> 
      <td><?php echo $row['telefono'];  ?></td>
      <td><?php echo $row['correo']; ?></td>   
          
        <td><p><button class="act"> <a href="modificargym.php?id_vend=<?php echo $row['id_vend'];?>">Modificar </a></button><p> </td>
            <td><button class="eli"><a href="eliminargym.php?id_vend=<?php echo $row['id_vend'];?>"> Eliminar </a></button></td>
      </tr>
      
        <?php } ?>
						<body>
							
                                    <form action="">
                                        <button type="button" class="btn btn-warning">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
							</tr>
						</tbody>
					</table>
				</div>
				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-center">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1">Previous</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#">Next</a>
						</li>
					</ul>
				</nav>
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