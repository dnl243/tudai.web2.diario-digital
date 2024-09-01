<!DOCTYPE html>
<html lang="en">

<?php require_once 'templates/head.php'; ?>

<body>

  <!-- header -->
  <?php require_once 'templates/header.php'; ?>

  <!-- main section -->
  <main class="container mt-5">
    <section class="row justify-content-center align-items-center">
      <form action="subscription.php" style="width: 25rem;">
        <div class="mb-3">
          <label for="name" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">No compartiremos su email con nadie más.</div>
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="agreeCheck" name="agree">
          <label class="form-check-label" for="agreeCheck">Acepto los términos y condiciones</label>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>

    </section>

    <p>
      <?php
      $subscribers = [];
      if (!empty($_POST['name']) && !empty($_POST['name'])) {
        $subs = new stdClass();
        $subs->name =  $_POST['name'];
        $subs->email =  $_POST['email'];
        $subscribers[] = $subs;
      }
      ?>
    </p>

  </main>

  <!-- footer -->
  <?php require_once 'templates/footer.php'; ?>

</body>

</html>