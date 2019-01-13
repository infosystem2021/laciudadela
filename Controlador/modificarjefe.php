<?php

require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");

$msj= null;
$consultas = new Consultar();
	$cedula1 = $_POST['cedula'];
	$nacionalidad = $_POST['nacionalidad'];
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$sexo = $_POST['sexo'];
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
	$cedula = $_POST['id'];
	

	if (strlen($cedula)>0 ) {
		
		$msj = $consultas -> modificarJefe('cedula', $cedula1, $cedula);
		$msj = $consultas -> modificarJefe('nacionalidad', $nacionalidad, $cedula);
		$msj = $consultas -> modificarJefe('nombres', $nombres, $cedula);
        $msj = $consultas -> modificarJefe('apellidos', $apellidos, $cedula);
        $msj = $consultas -> modificarJefe('sexo', $sexo, $cedula);
        $msj = $consultas -> modificarJefe('fecha_nacimiento', $fecha_nacimiento, $cedula);
        $msj = $consultas -> modificarJefe('telefono', $telefono, $cedula);
        $msj = $consultas -> modificarJefe('edad', $edad, $cedula);
        $msj = $consultas -> modificarJefe('estado_civil', $estado_civil, $cedula);
        $msj = $consultas -> modificarJefe('vive_casa', $vive_casa, $cedula);
        $msj = $consultas -> modificarJefe('profesion_oficio', $profesion_oficio, $cedula);
        $msj = $consultas -> modificarJefe('trabaja', $trabaja, $cedula);
        $msj = $consultas -> modificarJefe('lugar_trabajo', $lugar_trabajo, $cedula);
        $msj = $consultas -> modificarJefe('ingreso_mensual', $ingreso_mensual, $cedula);
        $msj = $consultas -> modificarJefe('grado_instruccion', $grado_instruccion, $cedula);
        $msj = $consultas -> modificarJefe('estudia', $estudia, $cedula);
        $msj = $consultas -> modificarJefe('institucion', $institucion, $cedula);
        $msj = $consultas -> modificarJefe('vota_donde', $vota_donde, $cedula);
        $msj = $consultas -> modificarJefe('enfermedad', $enfermedad, $cedula);
        $msj = $consultas -> modificarJefe('medicamento', $medicamento, $cedula);
        $msj = $consultas -> modificarJefe('discapacitado', $discapacitado, $cedula);
        $msj = $consultas -> modificarJefe('asistido', $asistido, $cedula);
        $msj = $consultas -> modificarJefe('embarazada', $embarazada, $cedula);
        $msj = $consultas -> modificarJefe('correo', $correo, $cedula);
        $msj = $consultas -> modificarJefe('control', $control, $cedula);
        $msj = $consultas -> modificarJefe('serial_carnet', $serial, $cedula);
        $msj = $consultas -> modificarJefe('codigo_carnet', $codigo, $cedula);
        $msj = $consultas -> modificarJefe('numero_casaj', $numero_casaj, $cedula);
        echo $msj;

       echo '<script>alert("jefe modificada")</script> ';
      echo "<script>location.href='../vista/verjefe.php'</script>";

	}else{

	        echo" por favor rellene todos los campos"; 
      }

  


?>