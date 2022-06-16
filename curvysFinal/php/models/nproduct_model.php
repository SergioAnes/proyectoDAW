<?php 

function desplegableLista(){
global $conexion; 

  $sqlConsulta = ("SELECT lineaProducto from lineasProducto");
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

function insertarProductos ($nombreProducto, $lineaProducto, $descripcionProducto, $cantidadStock, $precioCompra, $img) {
      global $conexion;

      $sqlConsulta = "INSERT INTO productos (nombreProducto, lineaProducto, descripcionProducto, cantidadStock, precioCompra, img) values ('$nombreProducto','$lineaProducto', '$descripcionProducto', '$cantidadStock','$precioCompra','$img')";
	
	  try {
            $resultado = $conexion-> prepare($sqlConsulta); // Se prepara.
            $resultado->execute(); //Se ejecuta.
            echo "<h2>Producto añadido a la base de datos con éxito</h2> <br>";
      }catch(PDOException $e){
             echo "No se han podido insertar los datos en la tabla <br>", $e-> getMessage();
       }
}//fin insertarPayments



 ?>