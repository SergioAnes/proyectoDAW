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

} 

function cantidadStock ($idProducto){
	global $conexion;
	$sql = "Select cantidadStock from productos where codigoProducto = '$idProducto'";
	  try{
    //compila y prepara estructuras de datos
    $gsent=$conexion->prepare($sql);
    //La ejecuto
    $gsent->execute();
    $resultado = $gsent->fetchAll(PDO::FETCH_ASSOC);

	$cantidaStock=$resultado[0]['cantidadStock'];

	return $cantidaStock;

    //Usar el codigo (buscar)
 }catch(PDOException $e){
    echo "No se ha ejecutado el select<br>",$e->getMessage();
 }
} 



 ?>