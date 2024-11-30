<?php

  // Datos de conexión
  $servidor = "localhost";
  $usuario = "root";
  $password = "";
  $bd = "bd_proyectoutd";
  $puerto = 3309; // Cambia al puerto que necesitas

  // Conexión con puerto personalizado
  $conexion = mysqli_connect($servidor, $usuario, $password, $bd, $puerto);

  //Conexion Orientada a Objetos
  //$conexion=new mysqli($servidor,$usuario,$password,$bd);

  //Conexion Procedural
  #$conexion=mysqli_connect($servidor,$usuario,$password,$bd);
  
  if ($conexion)
    echo "Se conecto exitosamente ok a la BD";
  
?>