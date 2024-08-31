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

  <!-- footer -->
  <?php
  require_once 'templates/footer.php';
  ?>

</body>

</html>