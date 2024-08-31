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
  <?php
  require_once 'db_devs.php';
  $developers = getDevelopers();
  ?>

  <!-- main section -->
  <main class="container mt-5">
    <h1>About</h1>

    <div class="row">
      <div class="col">
        <div class="list-group">
          <?php foreach ($developers as $developer) : ?>
            <a href="about.php?dev=<?= $developer->id; ?>" class="list-group-item list-group-item-action">
              <?= $developer->name; ?>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="col">
        <?php
        if (!empty($_GET['dev'])) {
          $dev = $_GET['dev'];
          $developer = getDevelopersById($dev);
        ?>
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h4 class="card-title"><?= $developer->name; ?></h4>
              <h5 class="card-subtitle"><?= $developer->role; ?></h5>
              <p><?= $developer->email; ?></p>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>

  </main>

  <!-- footer -->
  <?php
  require_once 'templates/footer.php';
  ?>

</body>

</html>