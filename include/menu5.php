<!DOCTYPE html>
<html>
<head>

<style="text/css"
*{
	padding:0px;
	margin:0px;
}

#header { margin: auto;
	width: 500px;
	font-family: Arial,Helvetica,sans-serif;

}

ul, ol{

	list-style: none;

}

.nav li a {

	background-color: #000;
	color: #fff;
	text-decoration: none;
	padding: 10px 15px;
	display: block;
}
	
</style>
</head>

     <div id="header">
           <ul class="nav">
            
            	
		           <li><a href="inicio.php" >Inicio</a></li>
		           <li><a href="insertar.php" >Viviendas</a>
		               <ul>    
		                        <li><a href="insertar.php" >Registrar vivienda</a></li>
		                        <li><a href="verviviendas.php" >Consultar Viviendas</a></li>
		               </ul>
		           </li>
		         
		           <li><a href="insertarjefe.php" >Jefes </a>
		               <ul>
		                     <li><a href="insertarjefe.php" >Registrar Jefe de Familia </a></li>
		                     <li><a href="verjefe.php" >Consultar Jefes de Familias </a></li>	       
                       </ul>
                   </li>
		           
		           <li><a href="insertargrupo.php" > Miembros</a>
		                <ul>
		                     <li><a href="insertargrupo.php" >Registrar Miembro </a></li>
		                     <li><a href="vergrupo.php" >Consultar Miembros </a></li>
		                     <li><a href="asignacion.php" > Asignacion </a></li>	       
                       </ul>
                   </li>
		 	      

			        <li><a href="" >Atencion Especial</a>
		                   <ul>    
		                        <li><a href="../vista/cargaradultos.php" >Adultos Mayores</a></li>
		                        <li><a href="../vista/cargarmenores.php" >Menores de Edad</a></li>
		                        <li><a href="../vista/cargarembarazadas.php" >Embarazadas</a></li>
		                        <li><a href="../vista/cargardiscapacidad.php" >Discapacitados</a></li>
		                   </ul>
		            </li>  
		             <li><a href="" >Constancias</a>
		                   <ul>    
		                        <li><a href="../pdf/constancia.php" >Constancia de Residencia</a></li>
		                        <li><a href="../pdf/constanciadenoposeervivenda.php" >Costancia de no poseer vivienda</a></li>
		                        <li><a href="../pdf/constancia_de_ocupacion.php" >Constancia de Ocupacion</a></li>
		                   </ul>
		            </li>

		              <li><a href="buscar.php" >Buscar</a></li>  
			       <li><a href="usuarios.php" >Usuarios</a></li>     
            </ul>
       </div>
       
 


        
				   &nbsp;&nbsp;  <a href="" class="btn btn-info"> <strong><?php echo $_SESSION["user"];?></strong> </a>
			         <a href="../salir.php" class="btn btn-danger"> Cerrar Sesion </a>
			         <br>
			         <br>
			 
           
                     	
                   

      

 