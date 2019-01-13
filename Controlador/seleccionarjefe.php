<?php

function seleccionarJefe(){
		if (isset($_GET['cedula'])) {
			$consultas= new Consultar();
			$casa = $_GET['cedula'];

						
			$filas = $consultas->cargarJefe($casa);
			foreach ($filas as $fila) {

				
				 
				echo '
               
               <form action="../Controlador/modificarjefe.php" method="post"> 

            <center>
            <br>
            <br>
            <p>
<span class="label label-info">NACIONALIDAD</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <span class="label label-info">CEDULA</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="label label-info">NOMBRES</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="label label-info">APELLIDOS</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
</p>
			<p>

			         <select name="nacionalidad">
                          <option value="'.$fila['nacionalidad'].'" ><b>'.$fila['nacionalidad'].'</b></option>
                          <option>V</option>
                          <option>E</option>
                       </select>
					

					<input type="number" min="100000000" name="cedula" value="'.$fila['cedula'].'" required>
				
					
					<input type="text" name="nombres" value="'.$fila['nombres'].'" required>
				
					
					<input type="text" name="apellidos" value="'.$fila['apellidos'].'" required>
				
					
				
				</p>
				<br>
								 <p>
<span class="label label-info">SEXO</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <span class="label label-info">F_NACIMIENTO</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="label label-info">EDAD</span>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="label label-info">ESTADO CIVIL</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
</p>
				<p>	


					<input type="text" name="sexo" value="'.$fila['sexo'].'" required>
				
					<input type="date" name="fecha_nacimiento" value="'.$fila['fecha_nacimiento'].'" required>
				
				    <input type="number" min="0" name="edad" value="'.$fila['edad'].'" required>
				
					  <select name="estado_civil">
                          <option value="'.$fila['estado_civil'].'" ><b>'.$fila['estado_civil'].'</b></option>
                          <option>soltero(a)</option>
                          <option>casado(a)</option>
                           <option>divorciado(a)</option>
                          <option>viudo(a)</option>
                           <option>concubino(a)</option>
                         
                       </select>
			
				</p>
				<br>
											 <p>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="label label-info">PROFESION</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <span class="label label-info">TRABAJA</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="label label-info">LUGAR TRABAJO</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="label label-info">INGRESO MENSUAL</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
</p>
				<p>
					<input type="text" name="profesion_oficio" value="'.$fila['profesion_oficio'].'" required>
				
					
					<input type="text" name="trabaja" value="'.$fila['trabaja'].'" required>
				
					
					<input type="text" name="lugar_trabajo" value="'.$fila['lugar_trabajo'].'" required>
				
					
					<input type="number" min="0" name="ingreso_mensual" value="'.$fila['ingreso_mensual'].'" required>
				</p>
				<br>
				<p>
                     &nbsp;&nbsp;&nbsp;&nbsp;<span class="label label-info">ESTUDIA</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">GRADO DE INSTRUCCION</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">INSTITUCION</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">DONDE VOTA</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </p>
				<p>
					
					<input type="text" name="grado_instruccion" value="'.$fila['grado_instruccion'].'" required>
				
                     
					<input type="text" name="estudia" value="'.$fila['estudia'].'" required>
				
					
					<input type="text" name="institucion" value="'.$fila['institucion'].'" required>
			
					
					<input type="text" name="vota_donde" value="'.$fila['vota_donde'].'" required>
				</p>
				<br>
				<p>
                     &nbsp;&nbsp;&nbsp;&nbsp;<span class="label label-info">ENFERMEDAD</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">MEDICAMENTO</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">DISPACIDAD</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">ASISTIDO</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </p>
				<p>
					
					<input type="text" name="enfermedad" value="'.$fila['enfermedad'].'" required>
				
					
					
					<input type="text" name="medicamento" value="'.$fila['medicamento'].'" required>
				
					
					
					<input type="text" name="discapacitado" value="'.$fila['discapacitado'].'" required>
					
					
					<input type="text" name="asistido" value="'.$fila['asistido'].'" required>				
				
					</p>
				<br>
				<p>
                     &nbsp;&nbsp;&nbsp;&nbsp;<span class="label label-info">TELEFONO</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">CORREO</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">EMBARAZADA</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">CONTROL</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </p>	
				<p>	
				

					<input type="number" min="0" name="telefono" value="'.$fila['telefono'].'" required>

					<input type="text" name="correo" value="'.$fila['correo'].'" required>

					<input type="text" name="embarazada" value="'.$fila['embarazada'].'" required>
					
					<input type="text" name="control" value="'.$fila['control'].'" required>

								
				</p>
				<br>
				 <p>
                    <span class="label label-info">SERIAL</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="label label-info">CODIGO</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="label label-info">VIVE EN CASA</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="label label-info">NUMERO DE CASA</span>
                 </P>
				<p>

				   
				    <input type="text"  name="serial" value="'.$fila['serial_carnet'].'" required>	

					<input type="text"  name="codigo" value="'.$fila['codigo_carnet'].'" required>

					<input type="text" name="vive_casa" value="'.$fila['vive_casa'].'" required>
				
				    <input type="text" name="numero_casaj" value="'.$fila['numero_casaj'].'" required>
				
				
				</p>
				<br>
				<p>
					
					
					
				
			
					&nbsp;
				</p>	
		
	         <input type="hidden" name="id" value="'.$casa.'">
        	<input class="btn btn-success" type="submit" value="modificar jefe">
      </center>
  </form>

			';
		     
			}
			
		}
}

?>