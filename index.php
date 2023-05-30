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
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <a href="https://wa.me/573162248270?" class="whatsapp" target="_blank"> <i class="fa-brands fa-whatsapp"></i>
    <h6>Contáctenos</h6>
  </a>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <?php
      // Cargar el contenido del archivo JSON
      $jsonData = file_get_contents('assets/json/pagina.json');

      // Decodificar el contenido JSON en un array asociativo
      $data = json_decode($jsonData, true);

      $phone = $data['top_bar']['phone'];
      $weekdays = $data['top_bar']['schedule']['weekdays'];
      $weekends = $data['top_bar']['schedule']['weekends'];
      ?>

      <i class="bi bi-phone d-flex align-items-center"><span><?php echo $phone; ?></span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span><?php echo $weekdays; ?> / <?php echo $weekends; ?></span></i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center
      header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center
        justify-content-between">

      <div class="logo me-auto">
        <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <?php //Menú página importando formato json
      $jsonMenu = file_get_contents('assets/json/pagina.json');
      $menuData = json_decode($jsonMenu, true);
      $menu = $menuData['menu_pagina'];
      ?>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <?php foreach ($menu as $item) : ?>
            <li><a class="nav-link scrollto" href="<?php echo $item[1]; ?>"><?php echo $item[0]; ?></a></li>
          <?php endforeach; ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="#reserva" class="reservas-btn scrollto">Reservar una
        cita</a>

    </div>
  </header><!-- End Header -->

  <?php
  // Obtener los slides del array asociativo
  $slides = $data['slides'];
  ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">

          <?php foreach ($slides as $index => $slide) : ?>
            <div class="carousel-item <?php echo ($index === 0) ? 'active' : ''; ?>" style="background-image: url(<?php echo $slide['image']; ?>);">
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2 class="animate__animated animate__fadeInDown"><?php echo $slide['title']; ?></h2>
                  <?php if (isset($slide['subtitle'])) : ?>
                    <h3 class="animate__animated animate__fadeInDown"><span><?php echo $slide['subtitle']; ?></span></h3>
                  <?php endif; ?>
                  <p class="animate__animated animate__fadeInUp"><?php echo $slide['content']; ?></p>
                  <div>
                    <a href="<?php echo $slide['button1_link']; ?>" class="btn-menu animate__animated animate__fadeInUp scrollto"><?php echo $slide['button1_text']; ?></a>
                    <a href="<?php echo $slide['button2_link']; ?>" class="btn-book animate__animated animate__fadeInUp scrollto"><?php echo $slide['button2_text']; ?></a>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->


  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="nosotros" class="nosotros">
      <div class="container" data-aos="fade-up">

        <?php
        // Acceder a la propiedad "nosotros"
        $nosotros = $data['nosotros'];
        ?>
        <div class="section-title">
          <h2><?php echo $nosotros['title']; ?></h2>
          <p><?php echo $nosotros['description']; ?></p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="<?php echo $nosotros['image']; ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <ul>
              <?php foreach ($nosotros['features'] as $feature) : ?>
                <li><i class="bi bi-check-circle"></i> <?php echo $feature; ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Servicios Section ======= -->
    <section id="servicios" class="servicios servicios">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Servicios</h2>
          <p><?php echo $data['servicios_intro']; ?></p>
        </div>

        <div class="row">
          <?php
          // Acceder a la propiedad "servicios"
          $servicios = $data['servicios'];

          // Iterar sobre cada servicio y generar el código HTML dinámicamente
          foreach ($servicios as $servicio) :
          ?>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="<?php echo $servicio['delay']; ?>">
              <div class="icon"><img src="<?php echo $servicio['icon']; ?>"></div>
              <h4 class="title"><?php echo $servicio['title']; ?></h4>
              <p class="description"><?php echo $servicio['description']; ?></p>
            </div>
          <?php endforeach; ?>
        </div>

      </div>
    </section><!-- End servicios Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="section-title">
          <h2>Precios</h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Ver todo</li>
              <li data-filter=".filter-barberia">Barbería</li>
              <li data-filter=".filter-mujer">Mujer</li>
              <li data-filter=".filter-uñas">Uñas</li>
              <li data-filter=".filter-piel">Piel y rostro</li>
              <li data-filter=".filter-kids">Kids</li>
              <li data-filter=".filter-otros">Otros</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container">
          <?php
          // Generar elementos HTML para cada servicio por categoría
          foreach ($data['categorias'] as $categoria) {
            foreach ($categoria['elementos'] as $elemento) {
              echo '<div class="col-lg-6 menu-item filter-' . strtolower($categoria['nombre']) . '">';
              echo '<div class="menu-content">';
              echo '<p>' . $elemento['nombre'] . '</p><span>' . $elemento['precio'] . '</span>';
              echo '</div>';
              echo '<div class="menu-ingredients">';
              echo $elemento['servicio'];
              echo '</div>';
              echo '</div>';
            }
          }
          ?>
        </div>
      </div>
    </section>

    <!-- ======= Peluqueros Section ======= -->
    <section id="peluqueros" class="peluqueros">
      <div class="container">
        <div class="section-title">
          <h2>Nuestros estilistas</h2>
          <p><?php echo $data['peluqueros_intro']; ?></p>
        </div>

        <div class="row">
          <?php
          // Obtener el objeto "peluqueros"
          $peluqueros = $data['peluqueros'];

          // Generar elementos HTML para cada estilista
          foreach ($peluqueros as $estilista) {
            echo '<div class="col-lg-4 col-md-6">';
            echo '<div class="member">';
            echo '<div class="pic"><img src="' . $estilista['imagen'] . '" class="img-fluid" alt=""></div>';
            echo '<div class="member-info">';
            echo '<h4>' . $estilista['nombre'] . '</h4>';
            echo '<span>' . $estilista['cargo'] . '</span>';
            echo '<div class="social">';

            // Generar enlaces a las redes sociales
            foreach ($estilista['redes_sociales'] as $red_social) {
              echo '<a href="' . $red_social['enlace'] . '"><i class="bi bi-' . $red_social['icono'] . '"></i></a>';
            }
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
          }
          ?>
        </div>
      </div>
    </section>
    <!-- End peluqueros Section -->


    <!-- ======= Reserva Section ======= -->
    <section id="reserva" class="reserva">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Reserva tu cita</h3>
          <p> En unos sencillos pasos, podrás reservar tus citas sin problemas.</p>
          <a class="reserva-btn scrollto" href="agendamiento.php">Agendar tu cita</a>
        </div>

      </div>
    </section><!-- End reserva Section -->

    <!-- ======= Gallery Section ======= -->
    <?php
    // Obtener el objeto "gallery" del JSON
    $gallery = $data['gallery'];

    // Generar elementos HTML para la sección de la galería
    echo '<section id="gallery" class="gallery">';
    echo '<div class="container-fluid">';
    echo '<div class="section-title">';
    echo '<h2>' . $gallery['title'] . '</h2>';
    echo '<p>' . $gallery['description'] . '</p>';
    echo '</div>';
    echo '<div class="row g-0">';

    // Generar elementos HTML para cada imagen de la galería
    foreach ($gallery['images'] as $image) {
      echo '<div class="col-lg-3 col-md-4">';
      echo '<div class="gallery-item">';
      echo '<a href="' . $image['url'] . '" class="gallery-lightbox">';
      echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" class="img-fluid">';
      echo '</a>';
      echo '</div>';
      echo '</div>';
    }

    echo '</div>';
    echo '</div>';
    ?>
    </section><!-- End Gallery Section -->


    <?php

    // Obtener los datos de la sección 'contactenos'
    $contactenos = $data['contactenos'];

    ?>

    <section id="contactenos" class="contactenos">
      <div class="container">

        <div class="section-title">
          <h2><?php echo $contactenos['title']; ?></h2>
        </div>
        <p><?php echo $contactenos['description']; ?></p>
      </div>

      <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254508.3928069431!2d-74.24789601910015!3d4.648625942527253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bfd2da6cb29%3A0x239d635520a33914!2zQm9nb3TDoQ!5e0!3m2!1ses!2sco!4v1680408409497!5m2!1ses!2sco" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="fa-solid fa-location-dot"></i>
                  <h3>Dirección</h3>
                  <p><?php echo $contactenos['address']; ?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h3>Correo electrónico</h3>
                  <p><?php echo $contactenos['email']; ?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Teléfonos</h3>
                  <?php
                  foreach ($contactenos['phone_numbers'] as $phone) {
                    echo "<p>" . $phone . "</p>";
                  }
                  ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bxl-whatsapp"></i>
                  <h3>Atención al cliente</h3>
                  <p><?php echo $contactenos['customer_service']; ?></p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Tu Nombre" style="width: 100%;" required="">
                </div>
                <div class="col form-group mt-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Tu Email" style="width: 100%;" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" style="width: 100%;" placeholder="Asunto" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Tu mensaje ha sido enviado.Gracias!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar mensaje</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>


  </main><!-- End #main -->
  <?php
  include('includes/footer.php')
  ?>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>