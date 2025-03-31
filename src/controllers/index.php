<?php

$baseRoute = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');

$heading = "Registro e pesquisa de endereços";

require "src/views/index.view.php";