<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lista de clientes</title>
	<script language="javascript">
        function doSearch()
        {
            const tableReg = document.getElementById('datos');
            const searchText = document.getElementById('searchTerm').value.toLowerCase();
            let total = 0;
 
            // Recorremos todas las filas con contenido de la tabla
            for (let i = 1; i < tableReg.rows.length; i++) {
                // Si el td tiene la clase "noSearch" no se busca en su cntenido
                if (tableReg.rows[i].classList.contains("noSearch")) {
                    continue;
                }
 
                let found = false;
                const cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
                // Recorremos todas las celdas
                for (let j = 0; j < cellsOfRow.length && !found; j++) {
                    const compareWith = cellsOfRow[j].innerHTML.toLowerCase();
                    // Buscamos el texto en el contenido de la celda
                    if (searchText.length == 0 || compareWith.indexOf(searchText) > -1) {
                        found = true;
                        total++;
                    }
                }
                if (found) {
                    tableReg.rows[i].style.display = '';
                } else {
                    // si no ha encontrado ninguna coincidencia, esconde la
                    // fila de la tabla
                    tableReg.rows[i].style.display = 'none';
                }
            }
 
            // mostramos las coincidencias
            const lastTR=tableReg.rows[tableReg.rows.length-1];
            const td=lastTR.querySelector("td");
            lastTR.classList.remove("hide", "red");
            if (searchText == "") {
                lastTR.classList.add("hide");
            } else if (total) {
                td.innerHTML="Se ha encontrado "+total+" coincidencia"+((total>1)?"s":"");
            } else {
                lastTR.classList.add("red");
                td.innerHTML="No se han encontrado coincidencias";
            }
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
					<figcaption class="roboto-medium text-center">
						Carlos Alfaro <br><small class="roboto-condensed-light">Web Developer</small>
					</figcaption>
				</figure>
				<div class="full-box nav-lateral-bar"></div>
				<nav class="full-box nav-lateral-menu">
					<ul>
						<li>
							<a href="../home.php"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard</a>
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

			
					</ul>
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
					<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE CLIENTES
				</h3>
				<p class="text-justify">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit nostrum rerum animi natus beatae ex. Culpa blanditiis tempore amet alias placeat, obcaecati quaerat ullam, sunt est, odio aut veniam ratione.
				</p>
			</div>

			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a href="client-new.php"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR CLIENTE</a>
					</li>
					<li>
						<a class="active" href="client-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE CLIENTES</a>
					</li>
					<li>
						<a href="client-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR CLIENTE</a>
					</li>
				</ul>	
			</div>
			
			<!-- Content here-->

			  <div class="container-fluid">
                <form class="form-neon" action="">
                    <div class="container-fluid">
                        <div class="row justify-content-md-center">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="searchTerm" class="bmd-label-floating">¿Qué persona estas buscando?</label>
                                    <input type="text" class="form-control" name="busqueda-" id="searchTerm" maxlength="30" onkeyup="doSearch()">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </form>
            </div>



			<div class="container-fluid">
				<div class="table-responsive">
					<table id="datos" class="table table-dark table-sm">

						<thead>
							<tr class="text-center roboto-medium">
								<th>Tipo de documento</th>
								<th>Identificación</th>
								<th>Nombre</th>
								<th>Apellido</th>
                                <th>Género</th>
                                <th>Fecha de nacimiento</th>
                                <th>Dirección</th>
                                <th>Telefono</th>
                                <th>Correo electronico</th>
								<th>Estado</th>
								<th>DESACTIVAR</th>
								<th>ACTUALIZAR</th>
							</tr>
						</thead>
						<tbody>

      <tbody id="myTable">
        <?php
        include('php/conexion.php');
        $consulta="SELECT * FROM usuarios ";
        $resultado=mysqli_query($CNX,$consulta);
        ?>
    </tr>

    
      <?php
      while($row=$resultado->fetch_assoc()){ ?>
        <tr>
      <td><?php echo $row['tipo_id']; ?></td>
      <td><?php echo $row['n_id']; ?></td>
      <td><?php echo $row['apellido']; ?></td>
      <td><?php echo $row['nombre'];  ?></td>
      <td><?php echo $row['sexo'];  ?></td> 
      <td><?php echo $row['nacimiento'];  ?></td>
      <td><?php echo $row['direccion'];  ?></td>
      <td><?php echo $row['telefono'];  ?></td>
      <td><?php echo $row['correo'];  ?></td> 
      <td>
	  <?php 

	  if ($row['estaActivo'] == 1) {
		echo "Activo";
	  } else {
		echo "Bloqueado";
	  }
	  
	  ?>
	  
	  </td> 

      
       
      <td><button type="button" name="activar" class="btn btn-warning"><a href="php/elicliente.php?id_usuario=<?php echo $row['id_us'];?>"><i class="fa fa-power-off"></i></a></button></td> 
                                                                           
      <td><button type="button" class="btn btn-success"><a href="mod_cliente.php?id_usuario=<?php echo $row['id_us'];?>"><i class="fas fa-sync-alt"></i></a></button></td>
                                                                   
            
      </tr>
      
        <?php } ?>        
    </table>
						
				

		</section>
	</main>
	
	<script>
       String nombuscar=request.getParameter("text_buscar");
       if (nombuscar!=null) {
       	
       }
</script>
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