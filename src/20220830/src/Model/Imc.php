<?php
    namespace App\Model;

    class Imc {
        private $altura;
        private $peso;

        public function __construct($altura=0, $peso=0) {
            $this->altura = $altura;
            $this->peso = $peso;
        }

        public function getAltura() {
            return $this->altura;
        }
        public function getPeso() {
            return $this->peso;
        }
        public function setAltura($altura) {
            $this->altura = $altura;
        }
        public function setPeso($peso) {
            $this->peso = $peso;
        }

        public function getImc() {
            return $this->peso/($this->altura * $this->altura);
        }

        public function getClassificacao() {
            if ($this->getAltura() == 0 || $this->getPeso() == 0) {
                return false;
            }
            $imc = $this->getImc();
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
    }
