<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet">
  <title>Carrito Vacío </title>
  <style type="text/css">
  body {
      background-image: url(../../img/carrito-vacio.png);
      background-repeat: no-repeat;
      }
  </style>
</head>
<body>

  <a href='../../index.php'> <img src='../../img/home.png' width='50' /> </a>
  <h1> ¡El carrito está vacío y pide que lo llenen! <h1>

    <?php
  if(!isset($_SESSION["IdCliente"])){
    session_start();
  }else{
     $IdCliente = $_SESSION["IdCliente"];
  }
  ?>


</body>
</html>