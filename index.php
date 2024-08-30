<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>TUDAI - Diario Digital</title>
</head>

<body>

  <?php
  require_once 'templates/header.php';
  ?>

  <!-- main section -->
  <main class="container mt-5">

    <?php
    // incluimos el archivo que contiene el arreglo $noticias
    require_once 'db_fake.php';

    foreach ($noticias as $key => $noticia) : ?>
      <div class="card">
        <img src="<?= $noticia->img ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?= $noticia->title ?></h5>
          <p class="card-text"><?= $noticia->text ?></p>
          <a href="noticia.php?id=<?= $key; ?>" class="btn btn-outline-primary">Leer más</a>
        </div>
      </div>
    <?php endforeach; ?>

    </section>

  </main>

  <?php
  require_once 'templates/footer.php';
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>