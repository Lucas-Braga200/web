<?php
    namespace Tests;

    use App\model\IMC;
    use PHPUnit\Framework\TestCase;

    class IMCTest extends TestCase {
        public function testPeso() {
            $imc = new IMC(10, 10);
            $this->assertNotNull($imc->getPeso());
        }

        public function testAltura() {
            $imc = new IMC(10, 10);
            $this->assertNotNull($imc->getAltura());
        }

        public function testCalculaIMC() {
            $peso = 72;
            $altura = 1.75;
            $imc_calculado = $peso / ($altura * $altura);
            $imc = new IMC($peso, $altura);
            $this->assertEquals($imc_calculado, $imc->getIMC());
        }

        public function testVerificaDivisaoPorZero() {
            $peso = 72;
            $altura = 0;
            $imc = new IMC($peso, $altura);
            $this->assertNull($imc->getIMC());
        }

        public function testVerificaClassificacao() {
            $peso = 50;
            $altura = 1.75;
            $imc = new IMC($peso, $altura);
        }

        public function testVerificaClassificacaoMagreza() {
            $peso = 50;
            $altura = 1.75;
            $imc = new IMC($peso, $altura);
            $this->assertEquals("Magreza", $imc->getClassificacao());
        }

        public function testVerificaClassificacaoNormal() {
            $peso = 60;
            $altura = 1.75;
            $imc = new IMC($peso, $altura);
            $this->assertEquals("Normal", $imc->getClassificacao());
        }

        public function testVerificaClassificacaoSobrepeso() {
            $peso = 80;
            $altura = 1.75;
            $imc = new IMC($peso, $altura);
            $this->assertEquals("Sobrepeso", $imc->getClassificacao());
        }
    }
