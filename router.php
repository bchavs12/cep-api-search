<?php

// Obtém o caminho da URL atual
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Remove o diretório base da URI para tornar as rotas independentes do nome da pasta
$uri = str_replace($basePath, '', $uri);
$uri = rtrim($uri, '/') ?: '/';

$routes = [
  '/' => 'controllers/index.php',
  '/cadastrar' => 'controllers/cadastrar.php',
  '/visualizar' => 'controllers/visualizar.php'
];

function routeToController($uri, $routes)
{
  if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
  } else {
    abort();
  }
}

routeToController($uri, $routes);