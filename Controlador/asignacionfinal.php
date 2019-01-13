<?php

require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");

$mensaje = null;

$cedula = $_POST['cedula'];
$nacionalidad = $_POST['nacionalidad'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$sexo= $_POST['sexo'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$telefono = $_POST['telefono'];
$edad = $_POST['edad'];
$estado_civil = $_POST['estado_civil'];
$vive_casa = $_POST['vive_casa'];
$profesion_oficio = $_POST['profesion_oficio'];
$trabaja = $_POST['trabaja'];
$lugar_trabajo = $_POST['lugar_trabajo'];
$ingreso_mensual = $_POST['ingreso_mensual'];
$grado_instruccion = $_POST['grado_instruccion'];
$estudia = $_POST['estudia'];
$institucion = $_POST['institucion'];
$vota_donde = $_POST['vota_donde'];
$enfermedad = $_POST['enfermedad'];
$medicamento = $_POST['medicamento'];
$discapacitado = $_POST['discapacitado'];
$asistido = $_POST['asistido'];
$embarazada = $_POST['embarazada'];
$correo = $_POST['correo'];
$control = $_POST['control'];
$serial = $_POST['serial'];
$codigo = $_POST['codigo'];
$numero_casaj = $_POST['numero_casaj'];

if (strlen($cedula) > 0 ) {

	$consultas = new Consultar();
	
	$mensaje = $consultas -> insertarJefe($cedula, $nacionalidad, $nombres, $apellidos, $sexo, $fecha_nacimiento, $telefono, $edad, $estado_civil, $vive_casa, $profesion_oficio, $trabaja, $lugar_trabajo, $ingreso_mensual, $grado_instruccion, $estudia, $institucion, $vota_donde, $enfermedad, $medicamento, $discapacitado, $asistido, $embarazada, $correo, $control, $serial, $codigo, $numero_casaj );

}else{

	echo "por favor complete los campos";
}

echo $mensaje;
if ($mensaje) {
	$arg_grupo=$cedula;
	$consultar= new consultar();
	$mensaje=$consultar->eliminarGrupo($arg_grupo);
	echo $mensaje;
	echo '<script>alert(Jefe de Familia Registrado")</script> ';
      echo "<script>location.href='../vista/verjefe.php'</script>";

}else{
	echo "error";
}



?>