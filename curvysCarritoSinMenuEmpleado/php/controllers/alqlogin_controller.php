<?php

require_once("models/alqlogin_model.php");

session_start();

	if(isset($_SESSION['IdEmpleado'])){
		session_unset();
		session_destroy();
	}

	if(isset($_SESSION['IdCliente'])){
		session_unset();
		session_destroy();
	}

	if (isset($_POST) && !empty($_POST)) {

		if (isset($_POST['IdEmpleado']) && isset($_POST['passcode'])) {
		
		$IdEmpleado= ($_POST['IdEmpleado']);
        $passcode= ($_POST['passcode']);
		
		$consulta = comprobarLogin($IdEmpleado, $passcode); //se hace una consulta. El inicio de sesion es correcto o no. Y se crea todo. 

		if($consulta != null){ //Si la consulta no devuelve null, entonces asigna variables y se va al inicio de empleados.
		
		    $usuario['IdEmpleado'] = $consulta["IdEmpleado"];	
            $usuario['nombre'] = $consulta["nombre"];
            $usuario['apellido'] = $consulta['apellido'];
            $usuario['email'] = $consulta['email'];
		    $_SESSION['loginEmpleado']=$usuario;
            header("location: views/alqwelcome_view.php");
          } else { //Si no es una cosa o la otra es porque la contraseña es incorrecta 
			  echo "Usuario o password incorrectos";
		}

	} else {

		$IdCliente= ($_POST['IdCliente']);
        $passcode= ($_POST['passcode']);
		
		$consulta = comprobarLoginCliente($IdCliente, $passcode); //se hace una consulta. El inicio de sesion es correcto o no. Y se crea todo. 

		if($consulta != null){ //Si la consulta no devuelve null, entonces asigna variables y se va al inicio de empleados.
          
		    $usuario['IdCliente'] = $consulta["IdCliente"];	
            $usuario['nombre'] = $consulta["nombre"];
            $usuario['apellido'] = $consulta['apellido'];
			$_SESSION['login']=$usuario;
            header("location: views/alqwelcomeClientes_view.php");
          } else { //Si no es una cosa o la otra es porque la contraseña es incorrecta 
			  echo "Usuario o password incorrectos";
		}
	 }	

	} //fin if
	
    require_once("views/alqlogin_view.php");
?>