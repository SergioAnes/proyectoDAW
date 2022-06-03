<?php

require_once("../db/db.php");
include_once("../controllers/consulta_controller.php");

?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../../css/registro.css">
  <title>Consulta producto</title>
</head>
 <div>
    <a href="../../index.html">
      <img src="../../img/home.png" width="50" />
    </a>
  </div>
<body>
<form id="formulario" method="post" ENCTYPE="multipart/form-data"> 
  <section class="form-register">
    <h4>Consulta un producto en Curvys</h4>

    <?php
  if(!isset($_SESSION["IdCliente"])){
    session_start();
  }else{
      echo"<div> Bienvenido: ". $_SESSION['nombre'] . " " . $_SESSION['apellido'] . "</div>";
      echo"<div> ID Empleado: ".$_SESSION['IdCliente']."</div>";
     $IdCliente = $_SESSION["IdCliente"];
  }
  ?>


    <input class="botons" type="submit" value="Consultar" name="consultar">

     <a href="alqwelcomeClientes_view.php"> Volver al menú </a>


  </section>



</form>
</body>
</html>