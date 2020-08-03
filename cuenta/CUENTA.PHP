require_once ("../conexion/conexion.php");
		$idProducto = $_GET['idProducto'];
		$query="SELECT * FROM usuarios WHERE id_us=$id_us";
		$consulta = $pdo->prepare($query);
		$consulta->execute();	
		if(empty($consulta)){  //
			echo "No existen productos con ese Id";
		}else{
			while($fila=$consulta->fetch()){ 
		       $id_us = $fila['id_us'];
		       $Codigo     = $fila['Codigo'];
		       $Nombre     = $fila['Nombre'];
		       $Precio     = $fila['Precio'];
               $Tipo       = $fila['Tipo'];
		       $Marca      = $fila['Marca'];
		       $Volumen    = $fila['Volumen'];
			}	
		?>