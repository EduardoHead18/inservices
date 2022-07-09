<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">
  <!-- CSS only -->




  <!--responsive.css-->
  <link rel="stylesheet" href="assets/css/responsive.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style_propio.css">
  <title>Inservices</title>
</head>

<body>
  <!--menu-->
  <!-- ======= Property Search Section ======= -->
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Buscar</h3>
    </div>
    <span class="close-box-collapse right-boxed bi bi-x"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a" method="POST" action="index.php">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label class="pb-2" for="Type">Escriba que desea buscar</label>
              <input type="text" name="busqueda" class="form-control form-control-lg form-control-a" placeholder="buscar...">
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b" name="enviar">Buscar</button>
          </div>
        </div>
      </form>
    </div>
  </div><!-- End Property Search Section -->

  <?php
  require_once("db/conexion.php");
  //buscador 
  if (isset($_POST['enviar'])) {
    $busqueda = $_POST['busqueda'];
    $consulta = mysqli_query($link, "SELECT * FROM productos WHERE nombre LIKE '%$busqueda%' ");

    echo "
    <div class='contenido'>
    <div class='alert alert-info' role='alert'> Productos encontrados</div>
    <div class='row row-cols-1 row-cols-md-3 g-4'>

    ";

    while (($row = mysqli_fetch_array($consulta)) != NULL) {
      $id_pro = $row['id'];
      $varNombre = $row['nombre'];
      $varModelo = $row['modelo'];
      $varDescripcion = $row['descripcion'];
      $varPrecio = $row['precio'];
      $varImagen = $row['imagen'];
      //data:image/jpg;img,echo img_encode($varImagen);

      //estructura de imagenes
      //echo '<img src="data:image/jpg;base64,'.base64_encode($varImagen).'"/>';

      echo "
   <!--contenido-->
       <div class='col'>
         <div class='card h-100'>
           <img src= 'data:image/jpg;base64," . base64_encode($varImagen) . "' class='card-img-top'>
           <div class='card-body'>
             <h5 class='card-title'>$varNombre</h5>
             <p class='card-text'>$varModelo</p>
             <p class='card-text'>$varDescripcion</p>
           </div>
           <div class='card-footer'>
             <small class='text-muted'>$varPrecio</small>
           </div>
         </div>
       </div>
   ";
    }

    echo "
 </div>
 </div>
 ";
  } else {

  }
  ?>

  <!--menu-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.php">Inser<span class="color-b">vices</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link active" href="index.php">Inicio</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="vistas/acercade.html">Acerca de</a>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Otros</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="vistas/contacto.html">Contacto</a>
              <a class="dropdown-item " href="administrador/login.html">Administrador</a>
            </div>
          </li>
        </ul>
      </div>

      <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
        <i class="bi bi-search"></i>
      </button>

    </div>
  </nav>
  <!-- nav-->

  <!--contenido codigo php-->
  <?php
  require_once("db/conexion.php");
  //mostrar datos de la bd

  $result = mysqli_query($link, "SELECT * FROM productos");

  echo "
  <div class='contenido'>
  <div class='row row-cols-1 row-cols-md-3 g-4'>

  ";

  while (($row = mysqli_fetch_array($result)) != NULL) {
    $id_pro = $row['id'];
    $varNombre = $row['nombre'];
    $varModelo = $row['modelo'];
    $varDescripcion = $row['descripcion'];
    $varPrecio = $row['precio'];
    $varImagen = $row['imagen'];
    //data:image/jpg;img,echo img_encode($varImagen);

    //estructura de imagenes
    //echo '<img src="data:image/jpg;base64,'.base64_encode($varImagen).'"/>';
    echo "
    <!--contenido-->
        <div class='col'>
          <div class='card h-100'>
            <img src= 'data:image/jpg;base64," . base64_encode($varImagen) . "' class='card-img-top'>
            <div class='card-body'>
              <h5 class='card-title'>$varNombre</h5>
              <p class='card-text'>$varModelo</p>
              <p class='card-text'>$varDescripcion</p>
            </div>
            <div class='card-footer'>
              <small class='text-muted'>precio: $varPrecio</small>
            </div>
          </div>
        </div>


    ";
  }

  echo "
  </div>
  </div>
  ";

  ?>
  <!-- Footer -->
  <footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-3">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/inservicestux" target= "_blank" role="button"><i class="bi bi-facebook"></i></i></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/INSERVICES13?t=KIFgi616F98jZ0dxuERd8Q&s=09" target= "_blank" role="button"><i class="bi bi-twitter"></i></i></a>

        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://g.page/Inservices?share" target= "_blank" role="button"><i class="bi bi-geo-alt"></i></i></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://instagram.com/inservices_chis?igshid=YmMyMTA2M2Y=" target= "_blank" role="button"><i class="bi bi-instagram"></i></i></a>

        <!-- Whatsapp -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://wa.me/message/GEOWXGOV2QH4D1" target= "_blank" role="button"><i class="bi bi-whatsapp"></i></i></a>

      </section>
      <!-- Section: Social media -->

      <!-- Section: Form -->

      <!-- Section: Text -->
      <section class="mb-4">
      </section>
      <!-- Section: Text -->

      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Contenido</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="index.php" class="text-white">Inicio</a>
              </li>
              <li>
                <a href="vistas/acercade.html" class="text-white">Acerca de</a>
              </li>
              <li>
                <a href="vistas/contacto.html" class="text-white">Contacto</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Contacto</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="https://wa.me/message/GEOWXGOV2QH4D1" target= "_blank" class="text-white">961 113 9816</a>
              </li>
              <li>
                <a href="#!" class="text-white">ingenieria_tgz@inservices.com.mx</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Empresas</h5>

            <img src="assets/imagenes/samsung.png" class="rounded mx-auto d-block" alt="..." style="width: 8rem;">
            <img src="assets/imagenes/lenovo.png" class="rounded mx-auto d-block" alt="..." style="width: 8rem;">
            <img src="assets/imagenes/bop.png" class="rounded mx-auto d-block" style="width: 8rem;">

          
          </div>
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            </br>
            <img src="assets/imagenes/lexmark.png" class="rounded mx-auto d-block" alt="..." style="width: 8rem;">
            <img src="assets/imagenes/hp.png" class="rounded mx-auto d-block" alt="..." style="width: 8rem;">
          </div>
          <!--Grid column-->
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Inservices. Derechos reservados.
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->



  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>