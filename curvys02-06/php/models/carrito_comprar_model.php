<?php 

require_once("../db/db.php");
function generarPedido($precioTotal, $idCliente) {
		global $conexion;
		$fechaActual = date ( 'Y-m-d' );
		$query = "INSERT INTO pedidos 
			(fechaPedido,
			estado,
			precioTotal,
			IdCliente) 
			VALUES 
			('$fechaActual',
			'Shipped',
			'$precioTotal',
			'$idCliente')";
	   try{
		  $conexion->exec($query);
		  echo "orden dada de alta correctamente<br>";
		}catch(PDOException $e){
			echo "No se ha podido proceder a la compra",$e->getMessage();
		}

} 
function ultimoPedido(){
	//declaro query de la Consulta
  global $conexion;
  $sql="SELECT MAX(numeroPedido) as numPedido from pedidos";

  try{
    //compila y prepara estructuras de datos
    $gsent=$conexion->prepare($sql);
    //La ejecuto
    $gsent->execute();
    // set the resulting array to associative
  /*  $resultado = $stmt->setFetchMode(PDO::FETCH_ASSOC);*/
    //Con Fetchall recojo los resultados
    $resultado = $gsent->fetchAll(PDO::FETCH_ASSOC);
	$ultimaOrdenLine=$resultado[0]['numPedido'];

	return $ultimaOrdenLine;

    //Usar el codigo (buscar)
 }catch(PDOException $e){
    echo "No se ha ejecutado el select<br>",$e->getMessage();
 }

	
	
}
function generarDetallesPedido($cesta, $ultimoPedido){
	global $conexion;
		foreach($cesta as $producto){
		
					$codigoProducto = $producto['codigoProducto'];
					$cantidad = $producto['cantidadProducto'];
					$precio = $producto['precioProducto'];
					$query = "INSERT INTO detallespedido 
							(numeroPedido,
							codigoProducto,
							cantidadPedida,
							precioUnidad) 
							VALUES 
							('$ultimoPedido',
							'$codigoProducto',
							'$cantidad',
							'$precio')";
				try{
					$conexion->exec($query);
					echo "orden dada de alta correctamente<br>";
				}catch(PDOException $e){
					echo "No se ha podido proceder a la compra",$e->getMessage();
				}
						
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
function eliminarCantidadStock($idProducto,$cantidad){
	global $conexion;
	$cantidaStock = cantidadStock ($idProducto);
	$cantidadFinal = $cantidaStock - $cantidad;
	$query = "UPDATE productos 
			  SET cantidadStock ='$cantidadFinal' 
			  WHERE codigoProducto = '$idProducto'";
   try{
		$conexion->exec($query);
		echo "stock actualizado con éxito<br>";
	}catch(PDOException $e){
		echo "No se ha podido proceder a la compra",$e->getMessage();
	}
						
}

 ?>