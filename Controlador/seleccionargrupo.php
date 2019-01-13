<?php

function seleccionarFamiliar(){
		if (isset($_GET['grupo'])) {
			$consultas= new Consultar();
			$casa = $_GET['grupo'];

						
			$filas = $consultas->cargarGrupo($casa);
			foreach ($filas as $fila) {


				 
				echo '
               
               <form action="../Controlador/modificargrupo.php" method="post"> 

<center>
<fieldset>
<p>
<span class="label label-info">NACIONALIDAD</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <span class="label label-info">CEDULA</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="label label-info">NOMBRES</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="label label-info">APELLIDOS</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
</p>
			<p>
					<select name="nacionalidad">
                          <option value="'.$fila['nacionalidad_miembro'].'" ><b>'.$fila['nacionalidad_miembro'].'</b></option>
                          <option>V</option>
                          <option>E</option>
                       </select>

					<input type="number" name="cedula" value="'.$fila['cedula_miembro'].'" required >
				
				    
					<input type="text" name="nombres" value="'.$fila['nombres_miembro'].'" required>
				
				    
					<input type="text" name="apellidos" value="'.$fila['apellidos_miembro'].'"  required>
			

				    
					

				 </p>
				 <p>
<span class="label label-info">SEXO</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <span class="label label-info">F_NACIMIENTO</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="label label-info">EDAD</span>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="label label-info">ESTADO CIVIL</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
</p>
			<p>   
				

					<select name="sexo">
                          <option value="'.$fila['sexo_miembro'].'" ><b>sexo</b></option>
                          <option>masculino</option>
                          <option>femenino</option>
                       </select>

                       <input type="date" name="fecha_nacimiento" value="'.$fila['fecha_nacimiento_miembro'].'" required>

					
					<input type="number" name="edad" value="'.$fila['edad_miembro'].'" required>

				  <select name="estado_civil">
                          <option value="'.$fila['estado_civil_miembro'].'" ><b>estado civil</b></option>
                          <option>soltero(a)</option>
                          <option>casado(a)</option>
                           <option>concubino(a)</option>
                          <option>divorciado(a)</option>
                          <option>viudo(a)</option>
                       </select>

					

			</p>
							 <p>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="label label-info">PROFESION</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <span class="label label-info">TRABAJA</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="label label-info">LUGAR TRABAJO</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="label label-info">INGRESO MENSUAL</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
</p>

			<p>	

			<input type="text" name="profesion_oficio" value="'.$fila['profesion_oficio_miembro'].'" required>


					  <select name="trabaja">
                          <option value="'.$fila['trabaja_miembro'].'" ><b>trabaja</b></option>
                          <option>si</option>
                          <option>no</option>
                           
                       </select>

                       <input type="text" name="lugar" value="'.$fila['lugar_trabajo_miembro'].'" required>

                       <input type="number" name="ingreso" value="'.$fila['ingreso_mensual_m'].'" required>

            </p>
             <p>
                     &nbsp;&nbsp;&nbsp;&nbsp;<span class="label label-info">ESTUDIA</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">GRADO DE INSTRUCCION</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">INSTITUCION</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">DONDE VOTA</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </p>
            <p>


                     	 <select name="estudia">
                          <option value="'.$fila['estudia_miembro'].'" ><b>estudia</b></option>
                          <option>si</option>
                          <option>no</option>
                       </select>

                       <input type="text" name="grado_instruccion" value="'.$fila['grado_instruccion_miembro'].'" required>

                       <input type="text" name="institucion" value="'.$fila['institucion_m'].'" required>

      
					   <input type="text" name="vota_donde" value="'.$fila['vota_donde_miembro'].'" required>
               </p>
               <p>
                     &nbsp;&nbsp;&nbsp;&nbsp;<span class="label label-info">ENFERMEDAD</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">MEDICAMENTO</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">DISPACIDAD</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">ASISTIDO</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </p>
              <p>

              	     <input type="text" name="enfermedad" value="'.$fila['enfermedad_miembro'].'" required>

              	      <input type="text" name="medicamento" value="'.$fila['medicamento_m'].'" required>

              	      <input type="text" name="discapacidad" value="'.$fila['discapacidad_miembro'].'" required>

              	      <input type="text" name="asistido" value="'.$fila['asistido_m'].'" required>
				    
			</p>

			  <p>
                     &nbsp;&nbsp;&nbsp;&nbsp;<span class="label label-info">TELEFONO</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">CORREO</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">EMBARAZADA</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">CONTROL</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </p>	
              <p>
                    <input type="number" name="telefono" value="'.$fila['telefono_miembro'].'" required>

					<input type="email" name="correo" value="'.$fila['correo_miembro'].'" required> 	

                    <input type="text" name="embarazada" value="'.$fila['embarazada_m'].'" required> 

			        <input type="text" name="control" value="'.$fila['control_m'].'" required>	
				

			</p>
				 <p>
                    <span class="label label-info">SERIAL</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="label label-info">CODIGO</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="label label-info">VIVE EN CASA</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="label label-info">NUMERO DE CASA</span>
                 </P>
                 <p>
 					
			        <input type="number" name="serial" value="'.$fila['serial_miembro'].'" required> 

			         <input type="number" name="codigo" value="'.$fila['codigo_miembro'].'" required>

			         <input type="text" name="vive" value="'.$fila['vive_casa_m'].'" required> 

			         <input type="number" name="numero_casa" value="'.$fila['numero_casa_m'].'" required>	
					
				

               </p>

          <p>

            <span class="label label-info">PARENTESCO</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="label label-info">JEFE DE FAMILIA</span>
  
         </p>
     
                <p>

					<select name="parentesco">
                          <option value="'.$fila['parentesco_miembro'].'" ><b>parentesco</b></option>
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

                       <input type="text" name="cedulaj" value="'.$fila['cedulaj'].'" required>

                 </p>

				</fieldset>
				
			
					&nbsp;
				</p>	
		
	         <input type="hidden" name="id" value="'.$casa.'">
        	<input class="btn btn-success" type="submit" value="modificar registro">
      </center>
  </form>

			';
		     
			}
			
		}
}

?>