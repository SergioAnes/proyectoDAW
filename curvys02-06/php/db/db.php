<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "curvys";

  try {
    $conexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  catch(PDOException $e)
  {
    echo "Error: " . $e->getMessage();
  }
?>
