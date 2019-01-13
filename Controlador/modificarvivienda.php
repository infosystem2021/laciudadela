<?php

require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");

$msj= null;
$consultas = new Consultar();
	$casa1 = $_POST['casa2'];
	$estado = $_POST['estado'];
	$municipio = $_POST['municipio'];
	$parroquia = $_POST['parroquia'];
	$sector = $_POST['sector'];
	$direccion = $_POST['direccion'];
	$familias = $_POST['familias'];
	$casa = $_POST['id'];
	

	if (strlen($casa1)>0 && strlen($estado)>0 && strlen($municipio)>0 && strlen($parroquia)>0 && strlen($sector)>0 && strlen($direccion)>0) {
		
		$msj = $consultas -> modificarVivienda('numero_casa', $casa1, $casa);
		$msj = $consultas -> modificarVivienda('estado', $estado, $casa);
        $msj = $consultas -> modificarVivienda('municipio', $municipio, $casa);
        $msj = $consultas -> modificarVivienda('parroquia', $parroquia, $casa);
        $msj = $consultas -> modificarVivienda('sector', $sector, $casa);
        $msj = $consultas -> modificarVivienda('direccion', $direccion, $casa);
        $msj = $consultas -> modificarVivienda('numero_familias', $familias, $casa);
        echo $msj;

       echo '<script>alert("vivienda modificada")</script> ';
      echo "<script>location.href='../vista/verviviendas.php'</script>";

	}else{

	        echo" por favor rellene todos los campos"; 
      }

  


?>