<?php

require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");

$mensaje = null;

$nombre = $_POST['casa'];
$apellido = $_POST['estado'];
$sexo = $_POST['municipio'];
$edad = $_POST['parroquia'];
$sector = $_POST['sector'];
$direccion = $_POST['direccion'];
$familias = $_POST['familias'];

if (strlen($nombre) > 0 && strlen($apellido) > 0 && strlen($sexo) > 0 && strlen($edad) > 0 && strlen($sector) > 0 && strlen($direccion) > 0 && strlen($familias) > 0) {

	$consultas = new Consultar();
	
	$mensaje = $consultas -> insertarVivienda($nombre, $apellido, $sexo, $edad, $sector, $direccion, $familias);

}else{

	echo "por favor complete los campos";
}

echo $mensaje;

 echo '<script>alert("Vivienda Registrado")</script> ';
      echo "<script>location.href='../vista/insertar.php'</script>";



?>