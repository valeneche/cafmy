<?php
	session_start();
  session_destroy();
	print "<script>window.location='index.php';</script>";
	?>
<script language="javascript">location.href = "../../usuario/iniciar_usu/index.php";</script>