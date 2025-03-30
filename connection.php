<?php

class Database
{

  public $connection;

  public function __construct($config, $username = 'root', $password = '')
  {
    try {
      $dsn = 'mysql:' . http_build_query($config, '', ';');

      $this->connection = new PDO($dsn, $username, $password, [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      ]);
    } catch (PDOException $e) {

      $errorCode = $e->getCode();

      $statusCode = ($errorCode == '42S02') ? RESPONSE::BAD_REQUEST : RESPONSE::INTERNAL_SERVER_ERROR;

      abort($statusCode);
    }
  }

  public function query($query, $params = [])
  {

    $stmt = $this->connection->prepare($query);
    $stmt->execute($params);

    return $stmt;
  }
}