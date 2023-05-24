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

    <section class="inner-page">
      <?php
      require 'vendor/autoload.php'; // Incluir el archivo de autoloading de Composer
      include("includes/connect.php");

      // Verificar si se envió el formulario
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Obtener datos del formulario
        $servicios = $_POST['servicios'] ?? [];
        $peluqueros = $_POST['peluqueros'] ?? [];
        $telefono = $_POST['telefono'] ?? '';
        $fecha = $_POST['fecha'] ?? '';
        $hora = $_POST['hora'] ?? '';
        $nombre_cliente = $_POST['nombre_cliente'] ?? '';
        $telefono_cliente = $_POST['telefono_cliente'] ?? '';
        $email_cliente = $_POST['email_cliente'] ?? '';
        $cita_id = $_GET['id'] ?? '';

        // Insertar datos del cliente en la tabla "cliente"
        $insertar_cliente = "INSERT INTO cliente (nombre_cliente, telefono_cliente, email_cliente) VALUES ('$nombre_cliente', '$telefono_cliente','$email_cliente')";
        mysqli_query($conexion, $insertar_cliente);
        $cliente_id = mysqli_insert_id($conexion); // Obtener el ID del cliente insertado

        // Concatenar los servicios seleccionados en una cadena
        $servicios_string = implode(',', $servicios);

        // Concatenar los peluqueros seleccionados en una cadena
        $peluqueros_string = implode(',', $peluqueros);

        // Insertar datos de la cita en la tabla "citas"
        $insertar_cita = "INSERT INTO citas (servicios, peluqueros, fecha, hora, nombre_cliente, telefono_cliente, email_cliente, cliente_id) VALUES ( '$servicios_string', '$peluqueros_string', '$fecha', '$hora', '$nombre_cliente', '$telefono_cliente', '$email_cliente', '$cliente_id')";
        mysqli_query($conexion, $insertar_cita);
        $cita_id = mysqli_insert_id($conexion); // Obtener el ID de la cita insertada

        // Configuración de PHPMailer y envío del correo electrónic
        include("includes/email_config.php");

        $mail->setFrom('marcelina8112@hotmail.com', 'Millenium Peluquería'); // Tu dirección de correo y nombre
        $mail->addAddress($email_cliente, $nombre_cliente); // Dirección de correo y nombre del cliente

        $mail->Subject = 'Confirmación de cita'; // Asunto del correo

        $mail->isHTML(true); // Establecer el formato de correo HTML

        // Convertir los datos a UTF-8
        $nombre_cliente_utf8 = mb_convert_encoding($nombre_cliente, 'UTF-8');
        $servicios_string_utf8 = mb_convert_encoding($servicios_string, 'UTF-8');
        $peluqueros_string_utf8 = mb_convert_encoding($peluqueros_string, 'UTF-8');
        $fecha_utf8 = mb_convert_encoding($fecha, 'UTF-8');
        $hora_utf8 = mb_convert_encoding($hora, 'UTF-8');
        $mail->CharSet = 'UTF-8';


        // Cuerpo del correo con formato HTML
        $mail->Body = "<h2>Estimado(a) $nombre_cliente_utf8,</h2>
            <p>Tu cita ha sido agendada con éxito.</p>
            <div class='card text-center'>
              <div class='card-header'>
                <h2>Recordatorio</h2>
              </div>
                <div class='card-body'>
                  <p class='card-text'>
                    <ul>
                      <li><b>Código cita:</b> $cita_id</li>
                      <li><b>Servicios:</b> $servicios_string_utf8</li>
                      <li><b>Profesional:</b> $peluqueros_string_utf8</li>
                      <li><b>Fecha:</b> $fecha_utf8</li>
                      <li><b>Hora:</b> $hora_utf8</li>
                   </ul>
                 </p>
               </div>
                  <div class='card-footer text-muted'>
                     <b>Estimado cliente</b>
                     <br>
                       <ul>
                         <li>Se enviará recordatorio a tu correo electrónico suministrado.</li>
                         <li>Recuerda llegar 10 min antes de la cita. Si no puede tomarla o desea modificarla, favor comunicarse +57 000 0000000 con máximo 2 horas de anticipación.</li>
                         <li>Peluquero se comunicará contigo a tu número de celular o whatsapp
                          suministrado para confirmar cita y acordar inquietudes y observaciones
                          de los servicios tomados.</li>
                          <li>Precios pueden variar según el proceso y cantidad de insumos sugeridos por el peluquero.</li>
                       </ul>
                 </div>
            </div><br>
            <p>Gracias por confiar en nosotros.</p>
            <p>Saludos cordiales,</p>
            <p><b><i>Millenium Peluquería</i></b></p>
            <p><b><i>Cel: +57 000 0000000</i></b></p>";
        // Envío del correo electrónico
        if ($mail->send()) {
          echo "<script src='node_modules/sweetalert2/dist/sweetalert2.min.js'></script>";
          echo "<script>Swal.fire({
              title: '¡Cita agendada con éxito!',
              text: 'Favor revisar tu correo para ver recordatorio de tu cita.',
              icon: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Ok'
            });
            </script>";
        } else {
          echo "<script>Swal.fire({
              title: '¡Error al enviar el correo!',
              text: 'Fallo en el sistema.',
              icon: 'warning',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Ok'
            });
            </script>" . $mail->ErrorInfo;
        }
      }
      ?>
      <div class="card text-center">
        <div class="card-header">
          <h2>Recordatorio</h2>
        </div>
        <div class="card-body">
          <p class="card-text">
            <?php
            echo "<b>Código cita: </b>$cita_id<br>";
            echo "<b>Cliente: </b>$nombre_cliente<br>";
            echo "<b>Servicios: </b>$servicios_string<br>";
            echo "<b>Profesional: </b>$peluqueros_string<br>";
            echo "<b>Fecha: </b>$fecha<br>";
            echo "<b>Hora: </b>$hora<br>";
            ?>
          </p>
        </div>
        <div class="card-footer text-muted">
          <b>Estimado cliente</b>
          <br>
          <ul>
            <li>Se enviará recordatorio a tu correo electrónico suministrado.</li>
            <li>Recuerda llegar 10 min antes de la cita. Si no puede tomarla o desea modificarla, favor comunicarse +57 000 0000000 con máximo 2 horas de anticipación.</li>
            <li>Peluquero se comunicará contigo a tu número de celular o whatsapp
              suministrado para confirmar cita y acordar inquietudes y observaciones
              de los servicios tomados.</li>
            <li>Precios pueden variar según el proceso y cantidad de insumos sugeridos por el peluquero.</li>
          </ul>
          <a href="index.php" class="btn btn-primary">Ir a Inicio</a>
          <a href="agendamiento.php" class="btn btn-primary">Agendar otra cita</a>
        </div>
      </div>
    </section>
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


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/script.js"></script>

</body>

</html>