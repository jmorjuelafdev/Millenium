<?php
// Verificar si se ha enviado el formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores enviados del formulario
    $nombre = $_POST["nombre"];
    $area = $_POST["area"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $rol_id = $_POST["rol_id"];

    // Validar los datos recibidos (puedes agregar tus propias validaciones aquí)

    // Generar el hash de la contraseña
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Conectar a la base de datos y realizar la inserción
    $servername = "nombre_del_servidor";
    $username_db = "nombre_de_usuario";
    $password_db = "contraseña_de_usuario";
    $dbname = "nombre_de_la_base_de_datos";

    // Crear la conexión
    include("includes/connect.php");

    // Preparar la consulta SQL para insertar el nuevo usuario
    $sql = "INSERT INTO usuarios (nombre, area, username, password, rol_id) VALUES ('$nombre', '$area', '$username', '$hashedPassword','$rol_id')";

    // Ejecutar la consulta
    if ($conexion->query($sql) === TRUE) {
        echo "Usuario registrado exitosamente";
    } else {
        echo "Error al registrar usuario: " . $conexion->error;
    }

    // Cerrar la conexión
    $conexion->close();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Registrar usuario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Registrar usuario</h1>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="area" class="form-label">Área:</label>
                <input type="text" class="form-control" id="area" name="area" required>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Usuario:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="rol_id" class="form-label">Rol:</label>
                <select class="form-select" id="rol_id" name="rol_id" required>
                    <option value="1">Administrador</option>
                    <option value="2">Supervisor</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>