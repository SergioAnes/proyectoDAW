<?php
echo '<html>';
echo '<head>';
echo '<script src="maria.js"> </script>';
echo '</head>';
echo '<body>';
echo '<form name="formulario" id="formulario" method="post">';
echo '<label for="nombre">Nombre</label>';
echo '<input type="text" name="nombre" id="nombre" pattern="^[a-zA-Z][a-zA-Z ]{2,15}[a-z]$" title="Solo admite letras y espacios"/>';
echo '<input type="submit" value="enviar" />';
echo '</form>';
echo '</body>';
echo '</html>';

$nom=$_POST['nombre'];
var_dump ($_POST);

?>