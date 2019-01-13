<?php

function cargarEmbarazadas(){

	$consultar= new Consultar();
	$filas = $consultar->cargarEmbarazadas();

	if (isset($filas)) {

	echo "

	<table border='2'; class='table table-hover';>

			<tr class='warning'>
			    <th>N</th>
				<th>Cedula Jefe</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>F_Nacimiento</th>
				<th>Telefono</th>
				<th>Edad</th>
				<th>Casa</th>
				
		
			</tr>";



			foreach ($filas as $fila) {

	if ($fila['embarazada']=='si' ) {
		 
           
		    echo "<tr class='success'>";
		    echo "<td>".$fila['nacionalidad']."</td>";
			echo "<td>".$fila['cedula']."</td>";
			echo "<td>".$fila['nombres']."</td>";
			echo "<td>".$fila['apellidos']."</td>";
			echo "<td>".$fila['fecha_nacimiento']."</td>";
			echo "<td>".$fila['telefono']."</td>";
			echo "<td>".$fila['edad']."</td>";
			echo "<td>".$fila['numero_casaj']."</td>";
			echo "</tr>";
		}
	}
}

		$consultar= new Consultar();
	$filas2 = $consultar->cargarEmbarazada2();

	if (isset($filas2)) {

	echo "

	<table border='2'; class='table table-hover';>
			<tr class='warning'>
			    <th>N</th>
				<th>Cedula Miembro</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>F_Nacimiento</th>
				<th>Telefono</th>
				<th>Edad</th>
				<th>Casa</th>
				
		
			</tr>";



			foreach ($filas2 as $fila1) {

		if ($fila1['embarazada_m']=='si') {
			
		

	        echo "<tr class='success'>";
	        echo "<td>".$fila1['nacionalidad_miembro']."</td>";
			echo "<td>".$fila1['cedula_miembro']."</td>";
			echo "<td>".$fila1['nombres_miembro']."</td>";
			echo "<td>".$fila1['apellidos_miembro']."</td>";
			echo "<td>".$fila1['fecha_nacimiento_miembro']."</td>";
			echo "<td>".$fila1['telefono_miembro']."</td>";
			echo "<td>".$fila1['edad_miembro']."</td>";
			echo "<td>".$fila1['numero_casa_m']."</td>";
			echo "</tr>";

			

				}
			}
		
			
		
	echo "</table>";
}

}