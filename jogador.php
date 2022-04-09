<?php

// create table jogadores ( id INT NOT NULL AUTO_INCREMENT, nome VARCHAR(255), posicao VARCHAR(255), overall INT, PRIMARY KEY (id));

require_once("config.php");
require_once(__DIR__ . "/vendor/autoload.php");

$controller = new Controller\JogadorController();
$controller->selectOne();