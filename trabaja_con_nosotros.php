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
          <h1>Trabaja con nosotros</h1>
          <ol>
            <li><a href="index.php">Inicio</a></li>
            <li>Trabaja con nosotros</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta1" class="cta1">
      <div class="form-container1" data-aos="fade-up" data-aos-duration="800">
        <br>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
          <br>
          <div class="formulario" data-aos="fade-up" role="form" data-aos-duration="800">
            <br>
            <br>
            <h3 class="titulo" data-aos="fade-up" data-aos-duration="800">¿Estás interesado(a) en trabajar con nuestro equipo de expertos en belleza? ¡Escríbenos!</h3>
            <br>
            <br>
            <div class="col-md-8 offset-md-2">
              <div class="row">
                <div class="col form-group">
                  <label for="name">Escriba su nombre</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Tu Nombre" style="width: 100%;" required="">
                </div>
                <div class="col form-group">
                  <label for="email">Correo electrónico</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Tu Email" style="width: 100%;" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="phone">Teléfono</label>
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Número telefónico" style="width: 100%;">
                </div>
                <div class="col-md-6 form-group">
                  <label for="identification">Identificación</label>
                  <input type="text" class="form-control" name="identification" id="identification" placeholder="Identificación" style="width: 100%;">
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="subject">Asunto</label>
                <input type="text" class="form-control" name="subject" id="subject" style="width: 100%;" placeholder="Asunto" required>
              </div>
              <div class="form-group mt-3">
                <label for="message">Mensaje</label>
                <textarea class="form-control" name="message" id="message" rows="5" placeholder="Mensaje" required></textarea>
              </div>
              <div class="form-group mt-3">
                <label for="adjunto">Adjunta tu hoja de vida</label>
                <input type="file" class="form-control-file" name="adjunto" id="adjunto" required>
              </div>
              <div class="my-3">
                <div class="text-center"><input type="submit"></div>
              </div>
              <br>
              <br>
              <br>
            </div>
          </div>
        </form>
      </div>
    </section><!-- End Cta Section -->


    <?php
    require 'vendor/autoload.php'; // Incluir el archivo de autoloading de Composer
    require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require 'vendor/phpmailer/phpmailer/src/SMTP.php';
    require 'vendor/phpmailer/phpmailer/src/Exception.php';


    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    // Verifica si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Recopila los datos del formulario
      $nombre = $_POST["name"];
      $email = $_POST["email"];
      $telefono = $_POST["phone"];
      $identificacion = $_POST["identification"];
      $asunto = $_POST["subject"];
      $mensaje = $_POST["message"];
      // Ruta temporal del archivo adjunto
      $adjunto = $_FILES['adjunto']['tmp_name'];

      // Nombre del archivo adjunto
      $nombreAdjunto = $_FILES['adjunto']['name'];

      // Configuración de PHPMailer
      include("includes/email_config1.php");

      // Destinatario y remitente
      $mail->setFrom('marcelina8112@hotmail.com', 'Candidato'); // Reemplaza con tu dirección de correo electrónico y tu nombre
      $mail->addAddress('johanaof@hotmail.com'); // Reemplaza con la dirección de correo del destinatario
      $mail->addReplyTo($email, $nombre);

      // Verificar si se ha seleccionado un archivo adjunto
      if (isset($_FILES['adjunto']) && $_FILES['adjunto']['error'] === UPLOAD_ERR_OK) {
        // Archivo adjunto seleccionado
        $adjunto = $_FILES['adjunto']['tmp_name'];
        $nombreAdjunto = $_FILES['adjunto']['name'];
        $mail->addAttachment($adjunto, $nombreAdjunto);
      } else {
        // No se ha seleccionado un archivo adjunto
        echo "Debes adjuntar un archivo.";
        // Aquí puedes agregar el código para mostrar un mensaje de error al usuario o realizar alguna acción adicional
      }

      // Contenido del correo electrónico
      $mail->isHTML(true);
      $mail->CharSet = 'UTF-8'; // Configurar la codificación de caracteres
      $mail->Subject = "Nuevo mensaje de contacto: $asunto";
      $mail->Body = "
    <html>
    <head>
        <title>Nuevo mensaje de contacto</title>
    </head>
    <body>
        <h2>Detalles del contacto:</h2>
        <p><strong>Nombre:</strong> $nombre</p>
        <p><strong>Correo electrónico:</strong> $email</p>
        <p><strong>Teléfono:</strong> $telefono</p>
        <p><strong>Identificación:</strong> $identificacion</p>
        <p><strong>Asunto:</strong> $asunto</p>
        <p><strong>Mensaje:</strong> $mensaje</p>
    </body>
    </html>
";
      // Intenta enviar el correo
      try {
        $mail->send();
        echo "<script src='node_modules/sweetalert2/dist/sweetalert2.min.js'></script>";
        echo "<script>Swal.fire({
          title: '¡Gracias por tu interés en trabajar con nosotros!',
          text: 'Revisaremos cuidadosamente tu solicitud y nos pondremos en contacto contigo si tu perfil se ajusta a nuestras necesidades actuales.',
          icon: 'success',
          confirmButtonColor: '#3085d6',
          confirmButtonText: 'Ok'
        });
        </script>"; // Puedes mostrar un mensaje de confirmación si el correo se envió correctamente
      } catch (Exception $e) {
        echo "<script>Swal.fire({
          title: '¡Error al enviar mensaje!',
          text: 'Fallo en el sistema',
          icon: 'warning',
          confirmButtonColor: '#3085d6',
          confirmButtonText: 'Ok'
        });" . $mail->ErrorInfo; // Muestra un mensaje de error si el correo no se pudo enviar
      }
    }
    ?>
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