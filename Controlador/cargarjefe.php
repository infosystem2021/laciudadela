<?php

function cargarJefes(){

	$consultar= new Consultar();
	$filas = $consultar->cargarJefes();

	if (isset($filas)) {

	echo "<table border='2'; class='table table-hover';>
			<tr class='warning'>
			    <th>N</th>
				<th>Cedula</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>F_nacimiento</th>
				<th>Telefono</th>
				<th>Edad</th>
				<th>Casa</th>
				<th>Ver</th>
				<th>Eliminar</th>
				<th>Modificar</th>
		
			</tr>";

			foreach ($filas as $fila) {


		    echo "<tr class='success'>";
		    echo "<td>".$fila['nacionalidad']."</td>";
			echo "<td>".$fila['cedula']."</td>";
			echo "<td>".$fila['nombres']."</td>";
			echo "<td>".$fila['apellidos']."</td>";
			echo "<td>".$fila['fecha_nacimiento']."</td>";
			echo "<td>".$fila['telefono']."</td>";
			echo "<td>".$fila['edad']."</td>";
			echo "<td>".$fila['numero_casaj']."</td>";
			echo "<td><a href='../vista/verjefe2.php?cedula=".$fila['cedula']."'>Ver</a></td>";
			echo "<td><a href='../Controlador/eliminarjefe.php?cedula=".$fila['cedula']."'>Eliminar</a></td>";
			echo "<td><a href='modificarjefe.php?cedula=".$fila['cedula']."'>Modificar</a></td>";
			echo "</tr>";
		
				
			}
		
	echo "</table>";
}

}

 function buscarJefe($casa){
	$consultar= new Consultar();
	$filas = $consultar->buscarJefe($casa);

	echo "<table border='2'; class='table table-hover';>
			<tr class='warning'>
			    <th>N</th>
				<th>Cedula</th>
				<th>Combres</th>
				<th>Apellidos</th>
				<th>Fecha_Nacimiento</th>
				<th>Telefono</th>
				<th>Edad</th>
				<th>Casa</th>
				<th>Ver</th>
				<th>Eliminar</th>
				<th>Modificar</th>
			</tr>";

		if (isset($filas)) {

				foreach ($filas as $fila) {

		 echo "<tr class='success'>";
		    echo "<td>".$fila['nacionalidad']."</td>";
			echo "<td>".$fila['cedula']."</td>";
			echo "<td>".$fila['nombres']."</td>";
			echo "<td>".$fila['apellidos']."</td>";
			echo "<td>".$fila['fecha_nacimiento']."</td>";
			echo "<td>".$fila['telefono']."</td>";
			echo "<td>".$fila['edad']."</td>";
			echo "<td>".$fila['numero_casaj']."</td>";
			echo "<td><a href='../vista/verjefe2.php?cedula=".$fila['cedula']."'>Ver</a></td>";
			echo "<td><a href='../Controlador/eliminarjefe.php?casa=".$fila['cedula']."'>Eliminar</a></td>";
			echo "<td><a href='modificarjefe.php?casa=".$fila['cedula']."'>Modificar</a></td>";
			echo "</tr>";
				
			}
		}
		
	echo "</table>";

}
?>