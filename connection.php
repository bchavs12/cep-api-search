<?php

$host = "localhost";
$port = "3306";
$dbname = "meu_bd";
$username = "root";
$password = "";

// Tenta conectar ao banco de dados
try {
  $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
  $pdo = new PDO($dsn, $username, $password, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ]);
} catch (PDOException $e) {
  $errorCode = $e->getCode();

  /**
   * $errorCode == '1049': Isso verifica se o código de erro retornado pelo PDOException é igual a '1049', que é o código de erro do MySQL para "Banco de dados desconhecido" (database not found).
   */

  $statusCode = ($errorCode == '1049') ? 500 : 503;

  abort($statusCode);
}