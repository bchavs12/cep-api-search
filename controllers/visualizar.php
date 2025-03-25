<?php
include 'connection.php';

$heading = "Lista de clientes";

try {
  if ($pdo) {
    $query = "SELECT * FROM clientes";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    require "views/visualizar.view.php";
  }
} catch (PDOException $e) {

  $errorCode = $e->getCode();

  $statusCode = ($errorCode == '42S02') ? 400 : 500;

  abort($statusCode);
}