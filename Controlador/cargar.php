<?php

function cargar(){

	$consultar= new Consultar();
	$filas = $consultar->cargarViviendas();
	if (isset($filas)) {

	echo "<table border='2'; class='table table-hover';>
			<tr class='warning'>
				<th>Casa</th>
				<th>Estado</th>
				<th>Municipio</th>
				<th>Parroquia</th>
				<th>Sector</th>
				<th>Direccion</th>
				<th>Familias</th>
				<th>Eliminar</th>
				<th>Modificar</th>
		
			</tr>";

			foreach ($filas as $fila) {


		    echo "<tr class='success'>";
			echo "<td>".$fila['numero_casa']."</td>";
			echo "<td>".$fila['estado']."</td>";
			echo "<td>".$fila['municipio']."</td>";
			echo "<td>".$fila['parroquia']."</td>";
			echo "<td>".$fila['sector']."</td>";
			echo "<td>".$fila['direccion']."</td>";
			echo "<td>".$fila['numero_familias']."</td>";
             $casan=$fila['numero_casa'];
			echo "<td><a href='../Controlador/eliminar.php?casa=".$casan."'>Eliminar</a></td>";
			echo "<td><a href='modificar.php?casa=".$casan."'>Modificar</a></td>";
			echo "</tr>";
		
				
			}

		}
		
	echo "</table>";
}

 function buscar($casa){
	$consultar= new Consultar();
	$filas = $consultar->buscarVivienda1($casa);

	echo "<table border='2'; class='table table-hover';>
			<tr class='warning'>
				<th>Casa</th>
				<th>Estado</th>
				<th>Municipio</th>
				<th>Parroquia</th>
				<th>Sector</th>
				<th>Direccion</th>
				<th>Familias</th>
				<th>Eliminar</th>
				<th>Modificar</th>
			</tr>";

		if (isset($filas)) {

				foreach ($filas as $fila) {

		 echo "<tr class='success'>";
			echo "<td>".$fila['numero_casa']."</td>";
			echo "<td>".$fila['estado']."</td>";
			echo "<td>".$fila['municipio']."</td>";
			echo "<td>".$fila['parroquia']."</td>";
			echo "<td>".$fila['sector']."</td>";
			echo "<td>".$fila['direccion']."</td>";
			echo "<td>".$fila['numero_familias']."</td>";
			echo "<td><a href='../Controlador/eliminar.php?casa=".$fila['numero_casa']."'>Eliminar</a></td>";
			echo "<td><a href='modificar.php?casa=".$fila['numero_casa']."'>Modificar</a></td>";
			echo "</tr>";
				
			}
		}
		
	echo "</table>";

}
	


?>