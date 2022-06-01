<?php 


function comprobarLogin($IdEmpleado, $passcode) {
		global $conexion;
	try {
      $query=$conexion->prepare("SELECT IdEmpleado as IdEmpleado, nombre as nombre, apellido as apellido, email as email, password FROM empleados WHERE IdEmpleado=:IdEmpleado AND password=:passcode");
      $query->bindParam(":IdEmpleado", $IdEmpleado); //Esto es simplemente una asociación de variables. Hasta que no se ejecuta, no se hace.
      $query->bindParam(":passcode", $passcode); //Se asocia el password introducido por el usuario a :password.
      $query->execute();
      $usuarioLogin=$query->fetch(PDO::FETCH_ASSOC); //Crea un array indexado: $usuarioLogin[last_name] = daría el usuario (si existe) con la contraseña que le corresponde.

      return ($usuarioLogin["password"]==$passcode)? $usuarioLogin : null; //o devuelve usuarioLogin o null. Si coincide usuario y contraseña, ok. Si no, está mal. 
 
      }
      	catch (PDOException $ex) {
			echo "<p>Ha ocurrido un error al devolver los datos. <span style='color: red; font-weight: bold;'>". $ex->getMessage()."</span></p></br>";
		return null;
	}

} //fin de comprobar login 

function comprobarLoginCliente($IdCliente, $passcode) {
            global $conexion;
      try {
      $query=$conexion->prepare("SELECT IdCliente as IdCliente, nombreCliente as nombre, clienteApellido1 as apellido, password FROM clientes WHERE IdCliente=:IdCliente AND password=:passcode");
      $query->bindParam(":IdCliente", $IdCliente); //Esto es simplemente una asociación de variables. Hasta que no se ejecuta, no se hace.
      $query->bindParam(":passcode", $passcode); //Se asocia el password introducido por el usuario a :password.
      $query->execute();
      $usuarioLogin=$query->fetch(PDO::FETCH_ASSOC); //Crea un array indexado: $usuarioLogin[last_name] = daría el usuario (si existe) con la contraseña que le corresponde.

      return ($usuarioLogin["password"]==$passcode)? $usuarioLogin : null; //o devuelve usuarioLogin o null. Si coincide usuario y contraseña, ok. Si no, está mal. 
 
      }
            catch (PDOException $ex) {
                  echo "<p>Ha ocurrido un error al devolver los datos. <span style='color: red; font-weight: bold;'>". $ex->getMessage()."</span></p></br>";
            return null;
      }

} //fin de comprobar login 




 ?>