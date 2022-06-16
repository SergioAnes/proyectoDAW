<?php

  $servername = "localhost";
  $username = "id18972540_id18972541_root";
  $password = "Proyectocurvys2022!";
  $dbname = "id18972540_id18972541_curvys";

  try {
    $conexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  catch(PDOException $e)
  {
    echo "Error: " . $e->getMessage();
  }
?>
