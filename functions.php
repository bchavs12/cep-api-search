<?php

// Obtém o diretório base do projeto dinamicamente (Não remover);
$basePath = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');

function abort($code = Response::NOT_FOUND)
{
  http_response_code($code);

  require("src/exceptions/{$code}.php");

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