<script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
<?php
  $fecha = $_POST["fecha"];
  $hora = $_POST["hora"];
  $nombre = $_POST["nombre"];
  $telefono = $_POST["telefono"];
  $email = $_POST["email"];
  $servicios = implode(",", $_POST["servicios"]);
  $conn = mysqli_connect("localhost", "root", "", "millenium");
  $query = "INSERT INTO citas (fecha, hora, cliente, telefono, email, servicios) VALUES ('$fecha', '$hora', '$nombre', '$telefono', '$email', '$servicios')";
  mysqli_query($conn, $query);
  mysqli_close($conn);
  echo "<script>swal.fire('Cita guardada correctamente.')</script>";
?>