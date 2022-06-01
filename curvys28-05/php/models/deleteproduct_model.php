<?php 

function desplegableProductos(){
global $conexion; 
  $sqlConsulta = ("SELECT codigoProducto, nombreProducto FROM productos");
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

function eliminarProductos($codigoProducto){
global $conexion; 
  $sqlConsulta = ("DELETE FROM productos WHERE codigoProducto='$codigoProducto'");
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


function muestraImagen($codigoProducto){
global $conexion; 
  $sqlConsulta = ("SELECT img FROM productos WHERE codigoProducto='$codigoProducto'");
      try{
        $resultado=$conexion->prepare($sqlConsulta);
        $resultado->execute();
        $registro=$resultado->fetchColumn(); //se guardan los resultados de la consulta
        return $registro;
    }catch(PDOException $e){
        echo "No se ha ejecutado el select <br>",$e->getMessage();
    }
  //Devuelvo los resultados
  return $resultado;
}//desplegable peliculas


?>