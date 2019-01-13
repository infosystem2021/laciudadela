<?php

session_start();
if (!$_SESSION["user"]) {
	header("location:index.php");

}


                       require_once("../Modelo/class.conexion.php");
                       require_once("../Modelo/class.consultar.php");
					$consulta= new Consultar();
					$fila=$consulta->combo();

				

?>

<!DOCTYPE html>

<html>
<head>
	  <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../estilos/estilos.css">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="../bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  
  <link rel="stylesheet" type="text/css" href="default.css" />
	<link rel="stylesheet" type="text/css" href="jquery-ui-1.7.2.custom.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>

  <title>mision sucre</title>
</head>
<body style="background-color:#FFC2A8">
	<div class="container">

	 <header class="header">
      
              <?php
                     include("../include/cabecera.php");
                 ?>
        
      </header>

       <?php

                 include("../include/carrusel.php");
              ?>

              <?php
                        include("../include/menu5.php");
                    ?>
                    


	<div class ="container">
		


	<form action="../Controlador/insertarjefe.php" method="POST" accept-charset="utf-8">
			<br>
		
		<center>

		<CENTER><h1>REGISTRO JEFE DE FAMILIA</h1></CENTER>
		<br>
			<p>
						  <select name="nacionalidad">
                          <option value="V" ><b>nacionalidad</b></option>
                          <option>V</option>
                          <option>E</option>
                       </select>

					<input type="number" name="cedula" min="1000000" max="50000000" placeholder="Cedula" required>
				
					
					<input type="text" name="nombres" placeholder="Nombres" required>
				
					
					<input type="text" name="apellidos" placeholder="Apellidos" required>

					
				</p>
				<br>
				<p>
				
				 <select name="sexo">
                          <option value="M" ><b>Sexo</b></option>
                          <option>M</option>
                          <option>F</option>
                       </select>

             

				<input type="date" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" required>
				
					
				    <input type="number" name="edad" min="0" placeholder="Edad" required>

					 <select name="estado_civil">
                          <option value="soltero(a)" ><b>Estado Civil</b></option>
                          <option>soltero(a)</option>
                          <option>casado(a)</option>
                           <option>divorciado(a)</option>
                          <option>viudo(a)</option>
                           <option>concubino(a)</option>
                         
                       </select>
			
					
				</p>
				<br>
				<p>
					
				
				
					<input type="text" name="profesion_oficio" placeholder="Profesion u Oficio" required>

				 <select name="trabaja">
                          <option value="si" ><b>Trabaja</b></option>
                          <option>si</option>
                          <option>no</option>
                           
                       </select>

					
					<input type="text" name="lugar_trabajo" placeholder="Lugar de Trabajo" required>
				
					
					<input type="number" min="0" name="ingreso_mensual" placeholder="Ingreso Mensual" required>
				</p>
				<br>
		
				<p>
					
					<input type="text" name="grado_instruccion" placeholder="Grado de Instruccion" required>
				
                     <select name="estudia">
                          <option value="si" ><b>Estudia</b></option>
                          <option>si</option>
                          <option>no</option>
                       </select>
					<input type="text" name="institucion" placeholder="Institucion" required>

					<input type="text" name="vota_donde" placeholder="Donde Vota" required>
				
				</p>
				<br>
				<p>
					
					
					
					<input type="text" name="enfermedad" placeholder="Enfermedad" required>
				
					<input type="text" name="medicamento" placeholder="Medicamento" required>

				    <input type="text" name="discapacitado" placeholder="Discapacidad" required>
					
					
					<input type="text" name="asistido" placeholder="Asistido" required>	
				
				</p>
				<br>
				<p>	
					
							
				
					
				 

	
					<input type="number" name="telefono" min="0" placeholder="Telefono" required>

					<input type="email" name="correo" placeholder="Correo" required>

					<select name="embarazada">
                          <option value="si" ><b>Embarazada</b></option>
                          <option>si</option>
                          <option>no</option>
                           
                       </select>
					
					<input type="text" name="control" placeholder="Control Prenatal" required>

					
					
				</p>
				<br>
				<p>
					

					<input type="number" name="serial" min="0" placeholder="Serial Carnet" required>	
					
					<input type="number" name="codigo"min="0"  placeholder="Codigo Carnet" required>
				
					<input type="text" name="vive_casa" placeholder="Vive en Casa" required>

					
				
				<select name="numero_casaj" >
					<option value="">Numero de la Casa</option>
					<?php

					 foreach ($fila as $filas) {
						
					
						echo "<option value='".$filas['numero_casa']."'>".$filas['numero_casa']."</option>";
						
					   }
					?>
				</select>
				
					&nbsp;
				</p>

					<input class="btn btn-success" type="submit" value="Registrar Jefe">
				
		
		</center>
	
	</form>
	</div>
	</div>
	

</body>
</html>