<?php

require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");

$msj= null;
$consultas = new Consultar();
	$cedula1 = $_POST['cedula'];
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
	$profesion_oficio = $_POST['profesion_oficio'];
	$enfermedad = $_POST['enfermedad'];
	$discapacidad = $_POST['discapacidad'];
	$vota_donde = $_POST['vota_donde'];
	$numero_casaj = $_POST['cedulaj'];
	$ingreso_mensual = $_POST['ingreso'];
	$institucion = $_POST['institucion'];
	$medicamento = $_POST['medicamento'];
	$asistido = $_POST['asistido'];
	$embarazada = $_POST['embarazada'];
	$control = $_POST['control'];
	$vive_casa = $_POST['vive'];
	$numero_casa = $_POST['numero_casa'];
	$cedula = $_POST['id'];
	

	if (strlen($cedula)>0 ) {
		
		$msj = $consultas -> modificarGrupo('cedula_miembro', $cedula1, $cedula);
		$msj = $consultas -> modificarGrupo('nacionalidad_miembro', $nacionalidad, $cedula);
		$msj = $consultas -> modificarGrupo('nombres_miembro', $nombres, $cedula);
        $msj = $consultas -> modificarGrupo('apellidos_miembro', $apellidos, $cedula);
        $msj = $consultas -> modificarGrupo('fecha_nacimiento_miembro', $fecha_nacimiento, $cedula);
        $msj = $consultas -> modificarGrupo('sexo_miembro', $sexo, $cedula);
        $msj = $consultas -> modificarGrupo('edad_miembro', $edad, $cedula);
        $msj = $consultas -> modificarGrupo('telefono_miembro', $telefono, $cedula);
        $msj = $consultas -> modificarGrupo('correo_miembro', $correo, $cedula);
        $msj = $consultas -> modificarGrupo('serial_miembro', $serial, $cedula);
        $msj = $consultas -> modificarGrupo('codigo_miembro', $codigo, $cedula);
        $msj = $consultas -> modificarGrupo('estado_civil_miembro', $estado_civil, $cedula);
        $msj = $consultas -> modificarGrupo('parentesco_miembro', $parentesco, $cedula);
        $msj = $consultas -> modificarGrupo('estudia_miembro', $estudia, $cedula);
        $msj = $consultas -> modificarGrupo('grado_instruccion_miembro', $grado_instruccion, $cedula);
        $msj = $consultas -> modificarGrupo('trabaja_miembro', $trabaja, $cedula);
        $msj = $consultas -> modificarGrupo('profesion_oficio_miembro', $profesion_oficio, $cedula);
        $msj = $consultas -> modificarGrupo('enfermedad_miembro', $enfermedad, $cedula);
        $msj = $consultas -> modificarGrupo('discapacidad_miembro', $discapacidad, $cedula);
        $msj = $consultas -> modificarGrupo('vota_donde_miembro', $vota_donde, $cedula);
        $msj = $consultas -> modificarGrupo('cedulaj_miembro', $cedulaj, $cedula);
        $msj = $consultas -> modificarGrupo('ingreso_mensual_m', $ingreso_mensual, $cedula);
        $msj = $consultas -> modificarGrupo('institucion_m', $institucion, $cedula);
        $msj = $consultas -> modificarGrupo('medicamento_m', $medicamento, $cedula);
        $msj = $consultas -> modificarGrupo('asistido_m', $asistido, $cedula);
        $msj = $consultas -> modificarGrupo('embarazada_m', $embarazada, $cedula);
        $msj = $consultas -> modificarGrupo('control_m', $control, $cedula);
        $msj = $consultas -> modificarGrupo('vive_casa_m', $vive_casa, $cedula);
        $msj = $consultas -> modificarGrupo('numero_casa_m', $numero_casa, $cedula);


       echo '<script>alert("registro modificado")</script> ';
      echo "<script>location.href='../vista/vergrupo.php'</script>";

	}else{

	        echo" por favor rellene todos los campos"; 
      }

  


?>