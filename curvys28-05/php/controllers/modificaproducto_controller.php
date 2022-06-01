<?php

require_once("../models/modificaproducto_model.php");

//Se incia la sesion
session_start();


//Si alguien se mete en esta página de forma directa sin loguear, regresa al index. 
if(!isset($_SESSION['IdEmpleado'])){
        header("location: ../index.php");
    
}else{
        $IdEmpleado = $_SESSION['IdEmpleado']; 
    }

$resultado = ""; //variable inicialmente vacía para que no salte ningún error antes de entrar al formulario. 

	if (isset($_POST['modificar'])) {

        $codigoProducto= ($_POST['codigoProducto']);

        if ($_POST['nombre'] !="") {
            $nombre= $_POST['nombre'];
        }else {
            $nombre=obtenerNombre($codigoProducto);
        }

        if ($_POST['descripcion']!="") {
            $descripcion= $_POST['descripcion'];
        }else {
            $descripcion=obtenerDescripcion($codigoProducto);
        }

        if ($_POST['stock']!="") {
            $stock= $_POST['stock'];
        }else {
            $stock=obtenerStock($codigoProducto);
        }

        if ($_POST['pventa']!="") {
            $pventa= $_POST['pventa'];
        }else {
            $pventa=obtenerPventa($codigoProducto);
        }

    
        /*if ($_POST['image']!="") {
        $image = $_FILES['image']['name'];
        $imgURL = "http://localhost/curvys19-05/img/" . "$image";
        $destino = 'C:/wamp64/www/curvys19-05/img/';
        
            if (copy ($_FILES['image']['tmp_name'], $destino . $_FILES['image']['name'])) {
                echo "<h2>Se ha transferido la imagen ". $_FILES['image']['name']. "</h2>";
            }
            else{
                echo "<h2>No ha podido transferirse el fichero</h2>";
            }

        }else {
            $imgURL=obtenerImagen($codigoProducto);
        }*/

       //REVISAR EL TEMA DE LA IMAGEN. CÓMO SABER SI HAY O NO ALGO SELECCIONADO EN UN <input type="file";

        if ($_FILES['image']['name'] != null) {
            $image = $_FILES['image']['name'];
            $imgURL = "http://localhost/curvys19-05/img/" . "$image";
            $destino = 'C:/wamp64/www/curvys19-05/img/';
        
            if (copy ($_FILES['image']['tmp_name'], $destino . $_FILES['image']['name'])) {
                echo "<h2>Se ha transferido la imagen ". $_FILES['image']['name']. "</h2>";
            }
                else{
                    echo "<h2>No ha podido transferirse el fichero</h2>";
                }

            }else{
                $imgURL=obtenerImagen($codigoProducto);
            }
       
        modificarProductos($codigoProducto,$nombre,$descripcion,$stock,$pventa,$imgURL);
        $resultado = "producto modificado";
       

	} //fin if registrar
        


?>