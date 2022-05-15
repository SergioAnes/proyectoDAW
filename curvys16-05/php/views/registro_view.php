<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/registro.css">
  <title>Formulario de registro</title>
</head>
<body>
<form id="formulario" method="post" > 
  <section class="form-register">
    <h4>Regístrate en Curvys</h4>
    <input class="controls" type="text" name="nombre" id="nombre" placeholder="Introduzca su nombre" pattern="^[a-zA-Záéíóúñ][a-zA-Záéíóúñ ªº.]{1,28}[a-zA-Záéíóúñ]$" title=" empieza y termina por letra y en medio puede tener letras, espacio, y los signos “ª”, “º” y el punto. Tiene una longitud mínima de 3 y una longitud máxima de 30." required>
    
    <input class="controls" type="text" name="apellidos1" id="apellidos1" placeholder="Introduzca su primer apellido"  pattern="^[a-zA-Záéíóúñ][a-zA-Záéíóúñ \-]{0,}[a-zA-Záéíóúñ]$" title="Apellidos empieza y termina por letra y en medio puede tener letras, espacio y el guion. El número mínimo de caracteres que va a tener es de 2." required>
    
    <input class="controls" type="text" name="apellidos2" id="apellidos2" placeholder="Introduzca su segundo apellido"  pattern="^[a-zA-Záéíóúñ][a-zA-Záéíóúñ \-]{2,}[a-zA-Záéíóúñ]$" title="Apellidos empieza y termina por letra y en medio puede tener letras, espacio y el guion. El número mínimo de caracteres que va a tener es de 2." required>
    
    <input class="controls" type="text" name="telefono" id="telefono" placeholder="Introduce el teléfono" pattern="(6|7|8|9)[0-9]{8}" title="Debe contener 9 digitos y empezar por 6,7,8 o 9"required>
    
    
    <input class="controls" type="text" name="direccion" id="direccion" placeholder="Introduzca su dirección" pattern="^[a-záéíóúñA-Z]{3}[a-záéíóúñ0-9A-Z -.ºª]{11,26}[a-záéíóúñA-Z0-9]$" title="La dirección de la empresa empieza por tres letras, luego puede tener letras, dígitos, guión, punto y los símbolos º, ª, va a terminar por letra o dígito. Va a tener de 15 a 30 caracteres" required>
    
    <input class="controls" type="password" name="password" id="password" placeholder="Introduzca su contraseña" pattern="^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$"

    title=" La contraseña debe tener al entre 8 y 16 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula." required>
    
    <input class="controls" type="text" name="ciudad" id="ciudad" placeholder="Introduzca su ciudad" pattern="^[a-zA-Záéíóúñ][a-zA-Záéíóúñ ]{2,26}[a-zA-Záéíóúñ]$" title="La ciudad va a empezar y terminar por letra y en medio va a contener letras o espacios. Tiene una longitud mínima de 4 y una longitud máxima de 28 */" required>

    <input class="controls" type="text" name="codigoPostal" id="codigoPostal" placeholder="Introduzca su código postal" pattern="^(?:0[1-9]\d{3}|[1-4]\d{4}|5[0-2]\d{3})$" title="Número entre 01000 y 52999:" required>
    
    <input class="controls" type="text" name="pais" id="pais" placeholder="Introduzca su país" pattern="^[a-zA-Záéíóúñ][a-zA-Záéíóúñ ]{2,26}[a-zA-Záéíóúñ]$" title="El país va a empezar y terminar por letra y en medio va a contener letras o espacios. Tiene una longitud mínima de 4 y una longitud máxima de 28 */" required>
    <p>De acuerdo con <a href="#">Términos y condiciones</a></p>
    
    <input class="botons" type="submit" value="Registrar" name="registrar">

    <label for="resultado" name="resultado" class="errorFormulario"> <?php echo $resultado;?> </label>

  </section>

</form>
</body>
</html>