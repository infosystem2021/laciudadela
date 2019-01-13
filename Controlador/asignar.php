<?php

session_start();
if (!$_SESSION["user"]) {
  header("location:index.php");

}


                       require_once("../Modelo/class.conexion.php");
                       require_once("../Modelo/class.consultar.php");
        
        

?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../estilos/estilos.css">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="../bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  <title>mision sucre</title>
</head>
<body style="background-color:#FFC2A8">
  <div class="container">


<?php
  


    function seleccionarJefe(){
    if (isset($_GET['cedula'])) {
      $consultas= new Consultar();
      $casa = $_GET['cedula'];

            
      $filas = $consultas->cargarGrupo($casa);
      foreach ($filas as $fila) {

        
         
        echo '

        <div class ="container">

      
  <form action="../Controlador/asignacionfinal.php" method="POST" accept-charset="utf-8">
      <br>
    
    <center>

   
    <br>
                            <p>
<span class="label label-info">NACIONALIDAD</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <span class="label label-info">CEDULA</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="label label-info">NOMBRES</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="label label-info">APELLIDOS</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
</p>
      <p>
              <select name="nacionalidad">
                          <option value="'.$fila['nacionalidad_miembro'].'" ><b>nacionalidad</b></option>
                          <option>V</option>
                          <option>E</option>
                       </select>

          <input type="number" name="cedula" min="1000000" max="500000000" value="'.$fila['cedula_miembro'].'"  required>
        
          
          <input type="text" name="nombres" value="'.$fila['nombres_miembro'].'" required>
        
          
          <input type="text" name="apellidos" value="'.$fila['apellidos_miembro'].'" required>

          
        </p>
        <br>
                                 <p>
<span class="label label-info">SEXO</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <span class="label label-info">F_NACIMIENTO</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="label label-info">EDAD</span>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="label label-info">ESTADO CIVIL</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
</p>
        <p>
        
         <select name="sexo">
                          <option value="'.$fila['sexo_miembro'].'" ><b>Sexo</b></option>
                          <option>M</option>
                          <option>F</option>
                       </select>

        <input type="date" name="fecha_nacimiento" value="'.$fila['fecha_nacimiento_miembro'].'"  required>
        
          
            <input type="number" name="edad" value="'.$fila['edad_miembro'].'" min="0"  required>

           <select name="estado_civil">
                          <option value="'.$fila['estado_civil_miembro'].'"><b>Estado Civil</b></option>
                          <option>soltero(a)</option>
                          <option>casado(a)</option>
                           <option>divorciado(a)</option>
                          <option>viudo(a)</option>
                           <option>concubino(a)</option>
                         
                       </select>
      
          
        </p>
        <br>
                 <p>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="label label-info">PROFESION</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <span class="label label-info">TRABAJA</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="label label-info">LUGAR TRABAJO</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="label label-info">INGRESO MENSUAL</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
</p>
        <p>
          
        
        
          <input type="text" name="profesion_oficio" value="'.$fila['profesion_oficio_miembro'].'"  required>

         <select name="trabaja">
                          <option value="'.$fila['trabaja_miembro'].'" ><b>trabaja</b></option>
                          <option>si</option>
                          <option>no</option>
                           
                       </select>

          
          <input type="text" name="lugar_trabajo" value="'.$fila['lugar_trabajo_miembro'].'"  required>
        
          
          <input type="number" name="ingreso_mensual" value="'.$fila['ingreso_mensual_m'].'"  required>
        </p>
        <br>
    <p>
                     &nbsp;&nbsp;&nbsp;&nbsp;<span class="label label-info">ESTUDIA</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">GRADO DE INSTRUCCION</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">INSTITUCION</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">DONDE VOTA</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </p>
        <p>
          
          <input type="text" name="grado_instruccion" value="'.$fila['grado_instruccion_miembro'].'"  required>
        
                     <select name="estudia">
                          <option value="'.$fila['estudia_miembro'].'" ><b>estudia</b></option>
                          <option>si</option>
                          <option>no</option>
                       </select>
          <input type="text" name="institucion" value="'.$fila['institucion_m'].'"  required>

          <input type="text" name="vota_donde" value="'.$fila['vota_donde_miembro'].'"  required>
        
        </p>
        <br>
        <p>
                     &nbsp;&nbsp;&nbsp;&nbsp;<span class="label label-info">ENFERMEDAD</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">MEDICAMENTO</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">DISPACIDAD</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">ASISTIDO</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </p>
        <p>
          
          
          
          <input type="text" name="enfermedad" value="'.$fila['enfermedad_miembro'].'"  required>
        
          <input type="text" name="medicamento" value="'.$fila['medicamento_m'].'"  required>

            <input type="text" name="discapacitado" value="'.$fila['discapacidad_miembro'].'"  required>
          
          
          <input type="text" name="asistido" value="'.$fila['asistido_m'].'"  required> 
        
        </p>
        <br>
        <p>
                     &nbsp;&nbsp;&nbsp;&nbsp;<span class="label label-info">TELEFONO</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">CORREO</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">EMBARAZADA</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="label label-info">CONTROL</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </p>  
        <p> 
    
  
          <input type="number" name="telefono" min="0" value="'.$fila['telefono_miembro'].'"  required>

          <input type="email" name="correo" value="'.$fila['correo_miembro'].'"  required>

          <select name="embarazada">
                          <option value="'.$fila['embarazada_m'].'" ><b>embarazada</b></option>
                          <option>si</option>
                          <option>no</option>
                           
                       </select>
          
          <input type="text" name="control" value="'.$fila['control_m'].'"  required>

          
          
        </p>
        <br>
         <p>
                    <span class="label label-info">SERIAL</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="label label-info">CODIGO</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="label label-info">VIVE EN CASA</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="label label-info">NUMERO DE CASA</span>
                 </P>
        <p>
          

          <input type="text" name="serial" min="0" value="'.$fila['serial_miembro'].'"  required>  
          
          <input type="text" name="codigo"min="0" value="'.$fila['codigo_miembro'].'"   required>
        
          <input type="text" name="vive_casa" value="'.$fila['vive_casa_m'].'"  required>


            <input type="text" name="numero_casaj" value="'.$fila['numero_casa_m'].'" required>

          
        
       
        
        
          &nbsp;
        </p>

          <input class="btn btn_danger" type="submit" value="Registrar Jefe">
        
    
    </center>
  
  </form>
  ';

}

  }

  }

?>
  </div>
  </div>
  </div>
  

</body>
</html>
