<?php

session_start();
if (!$_SESSION["user"]) {
	header("location:index.php");
}
?>

<?php

require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");
require_once("../Controlador/usuariosregistrados.php");
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

	 <header class="header">
          
              <?php
                     include("../include/cabecera.php");
                 ?>
        
      </header>

       <?php

                 include("../include/carrusel.php");
              ?>

              <?php
                        include("../include/menu5.php");
                    ?>
                    


	<div class ="container">
		


	<form action="../Controlador/controlusuarios.php" method="post" accept-charset="utf-8">
		<h2>REGISTRAR USUARIO</h2>
		<table border="0" align ="center" valign="middle">
				<tr>
					<td><span class="label label-info" style="font-size: 14pt ">USUARIO:</span></td>
					<td><input type="text" name="user"></td>
				</tr>
					<tr>
					<td><span class="label label-info" style="font-size: 14pt ">CONTRASEÑA A:</span></td>
					<td><input type="password" name="passadmin"></td>
				</tr>
				<tr>
					<td><span class="label label-info" style="font-size: 14pt ">CONTRASEÑA B:</span></td>
					<td><input type="password" name="pass"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input class="btn btn-success" type="submit" value="Registrar Usuario"></td>
				</tr>
		</table>
		<br>
		<center><h2>USUARIOS REGISTRADOS</h2></center>

<?php

usuarios();

?>
	
	</form>
	</div>
</div>
</body>
</html>