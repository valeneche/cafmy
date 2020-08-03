<?php

@session_start();
session_destroy();
echo '<script type="text/javascript">
      alert("Has cerrado sesion");
      window.location.href="index.php";
      </script>';

 ?>