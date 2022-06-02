<?php 

function consultaPedidos($idCliente){
global $conexion; 

  $sqlConsulta = ("SELECT detallespedido.codigoProducto, detallespedido.cantidadPedida, pedidos.fechaPedido FROM pedidos, detallespedido WHERE pedidos.numeroPedido = detallespedido.numeroPedido AND pedidos.IdCliente='$idCliente'");
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