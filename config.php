<?php

function loadContent()
{
  // Página padrão
  $page = isset($_GET['page']) ? $_GET['page'] : 'home';

  // Remove caracteres perigosos
  $safePage = preg_replace('/[^a-zA-Z0-9\/_-]/', '', $page);

  // Caminho da página
  $path = __DIR__ . '/page/' . $safePage . '.php';

  // Verifica se a página existe
  if (file_exists($path)) {
    require_once($path);
  } else {
    require_once(__DIR__ . '/404.php');
  }
}

function bootstrap()
{
  // Header
  require_once(__DIR__ . '/template/header.php');

  // Conteúdo da página
  loadContent();

  // Footer
  require_once(__DIR__ . '/template/footer.php');
}

// Inicializa o sistema
bootstrap();
