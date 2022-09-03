<?php
    namespace App\Model;

    class Imc {
        private $altura;
        private $peso;

        function __construct($altura, $peso) {
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
    }
