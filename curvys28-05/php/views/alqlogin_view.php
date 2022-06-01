<html>
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page - Curvys</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link href="../css/style_loggin.css" rel="stylesheet" type="text/css" />
 </head>
   
<body>
 
	<div>
	  <a href="../index.html">
		<img src="../img/home.png"/>
	  </a>
	  <h1>Curvys, tu tienda de ropa</h1>
	</div>
    <div class="container ">
        <!--Aplicacion-->
    <div class="card border-success mb-3" style="max-width: 30rem;">
    <div class="card-header">¿Eres empleado? Loguéate!</div>
    <div class="card-body">
    
    <form id="" name="" action="" method="post" class="card-body">
    
    <div class="form-group">
      Email <input type="text" name="IdEmpleado" placeholder="IdEmpleado" class="form-control">
        </div>
    <div class="form-group">
      Clave <input type="password" name="passcode" placeholder="passcode" class="form-control">
        </div>        
        
        <label for="resultado" name="resultado" style="color:red" class="errorFormulario"> <?php echo $resultado1;?> </label>
        <br>

    <input type="submit" name="submit" value="Login" >
        </form>
    
      </div>
    </div>
    </div>
    </div>


    <div class="container ">
        <!--Aplicacion-->
    <div class="card border-success mb-3" style="max-width: 30rem;">
    <div class="card-header">¿Eres cliente? Loguéate!</div>
    <div class="card-body">
    
    <form id="" name="" action="" method="post" class="card-body">
    
    <div class="form-group">
      Email <input type="text" name="IdCliente" placeholder="IdCliente" class="form-control">
        </div>
    <div class="form-group">
      Clave <input type="password" name="passcode" placeholder="passcode" class="form-control">
        </div>        

         <label for="resultado" name="resultado" style="color:red" class="errorFormulario"> <?php echo $resultado2;?> </label>
          <br>
        
    <input type="submit" name="submit" value="Login" >
        </form>
    
      </div>
    </div>
    </div>
    </div>


</body>