<?php
include('../db/conexion.php');
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;


$link = mysqli_connect("localhost", "root", "", "inservices");

$consulta = "SELECT*FROM login where usuario='$usuario' and contraseña='$contraseña'";
$resultado = mysqli_query($link, $consulta);

$data = mysqli_num_rows($resultado);

if ($data) {

  header("location:../productos/formRegistrar.php");
} else {
?>
  <?php
  include("../administrador/login.html");
  ?>
  <script>
    const div = document.querySelector(".msgError");
    div.textContent="¡Error! revisa el usuario o contraseña";
  </script>
<?php
}
mysqli_free_result($resultado);
mysqli_close($link);
