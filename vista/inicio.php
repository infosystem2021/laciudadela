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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="../bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="../estilos/estilos.css">

		  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="../bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" href="../images/INFOSYSTEM.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
	<title>INFOSYSTEM</title>
  </head>
<body  data-offset="40" style="background-color:#FFC2A8">
   <div class="container">
         <header class="header">

         	<div class="container">

         
             	<center>
	              <?php
	                 include("../include/cabecera.php");
	                ?>
	                </center>
	       
	       </div>
            
       </header>

          <?php

                       include("../include/carrusel.php");

                   ?>
             
         <?php
                        include("../include/menu5.php");
                    ?>

                  



<div class="row" style="text-align:center">
		
		
		
			  
				  
					       <div class="span6">
				                 <br>
				                 <br>
					        
					                <img src="../images/30.jpg" />
					        </div>
					        <div class="span6">
                                 <h4>Artículo 184. °</h4> 
					           <p align="justify">
	                         
                              La ley creará mecanismos abiertos y flexibles para que los Estados y los
                              Municipios descentralicen y transfieran a las comunidades y grupos
                              vecinales organizados los servicios que éstos gestionen previa
                              demostración de su capacidad para prestarlos, promoviendo:
                              1. La transferencia de servicios en materia de salud, educación,
                              vivienda, deporte, cultura, programas sociales, ambiente,
                              mantenimiento de áreas industriales, mantenimiento y conservación
                              de áreas urbanas, prevención y protección vecinal, construcción de
                              obras y prestación de servicios públicos. A tal efecto, podrán
                              establecer convenios cuyos contenidos estarán orientados por los
                              principios de interdependencia, coordinación, cooperación y
                              corresponsabilidad.
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
            <p><b>INFOSYSTEM</b> <br/><br/></p>
      </footer>
</div>
</div><!-- /container -->
    
	</style>
  </body>
</html>