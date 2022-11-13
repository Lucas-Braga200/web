<?php
namespace App\model;

class IMC {
    private $peso;
    private $altura;

    function __construct($peso=null, $altura=null) {
        $this->peso = $peso;
        $this->altura = $altura;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getIMC() {
        if ($this->altura == 0) {
            return null;
        }

        if ($this->peso == 0) {
            return null;
        }

        return $this->peso / ($this->altura * $this->altura);
    }

    public function getClassificacao() {
        $imc = $this->getIMC();

        if ($imc == null) {
            return null;
        }

        if ($imc < 18.5) {
            return "Magreza";
        } else if ($imc < 25) {
            return "Normal";
        } else if ($imc < 30) {
            return "Sobrepeso";
        } else if ($imc < 35) {
            return "Obesidade I";
        } else if ($imc < 40) {
            return "Obesidade II";
        } else {
            return "Obesidade III";
        }
    }

    public function getGrau() {
        $imc = $this->getIMC();

        if ($imc == null) {
            return null;
        }

        if ($imc < 18.5) {
            return 0;
        } else if ($imc < 25) {
            return 0;
        } else if ($imc < 30) {
            return 0;
        } else if ($imc < 35) {
            return 1;
        } else if ($imc < 40) {
            return 2;
        } else {
            return 3;
        }
    }
}
