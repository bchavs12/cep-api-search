<?php
$config = require('config.php');
$db = new Database($config['devConfig']);

$heading = "Registro de clientes";

require "src/views/cadastrar.view.php";