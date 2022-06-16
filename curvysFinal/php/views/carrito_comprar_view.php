
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products Page - Curvys</title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
	<link href="../../css/style.css" rel="stylesheet" type="text/css" />
 </head>
   
<body>
<div class="content">
			<div class="login">
			<?php
					if(!isset($_SESSION['IdCliente'])){
		        echo "<a class='opcion-sesion' href='../index.php'>Iniciar Sesión | </a><a class='opcion-sesion' href='../indexRegistro.php'>Registrarse </a>";
		    			} else{
		                    $IdNombre = $_SESSION['nombre'];
                             $IdApellido=$_SESSION['apellido'];
		         echo "<a class='opcion-sesion' href='../views/alqwelcomeClientes_view.php'> Hola $IdNombre $IdApellido | </a><a class='opcion-sesion' href='../indexRegistro.php'>Registrarse </a>";
		   				 }	
				?>
			</div>
	    <div class="logo-marca-carrito">
	      <div class="marca-logo">
					<a href='../../index.php'> <img class="logo"src="../../img/logo.png"> </a>
	        <h1 class="marca">CURVI'S</s></h1>

	      </div>

	      
	    </div>
 <?php
		echo "<table border='1'>";
			echo "<tr>
						<th>Código</th>
						<th>Nombre</th>
						<th>Precio</th>
						<th>Cantidad</th>
						<th>Total</th>
						<th>Eliminar</th>
					
					</tr>";
			$totalProductos = 0;
			foreach($productos as $producto){
			    $totalProducto = $producto['cantidadProducto']*$producto['precioProducto'];
			    $totalProductos = $totalProductos + $totalProducto;
				echo "<tr>
							<td>" . $producto['codigoProducto'] . "</td>
							<td>" . $producto['nombreProducto'] . "</td>
							<td>" . $producto['precioProducto'] . "</td>
							<td>" . $producto['cantidadProducto'] . "</td>
							<td>" . $totalProducto . "</td>
							<td>
								<form method='post' action='".htmlspecialchars($_SERVER["PHP_SELF"])."?".$_SERVER['QUERY_STRING']."'>
							
									<input type='hidden'  name='codigoProducto' value='".$producto['codigoProducto']."'>
									<input type='submit' name='eliminar' value='eliminar'/>
								</form>
							</td>
					</tr>";
				
			}
			
			echo "</table>";
			echo "</br>";
			echo "<div id='centrar'>";
				echo "<div>" . "<label for='resultado' name='resultado' style='color:red;font-size:2em;margin:auto;' width=class='errorFormulario'>" . "$mensajeLogin" . "</div>";
			echo "<h2>El total a pagar es: ".$totalProductos." €</h2>";
			echo"	<form method='post' action='".htmlspecialchars($_SERVER["PHP_SELF"])."?".$_SERVER['QUERY_STRING']."'>
						
						<input type='submit' name='comprar' value='Realizar pago'/>
						<input type='button' value='Seguir comprando' onclick=\"window.location.href='../../index.php'\">
					</form>";
			echo "</div>";	
			
					
?>

</body>

