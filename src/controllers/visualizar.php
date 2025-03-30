<?php
$config = require('config.php');
$db = new Database($config['devConfig']);

$heading = "Lista de clientes";

$clientes = $db->query("SELECT * FROM clientes")->fetchAll();

require "src/views/visualizar.view.php";