<?php
require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");

if (isset($_GET['casa'])) {
	$arg_casa=$_GET['casa'];
	$consultar= new consultar();
	$mensaje=$consultar->eliminarVivienda($arg_casa);
	echo $mensaje;
	echo '<script>alert("registro eliminado")</script> ';
      echo "<script>location.href='../vista/verviviendas.php'</script>";
}


?>