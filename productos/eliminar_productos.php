<?php
require_once("../db/conexion.php");
$opcion = $_GET['opcion'];

    
    $result=mysqli_query($link,"DELETE from productos where id='$opcion'");
    if(mysqli_affected_rows($link)!=0)
    {
      echo "<script language='JavaScript'>
      alert('Registro eliminado...');
      document.location='consultas.php';
      </script>";
    }
?>
