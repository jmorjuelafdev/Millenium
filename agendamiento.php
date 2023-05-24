<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Millenium Peluquería - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">


</head>

<body>
  <a href="https://wa.me/573162248270?" class="whatsapp" target="_blank"> <i class="fa-brands fa-whatsapp"></i>
    <h6>Contáctenos</h6>
  </a>
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top
      topbar">
    <div class="container-fluid container-xl d-flex align-items-center
        justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>+57 000 0000000</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Lunes
          a sábado: 9:00 AM - 7:00 PM / Domingos y festivos: 10:00 AM - 5:00
          PM</span></i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center
      header">
    <div class="container-fluid container-xl d-flex align-items-center
        justify-content-between">

      <div class="logo me-auto">
        <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Inicio</a></li>
          <li><a class="nav-link scrollto" href="index.php#nosotros">Nosotros</a></li>
          <li><a class="nav-link scrollto" href="index.php#servicios">Servicios</a></li>
          <li><a class="nav-link scrollto" href="index.php#menu">Precios</a></li>
          <li><a class="nav-link scrollto" href="index.php#peluqueros">Estilistas</a></li>
          <li><a class="nav-link scrollto" href="index.php#gallery">Clientes</a></li>
          <li><a class="nav-link scrollto" href="index.php#contactenos">Contáctenos</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="index.php#reservas" class="reservas-btn scrollto">Reservar una
        cita</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h1>Agendamiento de citas</h1>
          <ol>
            <li><a href="index.php">Inicio</a></li>
            <li>Agendamiento de citas</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs Section -->
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="form-container" data-aos="fade-up" data-aos-duration="800">
        <br>
        <form method="POST" action="confirmacion.php" onsubmit="return validarFormulario();">
          <br>
          <div class="formulario" data-aos="fade-up" data-aos-duration="800">
            <br>
            <br>
            <h3 class="titulo" data-aos="fade-up" data-aos-duration="800">1. Escoge el servicio que requieres:</h3>
            <br>
            <br>
            <div class="servicios-container">
              <?php
              // Conexión a la base de datos
              include("includes/connect.php");
              // Obtener servicios de la tabla "servicios"
              $consulta_servicios = "SELECT * FROM servicios";
              $result_servicios = mysqli_query($conexion, $consulta_servicios);

              // Contador para controlar el número de servicios por columna
              $contador = 0;

              // Mostrar servicios como checkboxes en tres columnas
              while ($row_servicio = mysqli_fetch_assoc($result_servicios)) {
                // Iniciar una nueva columna después de mostrar 3 servicios
                if ($contador % 3 == 0) {
                  echo '<div class="column">';
                }

                echo '<label class="form-check-label">';
                echo '<p class= list_servicios><input class="form-check-input" type="checkbox" name="servicios[]" value="' . $row_servicio['nombre'] . '">' . $row_servicio['nombre'] . ' (' . $row_servicio['duracion'] . 'min)............' . '<b>$' . $row_servicio['precio'] . '</b></p></label><br>';

                // Cerrar la columna después de mostrar 3 servicios
                if ($contador % 3 == 2) {
                  echo '</div>';
                }

                $contador++;
              }

              // Cerrar la última columna si no se ha cerrado previamente
              if ($contador % 3 != 0) {
                echo '</div>';
              }
              // Cerrar la conexión a la base de datos
              ?>
            </div>
          </div>
          <br>
          <div class="formulario" data-aos="fade-up" data-aos-duration="800">
            <br>
            <br>
            <h3 class="titulo" data-aos="fade-up" data-aos-duration="800">2. Escoge el peluquero:</h3>
            <br>
            <br>
            <div class="peluqueros-container">
              <?php
              // Obtener peluqueros de la tabla "peluqueros"
              $consulta_peluqueros = "SELECT * FROM peluqueros";
              $result_peluqueros = mysqli_query($conexion, $consulta_peluqueros);

              // Mostrar peluqueros como checkboxes
              while ($row_peluquero = mysqli_fetch_assoc($result_peluqueros)) {
                // Iniciar una nueva columna después de mostrar 3 servicios
                if ($contador % 3 == 0) {
                  echo '<div class="column">';
                }
                echo '<p class= list_peluqueros><input class="form-check-input" type="checkbox" name="peluqueros[]" value="' . $row_peluquero['nombre'] . '">' . $row_peluquero['nombre'] . '<b> (' . $row_peluquero['especialidad'] . ')' . '</b></p></label><br>';
                // Cerrar la columna después de mostrar 3 servicios
                if ($contador % 3 == 2) {
                  echo '</div>';
                }

                $contador++;
              }

              // Cerrar la última columna si no se ha cerrado previamente
              if ($contador % 3 != 0) {
                echo '</div>';
              }
              ?>
            </div>
          </div>
          <br>
          <div class="formulario" data-aos="fade-up" data-aos-duration="800">
            <br>
            <br>
            <h3 class="titulo" data-aos="fade-up" data-aos-duration="800">3. Escoge la fecha y hora:</h3>
            <br>
            <br>
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" id="fecha" required><br>

            <label for="hora">Hora:</label>
            <input type="time" name="hora" id="hora" required><br>
            <br>
          </div>
          <br>
          <div class="formulario" data-aos="fade-up" data-aos-duration="800">
            <br>
            <br>
            <h3 class="titulo" data-aos="fade-up" data-aos-duration="800">4. Ingresa tus datos de contacto:</h3>
            <br>
            <br>
            <label for="nombre_cliente">Nombre:</label>
            <input type="text" name="nombre_cliente" id="nombre" required><br>

            <label for="telefono_cliente">Teléfono:</label>
            <input type="text" name="telefono_cliente" id="telefono" required><br>

            <label for="email_cliente">Correo electrónico:</label>
            <input type="email" name="email_cliente" id="email" required><br>
            <br>
            <input type="submit" value="Confirmar Cita">
            <br>
            <br>
            <br>
          </div>
        </form>
        <?php
        mysqli_close($conexion);
        ?>
        </br>
      </div>
    </section><!-- End Cta Section -->
  </main><!-- End #main -->
  
  <?php
  include('includes/footer.php') //Footer
  ?>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/script.js"></script>

</body>

</html>