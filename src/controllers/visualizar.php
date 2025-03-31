<?php
$baseRoute = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');

$config = require('config.php');
$db = new Database($config['devConfig']);

$heading = "Lista de clientes";

$clientes = $db->query("SELECT * FROM clientes")->get();

require "src/views/visualizar.view.php";
