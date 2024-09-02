<?php
require_once 'db_fake.php';

function showNoticias()
{
  //<!-- header -->
  require_once 'templates/header.php'; ?>

  <!-- main section -->
  <main class="container mt-5">
    <?php
    $noticias = getNoticias();
    ?>

    <section class="noticias">
      <?php
      foreach ($noticias as $key => $noticia) : ?>
        <div class="card">
          <img src="<?= $noticia->img ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $noticia->title ?></h5>
            <p class="card-text"><?= $noticia->text ?></p>
            <a href="noticia/<?= $key; ?>" class="btn btn-outline-primary">Leer más</a>
          </div>
        </div>
      <?php endforeach; ?>
    </section>

  </main>

  <!-- footer -->
<?php require_once 'templates/footer.php';
}

function showNoticiaById($id)
{
  //  <!-- header -->
  require_once 'templates/header.php';
  $noticia = getNoticiaById($id); ?>

  <!-- main section -->
  <main class="container mt-5">

    <section class="noticia">
      <h1 class="mb-5"><?= $noticia->title ?></h1>
      <img class="noticia-image" src="<?= $noticia->img ?>" alt="...">
      <p class="lead mt-3"><?= $noticia->text ?></p>
    </section>


  </main>

  <!-- footer -->
<?php require_once 'templates/footer.php';
}

function show404(){
    //  <!-- header -->
    require_once 'templates/header.php'; ?>

    <!-- main section -->
    <main class="container mt-5">
      <h1 class="text-center mt-5">ERROR 404</h1>  
      <p class="text-center mb-5">Página no encontrada</p>  
    </main>
  
    <!-- footer -->
  <?php require_once 'templates/footer.php';

}