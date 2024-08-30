<?php
// fecha actual para el footer
$fecha = new DateTime();
?>

<!-- main header -->
<header>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">TUDAI Digital <span><?php echo $fecha->format('d-m-y') ?></span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Noticias</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>