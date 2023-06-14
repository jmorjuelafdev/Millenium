<?php
    session_start(); // Iniciar o reanudar la sesión

    session_destroy(); // Destruir la sesión

    header("Location: index.php"); // Redirigir al usuario a la página de inicio de sesión
    exit(); // Detener la ejecución del script después de redirigir
?>
