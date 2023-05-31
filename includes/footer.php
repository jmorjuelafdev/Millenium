<!-- ======= Footer ======= -->
<?php
include('includes/connect.php');
// Consulta SQL para obtener los datos del footer
$sql = "SELECT * FROM footer";
$result = mysqli_query($conexion, $sql);

// Verificar si se encontraron resultados
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $logo = $row['logo'];
    $socialLinks = json_decode($row['social_links'], true);
    $additionalLinks = json_decode($row['additional_links'], true);
    $credits = $row['credits'];
    $copyright = $row['copyright'];
} else {
    // No se encontraron resultados en la tabla
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);

// Obtener el contenido del archivo JSON
$jsonData = file_get_contents('assets/json/pagina.json');

// Decodificar el contenido JSON a un array asociativo
$data = json_decode($jsonData, true);

// Obtener los datos del footer
$footer = $data['footer'];

?>

<footer id="footer">
  <div class="container">
    <div class="logo me-auto">
      <a href="index.html"><img src="<?php echo $logo; ?>" alt="" class="img-fluid"></a>
    </div>
    <div class="social-links">
      <?php
      foreach ($socialLinks as $socialLink) {
        echo '<a href="' . $socialLink['url'] . '" class="' . $socialLink['icon'] . '"></a>';
      }
      ?>
    </div>
    <div class="additional-links">
      <ul>
        <?php
        foreach ($additionalLinks as $additionalLink) {
          echo '<li><b><a href="' . $additionalLink['url'] . '">' . $additionalLink['label'] . '</a></b></li>';
        }
        ?>
      </ul>
    </div>
    <div class="copyright">
      <?php echo $copyright; ?>
    </div>
    <div class="credits">
      <?php echo $credits; ?>
    </div>
  </div>
</footer><!-- End Footer -->
