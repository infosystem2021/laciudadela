<?php

class Conexion{

	public function get_conexion(){

		$user="root";
		$pass="nuevavictoria";
		$host="localhost";
		$db="laciudadela";
		$conexion= new pdo("mysql:host=$host;dbname=$db;",$user,$pass);

       return $conexion;
	}


}

?>