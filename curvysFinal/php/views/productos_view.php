
<?php
session_start();
?>

<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products Page - Curvys</title>
    <link rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css">
	<link href="../../../css/style.css" rel="stylesheet" type="text/css" />
 </head>
   
<body>
<div class="content">
			<div class="login">
				<?php
					if(!isset($_SESSION['IdCliente'])){
		        echo "<a class='opcion-sesion' href='../../index.php'>Iniciar Sesion | </a><a class='opcion-sesion' href='../../indexRegistro.php'>Registrarse </a>";
		    			} else{
		    			     $IdNombre = $_SESSION['nombre'];
                             $IdApellido=$_SESSION['apellido'];
		         echo "<a class='opcion-sesion' href='../../views/alqwelcomeClientes_view.php'>Hola $IdNombre $IdApellido | </a><a class='opcion-sesion' href='../../indexRegistro.php'>Registrarse </a>";
		   				 }	
				?>
			</div>
	    <div class="logo-marca-carrito">
	      <div class="marca-logo">
					<a href='../../../index.php'> <img class="logo" src="../../../img/logo.png"></a>
	        <h1 class="marca">CURVI'S</s></h1>

	      </div>

	      <div class="content-carrito">
	          <a href="../../../php/controllers/carrito_comprar_controller.php"><img class="carrito"src="../../../img/carrito.png"></a>
						<span class="count"><?php echo $productosAnyadidos;?></span>
	      </div>
	    </div>
 <?php
		echo "<table> <thead>";
			echo "<tr>
						<th>Código</th>
						<th>Nombre</th>
						<th>Línea</th>
						<th>Descripción</th>
						<th>Cantidad</th>
						<th>Precio</th>
						<th>Imagen</th>
						<th>Comprar</th>
					</tr> </thead>";
			foreach($productos as $producto){
				 $cantidadStock = cantidadStock ($producto['codigoProducto']);
				
				echo "<tbody> <tr>
							<td>" . $producto['codigoProducto'] . "</td>
							<td>" . $producto['nombreProducto'] . "</td>
							<td>" . $producto['lineaProducto'] . "</td>
							<td>" . $producto['descripcionProducto'] . "</td>
							<td>" . $producto['cantidadStock'] . "</td>
							<td>" . $producto['precioCompra'] . "</td>
							<td> <img class='imagenProducto' src='".$producto['img']."'></img></td>
							<td>
								<form method='post' action='".htmlspecialchars($_SERVER["PHP_SELF"])."?".$_SERVER['QUERY_STRING']."'>
									<input type='hidden'  name='nombreProducto' value='".$producto['nombreProducto']."'>
									<input type='hidden'  name='codigoProducto' value='".$producto['codigoProducto']."'>
									<input type='hidden'  name='precioCompra' value='".$producto['precioCompra']."'>";
									if($cantidadStock>0){
										echo "<input type='submit' name='comprar' value='añadir carrito'/>";
									}else{
										echo "<h2>No disponible en stock</h2>";
									}
									
							echo "</form>
							</td>
					</tr> </tbody>";
				
			}
			echo "</table>";
?>

</body>

