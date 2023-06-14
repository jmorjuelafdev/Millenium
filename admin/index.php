<!DOCTYPE html>
<html lang="es">

<head>
    <title>Iniciar sesión</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/img/favicon.png" rel="icon">

</head>

<body>
    <main id="main">
        <?php
        include("includes/connect.php");

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtener el nombre de usuario y la contraseña enviados desde el formulario
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Realizar la consulta para obtener el registro del usuario de la base de datos
            $query = "SELECT * FROM usuarios WHERE username = '$username'";
            $result = mysqli_query($conexion, $query);

            // Verificar si se encontró un registro con el nombre de usuario dado
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $storedPassword = $row['password'];
                $id = $row['id'];
                $rol_id = $row['rol_id'];

                // Verificar si la contraseña coincide utilizando password_verify()
                if (password_verify($password, $storedPassword)) {
                    if ($rol_id == 1) {
                        // Iniciar sesión exitosa para el rol 1
                        session_start();
                        $_SESSION['username'] = $username; // Guardar el nombre de usuario en la sesión

                        header("Location: sistemas.php");
                        exit(); // Detener la ejecución del script después de redirigir
                    } elseif ($rol_id == 2) {
                        // Iniciar sesión exitosa para el rol 2
                        session_start();
                        $_SESSION['username'] = $username; // Guardar el nombre de usuario en la sesión

                        header("Location: panel.php");
                        exit(); // Detener la ejecución del script después de redirigir
                    } else {
                        echo "Rol no válido";
                    }
                } else {
                    // La contraseña no coincide, mostrar mensaje de error
                    echo "Contraseña incorrecta";
                }
            } else {
                // No se encontró un usuario con ese nombre, mostrar mensaje de error
                echo "Usuario no encontrado";
            }
        }
        ?>

        <section class="login">
            <div class="container">
                <div class="card custom-card">
                    <div class="card-body">
                        <div class="col-2">
                            <img src="assets/img/logo.png" alt="Logo" class="logo_login">
                        </div>
                        <div class="row align-items-center mb-4">
                            <div class="col">
                                <h2 class="card-title">Administración peluquería</h2>
                            </div>
                        </div>
                        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                            <div class="mb-3">
                                <label for="username" class="form-label">Usuario:</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                            </div>
                        </form>
                        <p class="card-text text-center mt-3"><a href="register.php">Registrar usuario</a></p>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </main>
</body>

</html>