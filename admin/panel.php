<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/img/favicon.png" rel="icon">
</head>

<body>
    <?php
    // Inicia la sesión
    session_start();

    // Verifica si el usuario ha iniciado sesión y si no, redirige al formulario de inicio de sesión
    if (!isset($_SESSION['username'])) {
        header("Location: index.php"); // Reemplaza "index.php" con la URL de tu formulario de inicio de sesión
        exit(); // Detener la ejecución del script después de redirigir
    }

    // Obtén el nombre de usuario de la sesión
    $username = $_SESSION['username'];
    ?>
    <header class="custom-color py-3 text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="assets/img/logo.png" alt="Logo" width="50" height="50" class="logo_header">
                </div>
                <div class="col-md-6 text-center">
                    <h2>Administrar peluquería</h2><span class="ms-2">
                </div>
                <div class="col-md-3 text-end">
                    <div class="user-info">
                        <i class="fas fa-user"></i> <span class="ms-2"><?php echo $username; ?></span>
                        <span class="ms-2"><a href="logout.php"><i class="fa-solid fa-power-off fa-2x"></i></a></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-md navbar-dark custom-color">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#London" onclick="openTab(event, 'London')">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Paris" onclick="openTab(event, 'Paris')">Peluqueros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Tokyo" onclick="openTab(event, 'Tokyo')">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Tokyo" onclick="openTab(event, 'Tokyo')">Citas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="London" class="tabcontent">
        <h3>London</h3>
        <p>London is the capital city of England.</p>
    </div>

    <div id="Paris" class="tabcontent">
        <h3>Paris</h3>
        <p>Paris is the capital of France.</p>
    </div>

    <div id="Tokyo" class="tabcontent">
        <h3>Tokyo</h3>
        <p>Tokyo is the capital of Japan.</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>