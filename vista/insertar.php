<?php

session_start();
if (!$_SESSION["user"]) {
	header("location:index.php");
}
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
		


	<form action="../Controlador/insertar.php" class="inline" method="POST" accept-charset="utf-8">
		
		<center>
		<h1>REGISTRO DE VIVIENDA</h1>
		<br>
				
				<p>
					<input type="number" min="1"  name="casa" placeholder="numero de casa" required>
					
					<input type="text" name="estado" placeholder="estado" required>
				
					<input type="text" name="municipio" placeholder="municipio" required>
				
					<input type="text" name="parroquia"placeholder="parroquia" required>
			
			</p>
			<p>
					<input type="text" name="sector" placeholder="sector" required>
				
					<input type="text" name="direccion" placeholder="direccion" required>
			   
					<input type="number" min="0" name="familias" placeholder="numero de familias" required>
				</p>
					&nbsp;
					<input class="btn btn-success" type="submit" value="registrar vivienda">

		</center>
		
	
	</form>
	</div>
	</div>
</body>
</html>