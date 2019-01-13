<!DOCTYPE html>

	<?php
	session_start();
	if (!$_SESSION['user']) {
		header("Location:../index.php");
	
	}	
	
	?>

<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>mision sucre</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="../estilos/estilos.css">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="../bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body  data-offset="40" style="background-color:#FFC2A8">
   <div class="container">
         <header class="header">
           
	              <?php
	                 include("../include/cabecera.php");
	                ?>
            
       </header>

  <!-- Navbar  ================================================== -->
                 
<!-- ======================================================================================================================== -->
                 <?php

                       include("../include/carrusel.php");

                   ?>

                	<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
		</form>
		<ul class="nav pull-right">
		
			<a href="" class="btn btn-info">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a>
			<a href="../salir.php" class="btn btn-danger"> Cerrar Cesión </a>		 
					 
		</ul>
	  </div><!-- /.nav-collapse -->
	</div>

	<div class="container">

<div class="row" style="text-align:center">
		
		
			<div class="span12">
				  <div class="thumbnail">
					        <h4 >Reseña historica</h4>

					   <p align="justify">
	                         Es una comunidad organizada por medio de una Organización Comunitaria Integral de Vivienda y Hábitat (O.C.I.V.H) fundada en el año 1998; por las ciudadanas y ciudadanos: Alberto Castillo, Beda Delgado, Alejandrina Berrio, Pablo Parra, Arlenis Chirinos, Orson Colina, Carmen Sivira y otros vecinos. Ya que por la necesidad de una vivienda construyeron sus ranchos de guafas, tablas, zinc y barro el cual habitaron hasta los finales del 2008. Debido al proyecto que se aprobó con recursos de la Institución de Fondo Intergubernamental para la Descentralización (FIDES) de sustitución de rancho por vivienda. Permitiendo así la construcción de veinte (20) casa con el programa de autoconstrucción y la misma estuvo a cargo del Instituto Regional  de Vivienda (INREVI). Luego la misma institución a cargo aprobó la construyo seis (06) casas más. Pero en la actualidad faltan por construir nueves (09) casa y la  rehabilitación  de cuatro (04) casas. Ejecutando estas viviendas  será una comunidad bien consolidada.
                       </p>
				</div>
			</div>					
</div>
<center><h3>LA PATRIA</h3></center>
<div class="row">

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Hugo Chavez</h3>	
	<img src="../images/1.jpg" alt="#"/>
	<br>
	</div>
	</div>

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Leyes</h3>	
	<img src="../images/11.jpg" />
	<br/>
	</div>
	</div>

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Nicolas Maduro</h3>	
	<img src="../images/9.jpg"/>
	<br/>
	</div>
	</div>
</div>
<hr/>
       <div class="row">
        	<div class="span6">
	             <div class="thumbnail">
		              <h3>MISION</h3>
		              <img src="../images/3.jpg" alt="#"/>
		              <p> Planificar, coordinar, organizar y supervisar todos los aspectos y caracteristicas fisicas-geograficas de la comunidad.</p>
	             </div>
	       </div>
	        <div class="span6">
	              <div class="thumbnail">
	                 	<h3> VISION</h3>
	                 	<img src="../images/6.jpg" alt="#"/>
	                 	<p> Es generar un cambio en la comunidad que propicie un desarrollo armonico local, logrando elevar el espiritu.</p>
             	 </div>
	   </div>	
       </div>
<!-- Footer
      ================================================== -->
        <hr class="soften"/>
       <footer class="footer">
            <hr class="soften"/>
            <p><b>mision sucre</b> <br/><br/></p>
      </footer>
</div>
</div><!-- /container -->
    
	</style>
  </body>
</html>