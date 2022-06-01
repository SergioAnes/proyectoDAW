<?php
	session_start();
	require_once("../models/carrito_comprar_model.php");
		//Si tengo info en el post
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
			if(!empty($infoPost['comprar'])){
				
			}
		}

		$productos=$_SESSION['cesta'];
		require_once("../views/carrito_comprar_view.php");
	
   

?>