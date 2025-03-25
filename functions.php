<?php

// Obtém o diretório base do projeto dinamicamente
$basePath = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));

function abort($code = 404)
{
  http_response_code($code);

  require("views/exceptions/{$code}.php");

  die();
}

/**
 * @dd(die & dump) -> use to debug the code
 */
function dd($value)
{
  echo "<pre>";
  var_dump($value);
  echo "<pre>";

  die();
}

function urlIs($value)
{
  return $_SERVER['REQUEST_URI'] === $value;
}