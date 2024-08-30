<?php
// fecha actual para el footer
$fecha = new DateTime();
?>

<!-- main footer -->
<footer class="d-flex flex-wrap justify-content-center align-items-center py-3 my-4 border-top">
  <div class="align-items-center">
    <span class="text-muted"><?php echo $fecha->format('Y') ?> TUDAI, UNICEN</span>
  </div>
</footer>