 <html> 
      <head>
         <title>Ejemplo de actualización de datos en base de datos MySQL</title>
      </head> 
 
      <body>
 
      <?php
 
      // Dirección o IP del servidor MySQL
      $host = "localhost";
 
      // Puerto del servidor MySQL
      $puerto = "3306";
 
      // Nombre de usuario del servidor MySQL
      $usuario = "root";
 
      // Contraseña del usuario
      $contrasena = "";
 
      // Nombre de la base de datos
      $baseDeDatos ="sistema_gimnasio";
 
      // Nombre de la tabla a trabajar
      $tabla = "usuarios";
 
      function Conectarse()
      {
         global $host, $puerto, $usuario, $contrasena, $baseDeDatos, $tabla;
 
         if (!($link = mysqli_connect($host.":".$puerto, $usuario, $contrasena))) 
         { 
            echo "Error conectando a la base de datos.<br>"; 
            exit(); 
            }
         else
         {
            echo "Listo, estamos conectados.<br>";
         }
         if (!mysqli_select_db($link, $baseDeDatos)) 
         { 
            echo "Error seleccionando la base de datos.<br>"; 
            exit(); 
         }
         else
         {
            echo "Obtuvimos la base de datos $baseDeDatos sin problema.<br>";
         }
      return $link; 
      } 
 
      $link = Conectarse();
 
      if($_POST)
      {
         $queryUpdate = "UPDATE $tabla SET 
                        apellido = '".$_POST['apellido']."',
                        nombre = '".$_POST['nombre']."',
                        direccion = '".$_POST['direccion']."',
                        telefono = '".$_POST['telefono']."',
                        correo = '".$_POST['correo']."'
                         WHERE   id_usuario = ".$_POST['  id_usuario'].";";
 
         $resultUpdate = mysqli_query($link, $queryUpdate); 
 
         if($resultUpdate)
         {
            echo "<strong>El registro id_usuario ".$_POST['id_usuario']." con exito</strong>. <br>";
         }
         else
         {
            echo "No se pudo actualizar el registro. <br>";
         }
 
      }
 
      $query = "SELECT id_usuario, apellido, nombre, direccion, telefono, correo FROM $tabla;";
 
      $result = mysqli_query($link, $query); 
 
      ?>
 
      <table>
         <tr>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Direccion</td>
            <td>Telefono</td>
            <td>Correo</td>

         <tr>
 
      <?php
 
      while($row = mysqli_fetch_array($result))
      { 
         echo "<tr>";
         echo "<td>";
         echo $row["nombre"];
         echo "</td>";
         echo "<td>";
         echo $row["apellido"];
         echo "</td>";
         echo "<td>";
         echo $row["direccion"];
         echo "</td>";
         echo "<td>";
         echo $row["telefono"];
         echo "</td>";
         echo "<td>";
         echo $row["correo"];
         echo "</td>";
         echo "<td>";
         echo "<a href=\"?id_usuario=".$row["id_usuario"]."\">Actualizar</a>";
         echo "</td>";
         echo "</tr>";
 
      } 
 
      mysqli_free_result($result); 
 
      ?>
 
      </table>
      <hr>
 
      <?php
      if($_POST)
      {
         $querySelectByID = "SELECT id_usuario, apellido, nombre, direccion, telefono, correo FROM $tabla WHERE id_usuario = ".$_POST['id_usuario'].";";
 
         $resultSelectByID = mysqli_query($link, $querySelectByid_usuario); 
 
         $rowSelectByID = mysqli_fetch_array($resultSelectByid_usuario);
      ?>
 
      <form action="" method="post">
         
         <input type="hidden" value="<?=$rowSelectByid_usuario['id_usuario'];?>" name="id_usuario">
         Nombre: <input type="text" name="nombre" value="<?=$rowSelectByid_usuario['Nombre'];?>"> <br> 
         <br>
         
         Apellidos: <input type="text" name="apellido" value="<?=$rowSelectByid_usuario['Apellido'];?>"> <br> <br>

          Direccion: <input type="text" name="direccion" value="<?=$rowSelectByid_usuario['Direccion'];?>"> <br> <br>

           Telefono: <input type="text" name="telefono" value="<?=$rowSelectByid_usuario['Telefono'];?>"> <br> <br>

            Correo: <input type="text" name="correo" value="<?=$rowSelectByid_usuario['Correo'];?>"> <br> <br>
         

         <input type="submit" value="Guardar">
      

      </form>
 
      <?php
      }
      mysqli_close($link);
      ?>
      </body> 
      </html>