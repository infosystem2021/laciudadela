<?php

require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");

$mensaje = null;

$cedula = $_POST['cedula'];
$nacionalidad = $_POST['nacionalidad'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$sexo = $_POST['sexo'];
$edad = $_POST['edad'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$serial = $_POST['serial'];
$codigo = $_POST['codigo'];
$estado_civil = $_POST['estado_civil'];
$parentesco = $_POST['parentesco'];
$estudia = $_POST['estudia'];
$grado_instruccion = $_POST['grado_instruccion'];
$trabaja = $_POST['trabaja'];
$profesion = $_POST['profesion'];
$lugar = $_POST['lugar'];
$enfermedad = $_POST['enfermedad'];
$discapacidad = $_POST['discapacidad'];
$vota = $_POST['vota'];
$cedulaj = $_POST['cedulaj'];
$ingreso = $_POST['ingreso'];
$institucion = $_POST['institucion'];
$medicamento = $_POST['medicamento'];
$asistido = $_POST['asistido'];
$embarazada = $_POST['embarazada'];
$control = $_POST['control'];
$vive = $_POST['vive_casa'];
$numero_casa = $_POST['numero_casa'];
$cedulaj = $_POST['cedulaj'];





if (strlen($cedula) > 0 ) {

	$consultas = new Consultar();
	
	$mensaje = $consultas -> insertarGrupo($cedula, $nacionalidad, $nombres, $apellidos, $fecha_nacimiento, $sexo, $edad, $telefono, $correo, $serial, $codigo, $estado_civil, $parentesco, $estudia, $grado_instruccion, $trabaja, $profesion, $lugar, $enfermedad, $discapacidad, $vota, $cedulaj, $ingreso, $institucion, $medicamento, $asistido, $embarazada, $control, $vive, $numero_casa );

}else{

	echo "por favor complete los campos";
}

echo $mensaje;

 echo '<script>alert("miembro registrado")</script> ';
      echo "<script>location.href='../vista/insertargrupo.php'</script>";



?>