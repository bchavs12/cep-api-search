<?php
include 'connection.php';

$heading = "Registro de clientes";

try {
  if ($pdo) {

    require "views/cadastrar.view.php";
  }
} catch (PDOException $e) {

  $errorCode = $e->getCode();

  $statusCode = ($errorCode == '42S02') ? 400 : 500;

  abort($statusCode);
}
