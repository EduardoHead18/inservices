<?php

require_once ("../db/conexion.php");

$nombre = $_POST['nombre'];
$modelo = $_POST['modelo'];
$descripcion= $_POST['descripcion'];
$precio = $_POST['precio'];
$imagen = $_POST['imagen'];

  mysqli_query($link, "INSERT INTO productos(nombre, modelo, descripcion, precio, imagen) VALUES ('$nombre', '$modelo', '$descripcion','$precio', '$imagen' )");
  echo "
   ?>
 
<script>
    if(confirm(\"¿Desea realizar un nuevo registro?\")){
                window.location.href='registrar.php';
                }else{
                window.location.href='../paginas/productos.html';
                }
 </script>";
