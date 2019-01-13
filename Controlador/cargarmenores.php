<?php

function cargarMenores(){

  $consultar= new Consultar();
  $filas = $consultar->cargarMenores();

  if (isset($filas)) {

  echo "<table border='2'; class='table table-hover';>
      <tr class='warning'>
        <th>N</th>
        <th>Cedula</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>F_Nacimiento</th>
        <th>Telefono</th>
        <th>Edad</th>
        <th>Cedula Jefe</th>
        
    
      </tr>";

      foreach ($filas as $fila) {


        echo "<tr class='success'>";
        echo "<td>".$fila['nacionalidad_miembro']."</td>";
      echo "<td>".$fila['cedula_miembro']."</td>";
      echo "<td>".$fila['nombres_miembro']."</td>";
      echo "<td>".$fila['apellidos_miembro']."</td>";
      echo "<td>".$fila['fecha_nacimiento_miembro']."</td>";
      echo "<td>".$fila['telefono_miembro']."</td>";
      echo "<td>".$fila['edad_miembro']."</td>";
      echo "<td>".$fila['cedulaj']."</td>";
      echo "</tr>";
    
        
      }
    
  echo "</table>";
}

}