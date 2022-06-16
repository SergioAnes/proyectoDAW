<?php 

function desplegableLista(){
global $conexion; 

  $sqlConsulta = ("SELECT lineaProducto from lineasproducto");
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

function obtenerNombre($codigoProducto){
global $conexion; 

  $sqlConsulta = ("SELECT nombreProducto from productos WHERE codigoProducto='$codigoProducto'");
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

function obtenerDescripcion($codigoProducto){
global $conexion; 

  $sqlConsulta = ("SELECT descripcionProducto from productos WHERE codigoProducto='$codigoProducto'");
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


function obtenerStock($codigoProducto){
global $conexion; 

  $sqlConsulta = ("SELECT cantidadStock from productos WHERE codigoProducto='$codigoProducto'");
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


function obtenerPventa($codigoProducto){
global $conexion; 

  $sqlConsulta = ("SELECT precioCompra from productos WHERE codigoProducto='$codigoProducto'");
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

function obtenerImagen($codigoProducto){
global $conexion; 

  $sqlConsulta = ("SELECT img from productos WHERE codigoProducto='$codigoProducto'");
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



function modificarProductos ($codigoProducto, $nombreProducto, $descripcionProducto, $cantidadStock, $precioCompra, $img) {
      global $conexion;

      $sqlConsulta = "UPDATE productos SET nombreProducto = '$nombreProducto', descripcionProducto='$descripcionProducto', cantidadStock='$cantidadStock', precioCompra='$precioCompra', img='$img' WHERE codigoProducto = '$codigoProducto'";
       try {
            $resultado = $conexion-> prepare($sqlConsulta); // Se prepara.
            $resultado->execute(); //Se ejecuta.
            echo "<h2>Producto modificado con éxito</h2></br>";
      }catch(PDOException $e){
             echo "No se han podido insertar los datos en la tabla <br>", $e-> getMessage();
       }
}//fin insertarPayments



 ?>