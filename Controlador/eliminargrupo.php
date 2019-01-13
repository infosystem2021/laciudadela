<?php
require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");

if (isset($_GET['grupo'])) {
	$arg_grupo=$_GET['grupo'];
	$consultar= new consultar();
	$mensaje=$consultar->eliminarGrupo($arg_grupo);
	echo $mensaje;
	echo '<script>alert("registro eliminado")</script> ';
      echo "<script>location.href='../vista/vergrupo.php'</script>";
}


?>