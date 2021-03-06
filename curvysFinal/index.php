<?php
session_start();
 require_once("./php/models/cantidadProductosCesta_model.php");
 $productoAnyadidos = cantidadCesta();
 
 
?>


<html lang="es">
	<head>
		<title>Curvi's</title>
		<meta charset="utf-8" />
		<meta name="author" content="Maria Perez Jimenez" />
		<link href="./css/style.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript">

		</script>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<style type="text/css">

		</style>
	</head>
	<body>
		<div class="content">
			<div class="login">
				<?php
					if(!isset($_SESSION['IdCliente'])){
		        echo "<a class='opcion-sesion' href='./php/index.php'>Iniciar Sesion | </a><a class='opcion-sesion' href='./php/indexRegistro.php'>Registrarse </a>";
		    			} else{
		    			     $IdNombre = $_SESSION['nombre'];
                             $IdApellido=$_SESSION['apellido'];
		         echo "<a class='opcion-sesion' href='php/views/alqwelcomeClientes_view.php'> Hola $IdNombre $IdApellido | </a><a class='opcion-sesion' href='./php/indexRegistro.php'>Registrarse </a>";
		   				 }	
				?>
				
			</div>
	    <div class="logo-marca-carrito">
	      <div class="marca-logo">
					<img class="logo"src="img/logo.png">
	        <h1 class="marca">CURVI'S</s></h1>

	      </div>
            
	      <div class="content-carrito">
	           <a class ='enlace' href="../../../php/controllers/carrito_comprar_controller.php">
	          <img class="carrito"src="img/carrito.png">
			  <span class="count"><?php echo $productoAnyadidos;?></span>
	      </div>
	    </div>
			<div class="main">
				<div class="main-left">
					<div class="menu">
						<a href="./php/controllers/productos_controller.php/?vaqueros" class="menu-item">Vaqueros</a>
						<a href="./php/controllers/productos_controller.php/?pantalones" class="menu-item">Pantalones</a>
						<a href="./php/controllers/productos_controller.php/?punto" class="menu-item">Punto</a>
						<a href="./php/controllers/productos_controller.php/?cazadoras" class="menu-item">Cazadoras</a>
						<a href="./php/controllers/productos_controller.php/?sobrecamisas" class="menu-item">Sobrecamisa</a>
						<a href="./php/controllers/productos_controller.php/?abrigo" class="menu-item">Abrigos</a>
						<a href="./php/controllers/productos_controller.php/?camisetas" class="menu-item">Camisetas</a>
						<a href="./php/controllers/productos_controller.php/?camisas" class="menu-item">Camisas</a>
						<a href="./php/controllers/productos_controller.php/?vestidos" class="menu-item">Vestidos</a>
						<a href="./php/controllers/productos_controller.php/?faldas" class="menu-item">Faldas</a>
						<a href="./php/controllers/productos_controller.php/?complementos" class="menu-item">Complementos</a>
						<a href="./php/controllers/productos_controller.php/?zapatos" class="menu-item">Zapatos</a>

					</div>
				</div>
				<div class="main-right">

					<div class="carousel slide carousel-fade" id="caraca" data-bs-ride="carousel" ><!--Le a??ado fade y cambia el tipo de transici??n-->
						<div class="carousel-indicators">
							<input type="button" data-bs-target="#caraca" data-bs-slide-to="0" class="active" area-current="true" area-label="slide 0">
							<input type="button" data-bs-target="#caraca" data-bs-slide-to="1" class="active" area-current="true" area-label="slide 1">
							<input type="button" data-bs-target="#caraca" data-bs-slide-to="2" class="active" area-current="true" area-label="slide 2">
						</div>
						<div class="carousel-inner">
							<div class="carousel-item active" data-bs-interval="3000">
								<img src="./img/carousel-9.jpg" class="d-block w-100">

							</div>
							<div class="carousel-item"  data-bs-interval="3000">
								<img src="./img/carousel-8.jpg" class="d-block w-100">

							</div>
							<div class="carousel-item"  data-bs-interval="3000">
								<img src="./img/carousel-6.jpg" class="d-block w-100">

							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</body>
</html>
