<?php

require_once("models/alqlogin_model.php");

session_start();
    
    /*
	if(isset($_SESSION['IdEmpleado'])){
		session_unset();
		session_destroy();
	}

	if(isset($_SESSION['IdCliente'])){
		session_unset();
		session_destroy();
	}*/
	
	
	$resultado1="";
	$resultado2="";


	if (isset($_POST) && !empty($_POST)) {

		if (isset($_POST['IdEmpleado']) && isset($_POST['passcode'])) {
		
		$IdEmpleado= ($_POST['IdEmpleado']);
        $passcode= ($_POST['passcode']);
		
		$consulta = comprobarLogin($IdEmpleado, $passcode); //se hace una consulta. El inicio de sesion es correcto o no. Y se crea todo. 

		if($consulta != null){ //Si la consulta no devuelve null, entonces asigna variables y se va al inicio de empleados.
		
		    $_SESSION['IdEmpleado'] = $consulta["IdEmpleado"];	
            $_SESSION['nombre'] = $consulta["nombre"];
            $_SESSION['apellido'] = $consulta['apellido'];
            $_SESSION['email'] = $consulta['email'];
		  
            header("location: views/alqwelcome_view.php");
          } else { //Si no es una cosa o la otra es porque la contraseña es incorrecta 
			   $resultado1 = "Usuario o password incorrectos";
		}

	} else {

		$IdCliente= ($_POST['IdCliente']);
        $passcode= ($_POST['passcode']);
		
		$consulta = comprobarLoginCliente($IdCliente, $passcode); //se hace una consulta. El inicio de sesion es correcto o no. Y se crea todo. 

		if($consulta != null){ //Si la consulta no devuelve null, entonces asigna variables y se va al inicio de empleados.
          
		    $_SESSION['IdCliente'] = $consulta["IdCliente"];	
            $_SESSION['nombre'] = $consulta["nombre"];
            $_SESSION['apellido'] = $consulta['apellido'];
				
            header("location: views/alqwelcomeClientes_view.php");
          } else { //Si no es una cosa o la otra es porque la contraseña es incorrecta 
			   $resultado2 = "Usuario o password incorrectos";
		}
	 }	

	} //fin if
	
    require_once("views/alqlogin_view.php");
?>