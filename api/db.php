<?php 

	try{
		// Cambiar valores por datos de BD
		$conexion = new PDO('mysql:host=localhost;dbname=tiendaenlinea','root','bilobated');
		return $conexion;

		}catch(PDOException $e){
			echo "No se pudo conectar a la Base de datos.";
		}

 ?>