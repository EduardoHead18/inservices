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

  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">


  <!-- Style -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- CSS only -->




  <!--responsive.css-->
  <link rel="stylesheet" href="assets/css/responsive.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/style_propio.css">
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
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label class="pb-2" for="Type">Escriba que desea buscar</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="buscar...">
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Buscar</button>
          </div>
        </div>
      </form>
    </div>
  </div><!-- End Property Search Section -->


  <!--menu-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" >Inser<span class="color-b">vices</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link " href="../index.php">Inicio</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="administrador/login.html">Registrar</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="consultas.php">Consultar</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="blog-grid.html">Blog</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="property-single.html">Property Single</a>
              <a class="dropdown-item " href="blog-single.html">Blog Single</a>
              <a class="dropdown-item " href="agents-grid.html">Agents Grid</a>
              <a class="dropdown-item " href="agent-single.html">Agent Single</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="contact.html">Contact</a>
          </li>
        </ul>
      </div>

      <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
        <i class="bi bi-search"></i>
      </button>

    </div>
  </nav>
  <!-- nav-->

  <!--contenido-->
  <div class="contenido">
    <div class="formRegistro">
      <!--Titulos-->
      <!--
      <div class="space">
      </div>-->

      <!--Formularios para registrar-->

      <form action="altas.php" method="post" id="altaProductos" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleFormControlInput1">Nombre</label>
          <input type="text" class="form-control" required name="nombreProducto" id="nombreProducto" placeholder="Escriba el nombre del producto...">
        </div>
        <br>
        <div class="form-group">
          <label for="exampleFormControlInput1">Modelo</label>
          <input type="text" class="form-control" required name="modeloProducto" id="modeloProducto" placeholder="Escriba el modelo del producto...">
          <br>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Descripcion</label>
            <textarea class="form-control" required name="descripcionProducto" id="descripcionProducto" rows="3"></textarea>
          </div>
          <br>
          <div class="form-group">
            <label for="exampleFormControlInput1">Precio</label>
            <input type="number" class="form-control" required name="precioProducto" id="precioProducto" placeholder="Escriba el precio del producto...">
            <br>
          </div>
          <br>
          <label for="exampleFormControlInput1">Seleccionar imagen</label>
          <br><br>
          <form>
            <div class="form-group">
              <input type="file" class="form-control-file" id="imagen" required name="imagen">
            </div>
          </form>

          <div class="msgError"></div>
          <br><br>
          <center>
            <button type="submit" class="btn btn-success btn-lg btn-block" value="save" onclick="verificar();">Guardar</button>
          </center>
      </form>
    </div>
  </div>
  </div>
  </div>


  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>


  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/funciones.js"></script>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>