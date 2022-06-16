<?php
//Siempre hay que llamar a las funciones de conexión y al controlador, que es el que media entre todos. 
require_once("../db/db.php");
include_once("../controllers/deleteproduct_controller.php");


	if(!isset($_SESSION["IdEmpleado"])){
		header("location: ../index.php");
	}else{
		 $IdEmpleado = $_SESSION["IdEmpleado"];	
	}

//Estamos en vista, así que hay que poner todo el html:
?>
<!DOCTYPE html>
<html lang="ES">

<head>
     <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Elimina productos</title>
       <link rel="stylesheet" href="../../css/registro.css">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
 </head>
   
 <body>
    <h1>Área empleados</h1> 
    <div class="container ">
        <!--Aplicacion-->
    <div class="card border-success mb-3" style="max-width: 30rem;">
    <div class="card-header">Elimina productos </div>
    <div class="card-body">
    <form action="" method="post">
      <?php
      if (!isset($_SESSION['IdEmpleado'])){
        session_start();
      } else {
    
      echo"<div> Bienvenido: ". $_SESSION['nombre'] . " " . $_SESSION['apellido'] . "</div>";
      echo"<div> Email: ".$_SESSION['email']."</div>";
      echo"<div> ID Empleado: ".$_SESSION['IdEmpleado']."</div>";
    }
    ?>
		<label for="productos">Selecciona producto a eliminar: </label>
		<select name="productos">
			<?php
			  
				foreach($listaProductos as $registro){
				    if($codigoProducto === $registro['codigoProducto']){
				        
				        echo "<option selected value='".$registro['codigoProducto']."'>".$registro['codigoProducto']."</option>";
				    }else{
				        echo "<option value='".$registro['codigoProducto']."'>".$registro['codigoProducto']."</option>";
				    }
					
				}	
			?>
		</select><br><br>

       <?php 
         if($urlImagen) {
        ?>
         <img width=200 src="<?php echo $urlImagen;?>">

      <?php 
        } 
         echo $nombreProducto;
       ?>
         

		<BR> <BR><BR><BR><BR><BR>
		     <label for="resultado" name="resultado" style="color:red" class="errorFormulario"> <?php echo $mensajeEliminado;?> </label>
		<div>
			<input type="submit" value="Eliminar producto" name="eliminar" class="btn btn-warning enabled">
      <input type="submit" value="Ver imagen" name="ver" class="btn btn-warning enabled">
			<a href="alqwelcome_view.php"> <input type="submit" value="Volver" name="volver" class="btn btn-warning enabled"> </a>
		</div>		
	</form>	
		<br><br>
	  <li><a href="../cerrarSesion.php">Cerrar Sesión</a></li>
</body>
</html>
