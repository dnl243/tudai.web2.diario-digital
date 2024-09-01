<?php
require_once 'noticias.php';

/**
*  action            function
*  /home             showNoticias();
*  /noticia/:id      showNoticiaById($id);
*  /about            showAbout();
*  /about/:dev       showAbout($dev);
*
*/

// el router va a leer la acción desde el parámetro "action"

$action = $_GET['action'];

switch ($action) {
  case 'home':
    showNoticias();
    break;
  case 'noticia':
    showNoticiaById(0);
    break;  
}

