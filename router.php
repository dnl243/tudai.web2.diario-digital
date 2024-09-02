<?php
require_once 'noticias.php';
require_once 'about.php';
require_once 'subscription.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

/**
 *  action            function

 *  /home             showNoticias();
 *  /noticia/:id      showNoticiaById($id);
 *  /about            showAbout();
 *  /about/:dev       showAbout($dev);
 *  /subscription     showSubscription();
 *  /error            show404();
 */

// el router va a leer la acción desde el parámetro "action"

//  if (isset($_GET['action'])) {
//    $action = $_GET['action'];
//  } else {
//      $action = 'home';
//  }

$action = empty($_GET['action']) ? 'home' : $_GET['action'];

//parsea el parámetro Ej: noticia/1 --> ['noticia', 1]
//parsea el parámetro Ej: about/franco --> ['about', 'franco']
$params = explode('/', $action);

// var_dump($params);
// die();

switch ($params[0]) {
  case 'home':
    showNoticias();
    break;
  case 'noticia':
    showNoticiaById($params[1]);
    break;
  case 'about':
    isset($params[1]) ?
      showAbout($params[1]) :
      showAbout();
    break;
  case 'subscription':
    showSubscription();
    break;
  default:
    show404();
    break;
}
