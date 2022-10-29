<?php

namespace App\model;

require_once "../model/Pergunta.php";


$pergunta = new Pergunta();

$pergunta->setPergunta($_POST["pergunta"]);
$pergunta->setStatus($_POST["status"]);

$pergunta->criar();
