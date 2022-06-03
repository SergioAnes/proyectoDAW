<?php
	session_start();
	require_once("../models/carrito_comprar_model.php");
		//Si tengo info en el post
		var_dump($_SESSION);
		if(!empty($_POST)){
			
			//recojo la info 
			$infoPost=$_POST;
			//compruebo que la info es la que yo necesito
			if(!empty ($infoPost['eliminar'])){
				//Recupero el código del producto que quiero eliminar
				$codigoProdEliminar=$infoPost['codigoProducto'];
				//Recupero la cesta 
				$cestaRecu = $_SESSION['cesta'];
				unset($cestaRecu[$codigoProdEliminar]);
				//Vuelvo a settear la cesta 
				$_SESSION['cesta'] = $cestaRecu;
				
			}
			
			if(!empty($infoPost['comprar'])&&isset($_SESSION['IdCliente'])){
				
				//Recupero los datos de la sesion y del carrito 
				$cesta=$_SESSION['cesta'];
			
				$precioCompraTotal = 0;
				foreach($cesta as $producto){
					$cantidad = $producto['cantidadProducto'];
					$precioUnidad = $producto['precioProducto'];
					$precioTotal = $cantidad * $precioUnidad;
					$precioCompraTotal = $precioCompraTotal + $precioTotal;
					$idProducto = $producto[ 'codigoProducto'];
					eliminarCantidadStock($idProducto,$cantidad);
			
				}
				
				$idCliente =  $_SESSION['IdCliente'];
				generarPedido($precioCompraTotal, $idCliente);	
				$ultimoPedido = ultimoPedido();
				generarDetallesPedido($cesta, $ultimoPedido);
				$_SESSION['cesta'] = array();
				header("Refresh:0");
				
			
			}else{
				echo 'registrese para continuar';
			}
		}
		if (isset($_SESSION['cesta'])){
			$productos=$_SESSION['cesta'];
			require_once("../views/carrito_comprar_view.php");
		}else{
			echo 'cesta vacia';
		}
		
	
   

?>