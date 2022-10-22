<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["altura"]) && isset($_GET["peso"])) {
        $peso = $_GET["peso"];
        $altura = $_GET["altura"];

        if ($peso == 0 || $altura == 0) {
            echo "<h1>Erro.</h1>";
            echo "<div>O peso ou a altura não podem ser zero.</div>";
            exit();
        }

        $IMC = $peso / ($altura * $altura);

        $classificacao;
        $obesidade;

        if ($IMC < 18.5) {
            $classificacao = "MAGREZA";
            $obesidade = 0;
        } else if ($IMC < 25) {
            $classificacao = "NORMAL";
            $obesidade = 0;
        } else if ($IMC < 30) {
            $classificacao = "SOBREPESO";
            $obesidade = 1;
        } else if ($IMC < 40) {
            $classificacao = "OBESIDADE";
            $obesidade = 2;
        } else {
            $classificacao = "OBESIDADE GRAVE";
            $obesidade = 3;
        }

        echo "<h1>Seu IMC é {$IMC}.</h1>";
        echo "<div>Peso: {$peso}</div>";
        echo "<div>Altura: {$altura}</div>";
        echo "<div>Classificação: {$classificacao}</div>";
        echo "<div>Obesidade: {$obesidade}</div>";
    }
}

http_response_code(400);
