<?php
require_once("../db/conexion.php");
$id_pro = $row['id'];
$varNombre = $row['nombre'];
$varModelo = $row['modelo'];
$varDescripcion = $row['descripcion'];
$varPrecio = $row['precio'];
$varImagen = $row['imagen'];




  mysqli_query($link,"UPDATE productos set nombre='$varNombre', modelo='$varModelo', descripcion='$varDescripcion'
                precio='$varPrecio', imagen='$varImagen' where id='$id_pro'"); 
echo "
                <script language='JavaScript'>
                alert('Datos Modificados...');
                document.location='clientes.php';
                </script>";
?>