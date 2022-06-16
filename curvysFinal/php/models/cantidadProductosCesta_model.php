<?php 
function cantidadCesta(){
	
		$productosAnyadidos=0;
		if(isset($_SESSION['cesta'])){
			$cesta=$_SESSION['cesta'];
			foreach($cesta as $producto){
				$productosAnyadidos=$productosAnyadidos+$producto['cantidadProducto'];
			

			}
		}
		return $productosAnyadidos;
}

 ?>