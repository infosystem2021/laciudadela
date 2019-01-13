<?php

function buscar($casa){
	$consultar= new Consultar();
	$filas = $consultar->buscarGrupo3($casa);

		
         if (isset($filas)) { 
			
				 
               
            
		

			foreach ($filas as $fila) {

          

	echo"<br>";

echo "<table border='2'; class='table table-hover';>

			      <tr class='warning'>
				       <th>nacionalidad</th>
				       <th>cedula</th>
				       <th>nombres</th>
				       <th>apellidos</th>
				       <th>asignar</th>
			      </tr>";

           
		        echo "<tr class='success'>";
                   echo "<td> ".$fila['nacionalidad_miembro']."</td>";
			       echo "<td> ".$fila['cedula_miembro']."</td>";
			       echo "<td> ".$fila['nombres_miembro']."</td>";
		           echo "<td> ".$fila['apellidos_miembro']."</td>";
			echo "<td><a href='asignacion2.php?cedula=".$fila['cedula_miembro']."'>asignar</a></td>";
			    echo"</tr>";
	echo"</table";

    
     }
    
   }

}