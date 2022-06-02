<?php

require_once("../models/consulta_model.php");

//Se incia la sesion
session_start();


//Si alguien se mete en esta página de forma directa sin loguear, regresa al index. 
if(!isset($_SESSION['IdCliente'])){
        header("location: ../index.php");
    
}else{
        $IdCliente = $_SESSION['IdCliente']; 
    }


	if (isset($_POST['consultar'])) {

      $IdCliente=$_SESSION['IdCliente'];
      $informacionPedidos = consultaPedidos($IdCliente);

      echo "<br> <br> <table border='2'>";
                  echo "<thead> <tr> <th colspan='3'> Información de pedidos </th> </tr> </thead>
                  <tbody>
                  <tr> <th> codigoProducto </th> <th> cantidadPedida </th> <th> fechaPedido </th> </tr>";
                   foreach ($informacionPedidos as $cadaApartado) {
                      echo   "<tr>
                                  <td>".$cadaApartado['codigoProducto']."</td>
                                  <td>".$cadaApartado['cantidadPedida']."</td>
                                  <td>".$cadaApartado['fechaPedido']."</td>
                              </tr>";
                  } //fin foreach 
                  echo "</tbody></table>";
                  echo "<br>";
       

	} //fin if registrar
        


?>