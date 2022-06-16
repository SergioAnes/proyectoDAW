<?php
session_start();

	if(!isset($_SESSION["IdCliente"])){
		header("location: alqlogin_view.php");
	}else{
		 $IdCliente = $_SESSION["IdCliente"];
		
	}
?>

<html>
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Bienvenido a Curvys</title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link href="../../css/style.css" rel="stylesheet" type="text/css" />
 </head>
  
 <body>
    <a href='../../index.php'> <img src='../../img/home.png' width='50' /> </a> <h1>Portal del cliente</h1> 
    
    <div class="container ">
        <!--Aplicacion-->
    <div class="card border-success mb-3" style="max-width: 30rem;">
    <div class="card-header">Área clientes</div>
    <div class="card-body">
      
    <?php
      if (!isset($_SESSION['IdCliente'])){
        session_start();
      } else {
    
      echo"<div> Bienvenido: ". $_SESSION['nombre'] . " " . $_SESSION['apellido'] . "</div>";
      echo"<div> ID Cliente: ".$_SESSION['IdCliente']."</div>";
    }
    ?>
   
       <!--Formulario con botoness -->
  
    <input type="button" value="Compra ropa" onclick="window.location.href='../../index.php'" class="btn btn-warning enabled">
    <input type="button" value="Historial de pedidos" onclick="window.location.href='consulta_view.php'" class="btn btn-warning enabled">
    <input type="button" value="Ver cesta" onclick="window.location.href='../controllers/carrito_comprar_controller.php'" class="btn btn-warning enabled">
    </br></br>
    
       <li><a href="../cerrarSesion.php">Cerrar Sesión</a></li>
  </div>  
    
    
     
   </body>
   
</html>

  
    
