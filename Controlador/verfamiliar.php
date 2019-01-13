<?php

function verFamiliar(){
		if (isset($_GET['grupo'])) {
			$consultas= new Consultar();
			$casa = $_GET['grupo'];

						
			$filas = $consultas->cargarGrupo($casa);
			foreach ($filas as $fila) {

				
				 
				echo '
               
               <form action="../Controlador/modificargrupo.php" method="post"> 

            <center>

            <p>
<span class="label label-info">NACIONALIDAD</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <span class="label label-info">CEDULA</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="label label-info">NOMBRES</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="label label-info">APELLIDOS</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
</p>
			<p>
					<input type="text" name="nacionalidad" value="'.$fila['nacionalidad_miembro'].'" required readonly="readonly">

					<input type="number" name="cedula" value="'.$fila['cedula_miembro'].'" required readonly="readonly">
				
				    
					<input type="text" name="nombres" value="'.$fila['nombres_miembro'].'" required readonly="readonly">
				
				    
					<input type="text" name="apellidos" value="'.$fila['apellidos_miembro'].'"  required readonly="readonly">
			

				    
					
           </p>

           				 <p>
<span class="label label-info">SEXO</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <span class="label label-info">F_NACIMIENTO</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="label label-info">EDAD</span>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="label label-info">ESTADO CIVIL</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
</p>
			<p>
				    
				

					<input type="text" name="sexo" value="'.$fila['sexo_miembro'].'" required readonly="readonly">

				    <input type="date" name="fecha_nacimiento" value="'.$fila['fecha_nacimiento_miembro'].'" required readonly="readonly">

					<input type="number" name="edad" value="'.$fila['edad_miembro'].'" required readonly="readonly">

				    <input type="text" name="estado_civil" value="'.$fila['estado_civil_miembro'].'" required readonly="readonly">

              

			</p>

										 <p>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="label label-info">PROFESION</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <span class="label label-info">TRABAJA</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="label label-info">LUGAR TRABAJO</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="label label-info">INGRESO MENSUAL</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
</p>
			<p>		

			        <input type="text" name="profesion_oficio" value="'.$fila['profesion_oficio_miembro'].'" required readonly="readonly">

					<input type="text" name="trabaja" value="'.$fila['trabaja_miembro'].'" required readonly="readonly">

					<input type="text" name="lugar-trabajo" value="'.$fila['lugar_trabajo_miembro'].'" required readonly="readonly">

					<input type="text" name="ingreso_mensual" value="'.$fila['ingreso_mensual_m'].'" required readonly="readonly">

                   

			</p>

			   <p>
                     &nbsp;&nbsp;&nbsp;&nbsp;<span class="label label-info">ESTUDIA</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">GRADO DE INSTRUCCION</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">INSTITUCION</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">DONDE VOTA</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </p>

			<p>

	                <input type="text" name="estudia" value="'.$fila['estudia_miembro'].'" required readonly="readonly">

					<input type="text" name="grado_instruccion" value="'.$fila['grado_instruccion_miembro'].'" required readonly="readonly">

					<input type="text" name="institucion" value="'.$fila['institucion_m'].'" required readonly="readonly">
				
	                <input type="text" name="vota_donde" value="'.$fila['vota_donde_miembro'].'" required readonly="readonly">

                    



			</p>

			  <p>
                     &nbsp;&nbsp;&nbsp;&nbsp;<span class="label label-info">ENFERMEDAD</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">MEDICAMENTO</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">DISPACIDAD</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">ASISTIDO</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </p>

			<p> 

	              <input type="text" name="enfermedad" value="'.$fila['enfermedad_miembro'].'" required readonly="readonly">

	              <input type="text" name="medicamento" value="'.$fila['medicamento_m'].'" required readonly="readonly">

				  <input type="text" name="discapacidad" value="'.$fila['discapacidad_miembro'].'" required readonly="readonly">

				  <input type="text" name="asistido" value="'.$fila['asistido_m'].'" required readonly="readonly">

		    </p>

		     <p>
                     &nbsp;&nbsp;&nbsp;&nbsp;<span class="label label-info">TELEFONO</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">CORREO</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">EMBARAZADA</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">CONTROL</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </p>	 

		    <p>

			      <input type="text" name="telefono" value="'.$fila['telefono_miembro'].'" required readonly="readonly">
					
				  <input type="email" name="correo" value="'.$fila['correo_miembro'].'" required readonly="readonly">

				  <input type="text" name="embaraza" value="'.$fila['embarazada_m'].'" required readonly="readonly">
					
				  <input type="text" name="control" value="'.$fila['control_m'].'" required readonly="readonly">
	
	

			</p>	

			<p>
                    <span class="label label-info">SERIAL</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="label label-info">CODIGO</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="label label-info">VIVE EN CASA</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="label label-info">NUMERO DE CASA</span>&nbsp;&nbsp;&nbsp;&nbsp;

            
            <p>

                  <input type="number" min="0" name="serial" value="'.$fila['serial_miembro'].'" required readonly="readonly">

					
					<input type="number" min="0" name="codigo" value="'.$fila['codigo_miembro'].'" required readonly="readonly">

					  <input type="text" name="vive_casa" value="'.$fila['vive_casa_m'].'" required readonly="readonly">
					
					<input type="text" name="numero_casa" value="'.$fila['numero_casa_m'].'" required readonly="readonly">
	
            </p>

              <p>

            <span class="label label-info">PARENTESCO</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="label label-info">JEFE DE FAMILIA</span>
  
         </p>
				
				<p>
		            <input type="text" name="parentesco" value="'.$fila['parentesco_miembro'].'" required readonly="readonly">
				    
					<input type="text" name="cedulaj" value="'.$fila['cedulaj'].'" required readonly="readonly">

			  </p>
        	
      </center>
       <div>
<a class="btn btn-info" href="../vista/vergrupo.php">volver</a>
</div>
  </form>

			';
		     
			}
			
		}
}

?>