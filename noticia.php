<!DOCTYPE html>
<html lang="en">

  <?php
  require_once 'templates/head.php'
  ?>

<body>

  <!-- header -->
  <?php
  require_once 'templates/header.php';
  ?>

  <!-- main section -->
  <main class="container mt-5">

    <?php
    require_once 'db_fake.php';

    // obtengo el parámetro GET de la url
    $noticia = $noticias[$_GET['id']];

    ?>
    <section class="noticia">
      <h1 class="mb-5"><?= $noticia->title ?></h1>
      <img class="noticia-image" src="<?= $noticia->img ?>" alt="...">
      <p class="lead mt-3"><?= $noticia->text ?></p>
    </section>


  </main>

  <!-- footer -->
  <?php
  require_once 'templates/footer.php';
  ?>

</body>

</html>