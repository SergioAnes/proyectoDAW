<?php

require_once("../db/db.php");
include_once("../controllers/nproduct_controller.php");

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../../css/registro.css">
  <title>Formulario de registro</title>
</head>
 <div>
    <a href="../../index.html">
      <img src="../../img/home.png" width="50" />
    </a>
  </div>
<body>
<form id="formulario" method="post" ENCTYPE="multipart/form-data"> 
  <section class="form-register">
    <h4>Registra un producto en Curvys</h4>

    <input class="controls" type="text" name="nombre" id="nombre" placeholder="Introduzca nombre del producto" pattern="^[a-zA-Záéíóúñ][a-zA-Záéíóúñ ]{1,28}[a-zA-Záéíóúñ]$" title=" empieza y termina por letra y en medio puede tener letras, espacio y el punto. Tiene una longitud mínima de 3 y una longitud máxima de 30." required>

    <?php
  if(!isset($_SESSION["IdEmpleado"])){
    session_start();
  }else{
     $IdEmpleado = $_SESSION["IdEmpleado"];
  }
?>

    <label for="linea"> Selecciona linea de producto</label>
    <select name="linea">
      <?php
        foreach($desplegableLista as $registro){
          echo "<option value='".$registro['lineaProducto']."'>".$registro['lineaProducto']."</option>";
        } 
    ?>
  
    <input class="controls" type="text" name="descripcion" id="descripcion" placeholder="Introduzca descripción del producto" pattern="^[a-záéíóúñ0-9A-Z -.ºª]{5,99}[a-záéíóúñA-Z]$" title="La descripción del puede tener letras, dígitos, guión, punto y los símbolos º, ª y va a terminar por letra. Va a tener de 5 a 100 caracteres" required>

    <input class="controls" type="text" name="stock" id="stock" placeholder="Cantidad en stock" pattern="[0-9]{1,8}" title="Debe contener entre 1 y 8 digitos y solo números"required>

    <input class="controls" type="text" name="pventa" id="pventa" placeholder="Precio de venta" pattern="[0-9.]{1,8}" title="Debe contener entre 1 y 8 digitos y solo números o puntos"required>
    
   
    Select image to upload: 
    <input type="file" name="image" required/>
    

    <input class="botons" type="submit" value="Registrar producto" name="registrar">

     <a href="../../index.html"> Volver al menú </a>

    <label for="resultado" name="resultado" class="errorFormulario"> <?php echo $resultado;?> </label>

  </section>



</form>
</body>
</html>
  
    
