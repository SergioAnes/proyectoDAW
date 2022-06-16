<?php

require_once("../db/db.php");
include_once("../controllers/consulta_controller.php");

?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../../css/historial.css">
  <title>Consulta producto</title>
</head>
<body>
<form id="formulario" method="post" ENCTYPE="multipart/form-data"> 
  <section class="form-register">

    <?php
  if(!isset($_SESSION["IdCliente"])){
    session_start();
  }else{
     $IdCliente = $_SESSION["IdCliente"];
  }
  ?>
    <div style='text-align: center'> 
     <a href="alqwelcomeClientes_view.php"> Volver al menú </a>
    </div>

  </section>



</form>
</body>
</html>