<?php

session_start();
if (!$_SESSION["user"]) {
	header("location:index.php");
}

                       require_once("../Modelo/class.conexion.php");
                       require_once("../Modelo/class.consultar.php");
                    $consulta= new Consultar();
					$fila=$consulta->combo2();

	                $consulta= new Consultar();
					$fila2=$consulta->combo();
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
		


	<form action="../Controlador/insertargrupo.php" method="POST" accept-charset="utf-8">
		
		<!---<table border="0" align ="center" valign="middle">-->
		<CENTER><h1>REGISTRO DEL GRUPO FAMILIAR</h1></CENTER>
		<br>
		<center>
			<p>
					 <select name="nacionalidad">
                          <option value="V" ><b>Nacionalidad</b></option>
                          <option>V</option>
                          <option>E</option>
                       </select>


					<input type="number" name="cedula" min="1000" max="300000000" placeholder="cedula" required>
				
				    
					<input type="text" name="nombres"  placeholder="nombres" required>
				
				    
					<input type="text" name="apellidos" placeholder="apellidos"  required>
			

				   
             </p>
			<p>
				    
					  <select name="sexo">
                          <option value="M" ><b>sexo</b></option>
                          <option>M</option>
                          <option>F</option>
                       </select>

                       <input type="date" name="fecha_nacimiento" min="1900-01-01" max="2018-01-01" placeholder="fecha de nacimiento 0000-00-00" required>	

					
					<input type="number" min="0" name="edad" placeholder="edad" required>


                       <select name="estado_civil">
                          <option value="soltero(a)" ><b>estado civil</b></option>
                          <option>soltero(a)</option>
                          <option>casado(a)</option>
                           <option>concubino(a)</option>
                          <option>divorciado(a)</option>
                          <option>viudo(a)</option>
                       </select> 
                     

			
			
			</p>
			<p>

			      <input type="text" name="profesion" placeholder="profesion u oficio" required>

					
					  <select name="trabaja">
                          <option value="si" ><b>trabaja</b></option>
                          <option>si</option>
                          <option>no</option>
                           
                       </select>

                       	<input type="text" name="lugar" placeholder="lugar de trabajo" required>

                       	<input type="number" min="0" name="ingreso" placeholder="ingreso mensual" required>

			 </p>
                  <p>	
				
					  <select name="estudia">
                          <option value="si" ><b>estudia</b></option>
                          <option>si</option>
                          <option>no</option>
                       </select>

			

					
					<input type="text" name="grado_instruccion" placeholder="grado de instruccion" required>


					<input type="text" name="institucion" placeholder="institucion" required>

					<input type="text" name="vota" placeholder="donde vota" required>


					
					
			
            </p>
			
			<p>	
					
				<input type="text" name="enfermedad" placeholder="enfermedad" required>	

                <input type="text" name="medicamento" placeholder="medicamento" required>	

				<input type="text" name="discapacidad" placeholder="discapacidad" required> 

				<input type="text" name="asistido" placeholder="asisitido" required>
			</p>
			<p>

				<input type="number" min="0" name="telefono" placeholder="telefono" required>

			    <input type="email" name="correo" placeholder="correo" required>

			    <input type="text" name="embarazada" placeholder="embarazada" required>

				<input type="text" name="control" placeholder="control prenatal" required>
           

				    
					

           

				    
				

				    
			 </p>
            <p>	

	            <input type="number" min="0" name="serial" placeholder="serial" required>

			    <input type="number" min="0" name="codigo" placeholder="codigo" required>

			    <input type="text" name="vive_casa" placeholder="vive en casa" required>

			    <select name="numero_casa" >
					<option value="">numero de la casa</option>
					<?php

					 foreach ($fila2 as $filas1) {
						
					
						echo "<option value='".$filas1['numero_casa']."'>".$filas1['numero_casa']."</option>";
						
					   }
					?>
				</select>



				  <select name="parentesco">
                          <option value="hijo" ><b>parentesco</b></option>
                          <option>hijo(a)</option>
                          <option>madre</option>
                           <option>padre</option>
                          <option>hermano(a)</option>
                          <option>esposo(a)</option>
                           <option>abuelo(a)</option>
                           <option>tio(a)</option>
                          <option>yerno(a)</option>
                          <option>sobrino(a)</option>
                           <option>nieto(a)</option>
                          <option>cuñado(a)</option>
                       </select>
				
					<select name="cedulaj" >
					<option value="">Cedula del Jefe</option>
					<?php

					 foreach ($fila as $filas) {
						
					
						echo "<option value='".$filas['cedula']."'>".$filas['cedula']."</option>";
						

					   }
					?>
				</select>

			</p>




				
					&nbsp;
				
					<input class="btn btn-success" type="submit" value="Registrar Miembro">

					</center>
				
		<!--</table>-->

	
	</form>
	</div>
</div>
</body>
</html>