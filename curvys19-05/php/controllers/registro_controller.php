<?php

require_once("models/registro_model.php");

$resultado = ""; //variable inicialmente vacía para que no salte ningún error antes de entrar al formulario. 

if($_POST) {

		$nombre= ($_POST['nombre']);
        $apellidos1= ($_POST['apellidos1']);
        $apellidos2= ($_POST['apellidos2']);
        $telefono= ($_POST['telefono']);
        $direccion= ($_POST['direccion']);
        $password= ($_POST['password']);
        $ciudad= ($_POST['ciudad']);
        $codigoPostal= ($_POST['codigoPostal']);
        $pais= ($_POST['pais']);

	if (isset($_POST['registrar'])) {
		$correcto=0;
    //Revisar que los campos no se repitan
     $noRepite = validarNoRepite($nombre,$telefono); //Si no se repite, la variable es true. 

     if ($noRepite) { //Si no se repite se pueden hacer las inserciones
     	//generar un ID.
     	$nuevaID=generarNuevaId();
     	//Se hacen las inserciones
     	insertarClientes($nuevaID,$nombre,$apellidos1,$apellidos2,$telefono,$direccion,$password,$ciudad,$codigoPostal,$pais);
     	$correcto=1;
     }//fin if no repite
     if ($correcto) { //Si todo ha salido bien, que saque un mensaje.
     	 $resultado = "Registro completado. Será redireccionado a la página principal";
     	 header("Refresh:5; url=../index.html", true, 403); //Se va a la págian inicial con un retraso de 3 segundos. 
     	} else {
     		$resultado = "El usuario o el teléfono ya existen";
    	 }
	} //fin if registrar
}//fin POST inicial 

require_once("views/registro_view.html");

?>