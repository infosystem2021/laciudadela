<?php

function cargarGrupo(){

	$consultar= new Consultar();
	$filas = $consultar->cargargrupos();

	if (isset($filas)) {


  
	  echo "<table border='2'; class='table table-hover';>
			<tr class='warning'>
			    <th>N</th>
				<th>Cedula</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>F_Nacimiento</th>
				<th>Sexo</th>
				<th>Edad</th>
				<th>Cedula Jefe</th>
				<th>Ver</th>
				<th>Eliminar</th>
				<th>Modificar</th>
		
			</tr>";

			foreach ($filas as $fila) {


		    echo "<tr class='success'>";
		    echo "<td>".$fila['nacionalidad_miembro']."</td>";
			echo "<td>".$fila['cedula_miembro']."</td>";
			echo "<td>".$fila['nombres_miembro']."</td>";
			echo "<td>".$fila['apellidos_miembro']."</td>";
			echo "<td>".$fila['fecha_nacimiento_miembro']."</td>";
			echo "<td>".$fila['sexo_miembro']."</td>";
			echo "<td>".$fila['edad_miembro']."</td>";
			echo "<td>".$fila['cedulaj']."</td>";
			echo "<td><a href='../vista/verfamiliar.php?grupo=".$fila['cedula_miembro']."'>ver</a></td>";
			echo "<td><a href='../Controlador/eliminargrupo.php?grupo=".$fila['cedula_miembro']."'>eliminar</a></td>";
			echo "<td><a href='modificargrupo.php?grupo=".$fila['cedula_miembro']."'>modificar</a></td>";
			echo "</tr>";
		
				
			}
		
	  echo "</table>";
	
}
}

 function buscarGrupo($casa){
	$consultar= new Consultar();
	$filas = $consultar->buscarGrupo($casa);

	echo "<table border='2'; class='table table-hover';>
			<tr class='warning'>
			  <th>N</th>
				<th>Cedula</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>F_Nacimiento</th>
				<th>Sexo</th>
				<th>Edad</th>
				<th>Cedula Jefe</th>
				<th>Ver</th>
				<th>Eliminar</th>
				<th>Modificar</th>
			</tr>";

		if (isset($filas)) {

				foreach ($filas as $fila) {

		    echo "<tr class='success'>";
		    echo "<td>".$fila['nacionalidad_miembro']."</td>";
			echo "<td>".$fila['cedula_miembro']."</td>";
			echo "<td>".$fila['nombres_miembro']."</td>";
			echo "<td>".$fila['apellidos_miembro']."</td>";
			echo "<td>".$fila['fecha_nacimiento_miembro']."</td>";
			echo "<td>".$fila['sexo_miembro']."</td>";
			echo "<td>".$fila['edad_miembro']."</td>";
			echo "<td>".$fila['cedulaj']."</td>";
			echo "<td><a href='../vista/verfamiliar.php?grupo=".$fila['cedula_miembro']."'>ver</a></td>";
			echo "<td><a href='../Controlador/eliminargrupo.php?grupo=".$fila['cedula_miembro']."'>eliminar</a></td>";
			echo "<td><a href='modificargrupo.php?grupo=".$fila['cedula_miembro']."'>modificar</a></td>";
			echo "</tr>";
		
				
			}
		}
		
	echo "</table>";

}
?>