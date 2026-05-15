<?php

define('BASE_URL', '/gsmicros/');

function loadContent()
{
  $page = isset($_GET['page']) ? $_GET['page'] : 'home';

  // Remove caracteres perigosos
  $safePage = preg_replace('/[^a-zA-Z0-9\/_-]/', '', $page);

  // Caminhos possíveis
  $pagePath = __DIR__ . '/page/' . $safePage . '.php';
  $filePath = __DIR__ . '/files/' . $safePage . '.php';

  // Verifica primeiro em /page
  if (file_exists($pagePath)) {

    require_once($pagePath);

    // Depois verifica em /files
  } elseif (file_exists($filePath)) {

    require_once($filePath);
  } else {

    require_once(__DIR__ . '/404.php');
  }
}

function bootstrap()
{
  require_once(__DIR__ . '/template/header.php');

  loadContent();

  require_once(__DIR__ . '/template/footer.php');
}

bootstrap();
