<?php
session_start();

	if(!isset($_SESSION["IdEmpleado"])){
		header("location: alqlogin_view.php");
	}else{
		 $IdEmpleado = $_SESSION["IdEmpleado"];	
	}
?>

<html>
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Bienvenido a Curvys</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
 </head>
   
 <body>
    <h1>Menú empleados</h1> 

    <div class="container ">
        <!--Aplicacion-->
    <div class="card border-success mb-3" style="max-width: 30rem;">
    <div class="card-header">Menú empleado </div>
    <div class="card-body">
      
    <?php
      if (!isset($_SESSION['IdEmpleado'])){
        session_start();
      } else {
    
      echo"<div> Bienvenido: ". $_SESSION['nombre'] . " " . $_SESSION['apellido'] . "</div>";
      echo"<div> Email: ".$_SESSION['email']."</div>";
      echo"<div> ID Empleado: ".$_SESSION['IdEmpleado']."</div>";
    }
    ?>
   
       <!--Formulario con botoness -->

    <input type="button" value="Añadir producto" onclick="window.location.href='nproduct_view.php'" class="btn btn-warning enabled">
    <input type="button" value="Eliminar producto" onclick="window.location.href='deleteproduct_view.php'" class="btn btn-warning enabled">
    <input type="button" value="Modificar producto" onclick="window.location.href='modificaproducto_view.php'" class="btn btn-warning enabled">
    </br></br>
    
       <li><a href="../cerrarSesion.php">Cerrar Sesión</a></li>
  </div>  
    
    
     
   </body>
   
</html>