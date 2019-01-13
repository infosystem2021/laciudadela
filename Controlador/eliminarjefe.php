<?php
require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");

if (isset($_GET['cedula'])) {
	$arg_cedula=$_GET['cedula'];
	$consultar= new consultar();
	$mensaje=$consultar->eliminarJefe($arg_cedula);
	echo $mensaje;
	echo '<script>alert("registro eliminado")</script> ';
      echo "<script>location.href='../vista/verjefe.php'</script>";
}


?>