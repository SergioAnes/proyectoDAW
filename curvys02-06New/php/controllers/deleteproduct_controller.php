<?php 

//Se incluyen las funciones y las inserciones de la BBDD
include_once("../models/deleteproduct_model.php"); 

//Se incia la sesion
session_start();

//Si alguien se mete en esta página de forma directa sin loguear, regresa al index. 
if(!isset($_SESSION['IdEmpleado'])){
            header("location: ../index.php");
      
}else{
       $IdEmpleado = $_SESSION['IdEmpleado']; //codigo (identificador) del empleado.
      }

//Si hay un usuario logueado, hay que hacer el desplegable. (Recordemos que las funciones es como si estuvieran arriba puestas, porque se hace un include_once al model);
if(!empty($_SESSION['IdEmpleado'])){
      $listaProductos = desplegableProductos();
      $urlImagen="";
      $codigoProducto="";
}
	 if($_POST){

            if (isset($_POST['ver'])) {
            $codigoProducto=$_POST['productos'];
            echo  $codigoProducto;
            $urlImagen = muestraImagen($codigoProducto);
      

            }//fin boton devolver */

            if (isset($_POST['eliminar'])) {
                  $codigoProducto=$_POST['productos'];
                  echo $codigoProducto;
            	//Se actualizan las tablas: 
            	eliminarProductos($codigoProducto);
            	//header("location:deleteproduct_view.php");

	 	}//fin boton devolver */

	 	 if (isset($_POST['volver'])) {
	 	 	header("location:alqwelcome_view.php");
	 	 }

	 }//fin POST 	 	
?>