<?php

require_once ("../db/conexion.php");

$varNombre = $_POST['nombreProducto'];
$varModelo = $_POST['modeloProducto'];
$varDescripcion= $_POST['descripcionProducto'];
$varPrecio = $_POST['precioProducto'];
$varImagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

  mysqli_query($link, "INSERT INTO productos(nombre, modelo, descripcion, precio, imagen) VALUES ('$varNombre', '$varModelo', '$varDescripcion','$varPrecio', '$varImagen' )");
  echo "
?>
 
<script>
    if(confirm(\"¿Desea realizar un nuevo registro?\")){
                window.location.href='formRegistrar.php';
                }else{
                window.location.href='../paginas/productos.html';
                }
 </script>";
