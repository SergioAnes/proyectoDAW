<?php
	session_start();
	require_once("../models/carrito_comprar_model.php");
		//Si tengo info en el post
		if(!empty($_POST)){
            $mensajeLogin="";
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
				$_SESSION['cantidad']=count($_SESSION['cesta']);

			}
		    if(!empty($infoPost['comprar'])&& !isset($_SESSION['IdCliente'])){
                 $mensajeLogin="Haz loggin o regístrate para poder comprar";
            }
			if(!empty($infoPost['comprar'])&&isset($_SESSION['IdCliente'])){

				//Recupero los datos de la sesion y del carrito
				$cesta=$_SESSION['cesta'];
				if(!empty($cesta)){
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
				

					//Pasarela de pago

					$concept = 'Pedido_'.$ultimoPedido++.'IdCliente_'.$idCliente;
					$order = date('ymdHis');
					?>

					<div class="loading">Un momento, por favor</div>

					<form id="realizarPago" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
						<input name="cmd" type="hidden" value="_cart" />
						<input name="upload" type="hidden" value="1" />
						<input name="business" type="hidden" value="mpj872@gmail.com" />
						<input name="shopping_url" type="hidden" value="https://curvys2022.000webhostapp.com/" />
						<input name="currency_code" type="hidden" value="EUR" />
						<input name="return" type="hidden" value="https://curvys2022.000webhostapp.com/php/views/pagoCorrecto_views.php" />
						<input name="notify_url" type="hidden" value="https://curvys2022.000webhostapp.com/php/controllers/carrito_comprar_controller.php" />

						<input name="rm" type="hidden" value="2" />
						<input name="item_number_1" type="hidden" value="<?php echo $order; ?>" />
						<input name="item_name_1" type="hidden" value="<?php echo $concept; ?>" />
						<input name="amount_1" type="hidden" value="<?php echo $precioCompraTotal; ?>" />
						<input name="quantity_1" type="hidden" value="1" />

					</form>
					<script>
						document.getElementById('realizarPago').submit();
					</script>
					<?php

				
				}else{
					echo 'cesta vacia compra para continuar' ;
				}

			}
			if(!empty($infoPost['checkNumberSubmit'])){
			    $checknumber = $infoPost['checkNumber'];
			    $cesta = $_SESSION['cesta'];
			    $idCliente = $_SESSION['IdCliente'];
		    	$precioCompraTotal = 0;
				foreach($cesta as $producto){
					$cantidad = $producto['cantidadProducto'];
					$precioUnidad = $producto['precioProducto'];
					$precioTotal = $cantidad * $precioUnidad;
					$precioCompraTotal = $precioCompraTotal + $precioTotal;
				}
			    generarPago($idCliente,$precioCompraTotal,$checknumber);
			    $_SESSION['cesta'] = array();
				header("Refresh:0");
			}
		
		}
		if (isset($_SESSION['cesta'])){
			$productos=$_SESSION['cesta'];
			
			require_once("../views/carrito_comprar_view.php");
		}else{
		    header("location: ../views/carrito-vacio_view.php");
		}




?>
