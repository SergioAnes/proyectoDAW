<?php 

function desplegableProductos(){
global $conexion; 
  $sqlConsulta = ("SELECT codigoProducto, nombreProducto FROM productos ORDER BY codigoProducto ASC");
      try{
        $resultado=$conexion->prepare($sqlConsulta);
        $resultado->execute();
        $registro=$resultado->fetchAll(PDO::FETCH_ASSOC); //se guardan los resultados de la consulta
    }catch(PDOException $e){
        echo "No se ha ejecutado el select <br>",$e->getMessage();
    }

     return $registro;
  //Devuelvo los resultados
}//desplegable 

function eliminarProductos($codigoProducto){
global $conexion; 
  $sqlConsulta = ("UPDATE productos SET cantidadStock = 0 WHERE codigoProducto='$codigoProducto'");
       try{
        $resultado=$conexion->prepare($sqlConsulta);
        $resultado->execute();
    }catch(PDOException $e){
        echo "No se ha ejecutado el select <br>",$e->getMessage();
    }
  
}//desplegable peliculas


function muestraImagen($codigoProducto){
global $conexion; 
  $sqlConsulta = ("SELECT img FROM productos WHERE codigoProducto='$codigoProducto'");
      try{
        $resultado=$conexion->prepare($sqlConsulta);
        $resultado->execute();
        $registro=$resultado->fetchColumn(); //se guardan los resultados de la consulta
    
    }catch(PDOException $e){
        echo "No se ha ejecutado el select <br>",$e->getMessage();
    }
     return $registro;
  //Devuelvo los resultados
}//desplegable 


function muestraNombre($codigoProducto){
global $conexion; 
  $sqlConsulta = ("SELECT nombreProducto FROM productos WHERE codigoProducto='$codigoProducto'");
      try{
        $resultado=$conexion->prepare($sqlConsulta);
        $resultado->execute();
        $registro=$resultado->fetchColumn(); //se guardan los resultados de la consulta
    
    }catch(PDOException $e){
        echo "No se ha ejecutado el select <br>",$e->getMessage();
    }
     return $registro;
  //Devuelvo los resultados
}//desplegable peliculas



?>