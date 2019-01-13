<?php

function seleccionar(){
		if (isset($_GET['casa'])) {
			$consultas= new Consultar();
			$casa = $_GET['casa'];

			$filas = $consultas->cargarVivienda($casa);
			foreach ($filas as $fila) {
				echo '
               <center>
               <form action="../Controlador/modificarvivienda.php" method="post"> 

                 <table>
				<tr>
					<td><span class="label label-info">Casa: </span></td>
					<td><input type="text" name="casa2" value="'.$fila['numero_casa'].'"></td>
				</tr>
				<tr>
					<td><span class="label label-info">Estado: </span></td>
					<td><input type="text" name="estado" value="'.$fila['estado'].'"></td>
				</tr>
				<tr>
					<td><span class="label label-info">Municipio:</span> </td>
					<td><input type="text" name="municipio" value="'.$fila['municipio'].'"></td>
				</tr>
				<tr>
					<td><span class="label label-info">Parroquia:</span> &nbsp;</td>
					<td><input type="text" name="parroquia" value="'.$fila['parroquia'].'"></td>
				</tr>
				<tr>
					<td><span class="label label-info">Sector: </span></td>
					<td><input type="text" name="sector" value="'.$fila['sector'].'"></td>
				</tr>
				<tr>
					<td><span class="label label-info">Direccion: </span></td>
					<td><input type="text" name="direccion" value="'.$fila['direccion'].'"></td>
				</tr>
				<tr>
					<td><span class="label label-info">Familias:</span></td>
					<td><input type="text" name="familias" value="'.$fila['numero_familias'].'"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="hidden" name="id" value="'.$casa.'"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input class="btn btn-success" type="submit" value="Modificar Vivienda"></td>
				</tr>
		</table>
                   
    
                </form>
                </center>

			';
			}
			
		}
}

?>