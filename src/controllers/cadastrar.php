<?php
$baseRoute = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');

// Definir scripts específicos para esta página
$scripts = require('src/js/scripts.php');


// database config
$config = require('config.php');
$db = new Database($config['devConfig']);

$heading = "Registro de clientes";

$insert_clientes = "INSERT INTO clientes (cli_nome, cli_logradouro, cli_numero, cli_complemento, cli_bairro, cli_cidade, cli_uf, cli_cep) VALUES (:nome, :logradouro, :numero, :complemento, :bairro, :cidade, :uf, :cep);";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $db->query($insert_clientes, [
    'nome' => $_POST['nome'],
    'logradouro' => $_POST['logradouro'],
    'numero' => $_POST['numero'],
    'complemento' => $_POST['complemento'],
    'bairro' => $_POST['bairro'],
    'cidade' => $_POST['cidade'],
    'uf' => $_POST['uf'],
    'cep' => $_POST['cep']
  ]);

  require_once "src/views/cadastrado.view.php";
} else {
  require_once "src/views/cadastrar.view.php";
}