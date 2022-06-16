<?php

require_once("../models/consulta_model.php");

//Se incia la sesion
session_start();

//Si alguien se mete en esta página de forma directa sin loguear, regresa al index. 

if(!isset($_SESSION['IdCliente'])){
        header("location: ../index.php");
    
}else{
        $IdCliente= $_SESSION['IdCliente']; 
        $IdNombre = $_SESSION['nombre'];
        $IdApellido=$_SESSION['apellido'];
    }

      $IdCliente=$_SESSION['IdCliente'];
      $informacionPedidos = consultaPedidos($IdCliente);
      
     echo "<a href='../../index.php'> <img src='../../img/home.png' width='50' /> </a>";

     echo "<br> <br> <table border='2' width='60%' align='center' style='margin: 0px auto;'>";
                  echo "<thead> <tr> <th colspan='6'> Información de pedidos  $IdNombre $IdApellido </th> </tr> </thead>
                  <tbody>
                  <tr> <th> Número de Pedido </th> <th> Codigo Producto </th> <th> Cantidad Pedida </th> <th> Precio Unidad </th> <th> Fecha Pedido </th> <th> Precio total por Nºpedido </th></tr>";
                   foreach ($informacionPedidos as $cadaApartado) {
                      echo   "<tr>
                                  <td>".$cadaApartado['numeroPedido']."</td>
                                  <td>".$cadaApartado['codigoProducto']."</td>
                                  <td>".$cadaApartado['cantidadPedida']."</td>
                                  <td>".$cadaApartado['precioUnidad']."</td>
                                  <td>".$cadaApartado['fechaPedido']."</td>
                                  <td>".$cadaApartado['precioTotal']."</td>
                              </tr>";
                  } //fin foreach 
                  echo "</tbody></table>";
                  echo "<br>";
       
    /*echo "<div style='text-align: center'> 
            <a href='alqwelcomeClientes_view.php'> Volver al menú </a>
        </div>";*/

        


?>