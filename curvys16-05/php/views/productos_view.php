
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
				<a class="opcion-sesion" href="../../../php/index.php">Iniciar sesión | </a><a class="opcion-sesion" href="">Registrarse </a>
			</div>
	    <div class="logo-marca-carrito">
	      <div class="marca-logo">
					<img class="logo"src="../../../img/logo.png">
	        <h1 class="marca">CURVI'S</s></h1>

	      </div>

	      <div class="content-carrito">
	          <a href="../../../php/index.php"><img class="carrito"src="../../../img/carrito.png"></a>
						<span class="count"><?php echo $productosAnyadidos;?></span>
	      </div>
	    </div>
 <?php
		echo "<table border='1'>";
			echo "<tr>
						<th>Código</th>
						<th>Nombre</th>
						<th>linea</th>
						<th>descripción</th>
						<th>cantidad</th>
						<th>Precio</th>
						<th>Imagen</th>
						<th>Comprar</th>
					</tr>";
			foreach($productos as $producto){
				echo "<tr>
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
									<input type='hidden'  name='precioCompra' value='".$producto['precioCompra']."'>
									<input type='submit' name='comprar' value='añadir carrito'/>
								</form>
							</td>
					</tr>";
				
			}
			echo "</table>";
?>

</body>

