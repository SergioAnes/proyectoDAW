<?php

require_once("../models/nproduct_model.php");

//Se incia la sesion
session_start();

/*
//Si alguien se mete en esta página de forma directa sin loguear, regresa al index. 
if(!isset($_SESSION['IdCliente'])){
        header("location: ../index.php");
    
}else{
        $IdCliente = $_SESSION['IdCliente']; 
    }*/


    $desplegableLista = desplegableLista();
   

$resultado = ""; //variable inicialmente vacía para que no salte ningún error antes de entrar al formulario. 

	if (isset($_POST['registrar'])) {

        $nombre= ($_POST['nombre']);
        $linea= ($_POST['linea']);
        $descripcion= ($_POST['descripcion']);
        $stock= ($_POST['stock']);
        $pventa= ($_POST['pventa']);
       
        //Se podría copiar aquí el código de rebolleda para que la imagen seleccionada en origen se copie a la carpeta de destino. y de ahí se rescata el nombre de esa imagen, se concatena, 
        $image = $_FILES['image']['name'];
        $imgURL = "http://localhost/curvys19-05/img/" . "$image";
        $destino = 'C:/wamp64/www/curvys19-05/img/';
        
            if (copy ($_FILES['image']['tmp_name'], $destino . $_FILES['image']['name'])) {
                echo "<h2>Se ha transferido el image ". $_FILES['image']['name']. "</h2>";
            }
            else{
                echo "<h2>No ha podido transferirse el fichero</h2>";
        }

        insertarProductos($nombre,$linea,$descripcion,$stock,$pventa,$imgURL);
       

	} //fin if registrar
        


?>