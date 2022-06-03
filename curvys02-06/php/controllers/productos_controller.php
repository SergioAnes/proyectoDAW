<?php
	session_start();
	require_once("../models/productos_model.php");

	//recoger la info de la url 
	$linea=$_SERVER['QUERY_STRING'];

	//ir al modelo y hacer la consulta del producto 
	$productos=recogerProductos($linea);
	//Recoger la consulta y pasarselo a la vista para que lo pinte 
	
	$producto=array();
	if(($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['comprar'])) {
		//recojo el código del producto
		$nombreProducto=$_POST['nombreProducto'];
		$codigoProducto=$_POST['codigoProducto'];
		$precioProducto=$_POST['precioCompra'];
		if(isset($_SESSION['cesta'])){
			//Recupero la cesta
			$cestaRecupe=$_SESSION['cesta'];	
			//Si ya tengo otro producto con el mismo codigo 
			if(isset($cestaRecupe[$codigoProducto])){
				//le añado otro producto 
				$cestaRecupe[$codigoProducto]['cantidadProducto']++;
				//vuelvo a guardar en la session la cesta recu
				$_SESSION['cesta']=$cestaRecupe;
				Header('Location:'.$_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING']);
			}else{
				//Existe cesta pero meto un producto nuevo 
				$producto['codigoProducto'] = $codigoProducto;
				$producto['nombreProducto'] = $nombreProducto;
				$producto['precioProducto'] = (float)$precioProducto;
				$producto['cantidadProducto'] =1;
				//a la cesta recuperada con los otros productos
				//Le añado el nuevo producto 
				$cestaRecupe[$codigoProducto] = $producto;
				//Se la paso a la session 
				$_SESSION['cesta']=$cestaRecupe;
				Header('Location:'.$_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING']);
			}
		}else{
			$cesta=array();
			$producto['codigoProducto'] = $codigoProducto;
			$producto['nombreProducto'] = $nombreProducto;
			$producto['precioProducto'] = (float)$precioProducto;
			$producto['cantidadProducto'] = 1;
			$cesta[$codigoProducto]=$producto;
			$_SESSION['cesta']=$cesta;
			Header('Location:'.$_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING']);
			
		}
	} //fin if
		$productosAnyadidos=0;
		if(isset($_SESSION['cesta'])){
			$cesta=$_SESSION['cesta'];
			foreach($cesta as $producto){
				$productosAnyadidos=$productosAnyadidos+$producto['cantidadProducto'];
				
			}
		}
		require_once("../views/productos_view.php");
	
   

?>