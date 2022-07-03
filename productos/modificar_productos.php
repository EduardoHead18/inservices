<?php
require_once("../db/conexion.php");
$id_pro = $_POST['id'];
$varNombre = $_POST['nombre'];
$varModelo = $_POST['modelo'];
$varDescripcion = $_POST['descripcion'];
$varPrecio = $_POST['precio'];
$varImagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
//$varImagen = $_POST['imagen'];




  mysqli_query($link,"UPDATE productos set nombre='$varNombre', modelo='$varModelo', descripcion='$varDescripcion',
              precio='$varPrecio', imagen='$varImagen' WHERE id ='$id_pro'"); 
echo "
                <script language='JavaScript'>
                alert('Datos Modificados...');
                document.location='consultas.php';
                </script>";
?>