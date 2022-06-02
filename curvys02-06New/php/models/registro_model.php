<?php 

function validarNoRepite ($nombre,$telefono) {
      global $conexion;

         $noRepite=0;
         $query=$conexion->prepare("SELECT * FROM clientes WHERE nombreCliente = '$nombre' AND telefono='$telefono'");
         $query->execute();
         if ($query->fetchColumn() > 0) {
             $noRepite=0;
         }//fin if 
         else {//habria que inserta los registros
            $noRepite=1;
         }
         return $noRepite;
}//fin funcion validarNoRepite


function insertarClientes ($IdCliente, $nombreCliente, $clienteApellido1, $clienteApellido2, $telefono, $direccion1, $password, $ciudad,$codigoPostal,$pais) {
      global $conexion;

      $sqlConsulta = "INSERT INTO clientes values ('$IdCliente','$nombreCliente','$clienteApellido1', '$clienteApellido2', '$telefono','$direccion1','$password','$ciudad','$codigoPostal','$pais')";
       try {
            $resultado = $conexion-> prepare($sqlConsulta); // Se prepara.
            $resultado->execute(); //Se ejecuta.
            //echo "Datos insertados en la tabla de pagos  <br>";
      }catch(PDOException $e){
             echo "No se han podido insertar los datos en la tabla <br>", $e-> getMessage();
       }
}//fin insertarPayments


function generarNuevaId() {
      global $conexion;

        $sqlConsulta = ("SELECT max(IdCliente) FROM clientes"); 
        $resultado = $conexion->prepare($sqlConsulta);
        $resultado->execute();
        $valor=$resultado->fetchColumn(); //Si no se especifica nada, devuelve la primera columna de la primera fila. En este caso, un select con un único dato, devuelve la primera vez 10425.
        $valor+=1;
        return $valor;
}//fin generar nuevaId


 ?>