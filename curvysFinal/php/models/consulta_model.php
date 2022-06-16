<?php 

function consultaPedidos($idCliente){
global $conexion; 

  $sqlConsulta = ("SELECT detallesPedido.numeroPedido, detallesPedido.codigoProducto, detallesPedido.cantidadPedida, detallesPedido.precioUnidad, pedidos.fechaPedido, pedidos.precioTotal  FROM pedidos, detallesPedido WHERE pedidos.numeroPedido = detallesPedido.numeroPedido AND pedidos.IdCliente='$idCliente' ORDER BY pedidos.numeroPedido DESC");
      try{
        $resultado=$conexion->prepare($sqlConsulta);
        $resultado->execute();
        $registro=$resultado->fetchAll(PDO::FETCH_ASSOC); //se guardan los resultados de la consulta
        return $registro;
    }catch(PDOException $e){
        echo "No se ha ejecutado el select <br>",$e->getMessage();
    }
  //Devuelvo los resultados
  return $resultado;
}//desplegable peliculas



 ?>