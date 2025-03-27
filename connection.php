<?php

// Connect to the database, and execute a query
class Database
{

  public function query($query)
  {

    $dsn = "mysql:host=localhost;port=3306;dbname=meu_bd;user=root;charset=utf8mb4;";

    $pdo = new PDO($dsn);

    $stmt = $pdo->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
