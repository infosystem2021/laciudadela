<?php

function buscar($casa){
	$consultar= new Consultar();
	$filas = $consultar->buscarVivienda($casa);

		
         if (isset($filas)) { 
			
				 
               
            
		

			foreach ($filas as $fila) {

          

	echo"<br>";

echo "<table border='2'; class='table table-hover';>

			      <tr class='warning'>
				       <th>Casa</th>
				       <th>Estado</th>
				       <th>Municipio</th>
				       <th>Parroquia</th>
				       <th>Sector</th>
				       <th>Direccion</th>
				       <th>Familias</th>
			      </tr>";

           
		        echo "<tr class='success'>";
                   echo "<td> ".$fila['numero_casa']."</td>";
			       echo "<td> ".$fila['estado']."</td>";
			       echo "<td> ".$fila['municipio']."</td>";
		           echo "<td> ".$fila['parroquia']."</td>";
			       echo "<td> ".$fila['sector']."</td>";
			       echo "<td> ".$fila['direccion']."</td>";
			       echo "<td> ".$fila['numero_familias']."</td>";
			    echo"</tr>";
	echo"</table";

	echo"<br>";


			
	
			echo "<table border='2'; class='table table-hover';>

			      <tr class='warning'>
			           <th>N</th>
				       <th>Cedula Jefe</th>
				       <th>Nombres</th>
				       <th>Apellidos</th>
				       <th>F/N</th>
				       <th>Telefono</th>
				       <th>edad</th>
				       <th>Estado civil</th>
				         <th>Vive en Casa</th>
			      </tr>";


		        echo "<tr class='success'>";
		           echo "<td> ".$fila['nacionalidad']."</td>";
                   echo "<td> ".$fila['cedula']."</td>";
			       echo "<td> ".$fila['nombres']."</td>";
			       echo "<td> ".$fila['apellidos']."</td>";
		           echo "<td> ".$fila['fecha_nacimiento']."</td>";
			       echo "<td> ".$fila['telefono']."</td>";
			       echo "<td> ".$fila['edad']."</td>";
			       echo "<td> ".$fila['estado_civil']."</td>";
			       echo "<td> ".$fila['vive_casa']."</td>";
			    echo"</tr>";
	echo"</table";


	






		




	echo"<br>";
	

		
			echo "<table border='2'; class='table table-hover';>
			      <tr class='warning'>
			           <th>N</th>
				       <th>Cedula Miembro</th>
				       <th>Nombres</th>
				       <th>Apellidos</th>
				       <th>F/N</th>
				       <th>Sexo</th>
				       <th>Edad</th>
				       <th>Telefono</th>
			      </tr>";


		        echo "<tr class='success'>";
		           echo "<td> ".$fila['nacionalidad_miembro']."</td>";
                   echo "<td> ".$fila['cedula_miembro']."</td>";
			       echo "<td> ".$fila['nombres_miembro']."</td>";
			       echo "<td> ".$fila['apellidos_miembro']."</td>";
		           echo "<td> ".$fila['fecha_nacimiento_miembro']."</td>";
			       echo "<td> ".$fila['sexo_miembro']."</td>";
			       echo "<td> ".$fila['edad_miembro']."</td>";
			       echo "<td> ".$fila['telefono_miembro']."</td>";
			    echo"</tr>";
	echo"</table";



		
		



			
		
		
  
    
     }
    
   }

}