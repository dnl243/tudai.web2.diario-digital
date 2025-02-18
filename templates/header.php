<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!-- <base href="http://localhost/web2/diario-digital/"> (solo funciona en mi pc ) -->
  <base href="<?= BASE_URL?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>TUDAI - Diario Digital</title>
</head>

<body>

  <?php
  // fecha actual para el footer
  $fecha = new DateTime();
  ?>

  <!-- main header -->
  <header>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="home">TUDAI Digital <span><?php echo $fecha->format('d-m-y') ?></span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="home">Noticias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="about">Sobre nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="subscription">Suscripción</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
