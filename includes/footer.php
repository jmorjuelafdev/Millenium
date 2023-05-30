<!-- ======= Footer ======= -->
<?php
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
      <a href="index.html"><img src="<?php echo $footer['logo']; ?>" alt="" class="img-fluid"></a>
    </div>
    <div class="social-links">
      <?php
      foreach ($footer['social_links'] as $socialLink) {
        echo '<a href="' . $socialLink['url'] . '" class="' . $socialLink['icon'] . '"></a>';
      }
      ?>
    </div>
    <div class="additional-links">
      <ul>
        <?php
        foreach ($footer['additional_links'] as $additionalLink) {
          echo '<li><b><a href="' . $additionalLink['url'] . '">' . $additionalLink['label'] . '</a></b></li>';
        }
        ?>
      </ul>
    </div>
    <div class="copyright">
      <?php echo $footer['copyright']; ?>
    </div>
    <div class="credits">
      <?php echo $footer['credits']; ?>
    </div>
  </div>
</footer><!-- End Footer -->
