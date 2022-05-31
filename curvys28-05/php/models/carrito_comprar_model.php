<?php 

require_once("../db/db.php");
function recogerProductos($linea) {
		global $conexion;
	try {
		$query ='SELECT * from productos where lineaProducto="'.$linea.'";';
		
		$gsent=$conexion->prepare($query);
		$gsent->execute();
		$resultado = $gsent->fetchAll(PDO::FETCH_ASSOC);
		
		return $resultado;
      }
      	catch (PDOException $ex) {
			echo "<p>Ha ocurrido un error al devolver los datos. <span style='color: red; font-weight: bold;'>". $ex->getMessage()."</span></p></br>";
		return null;
	}

} //fin de comprobar login 



 ?>