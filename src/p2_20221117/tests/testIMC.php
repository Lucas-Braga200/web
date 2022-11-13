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
            $this->assertEquals("Magreza", $imc->getClassificacao());

            $peso = 70;
            $altura = 1.80;
            $imc = new IMC($peso, $altura);
            $this->assertEquals("Normal", $imc->getClassificacao());
            
            $peso = 90;
            $altura = 1.80;
            $imc = new IMC($peso, $altura);
            $this->assertEquals("Sobrepeso", $imc->getClassificacao());

            $peso = 100;
            $altura = 1.80;
            $imc = new IMC($peso, $altura);
            $this->assertEquals("Obesidade I", $imc->getClassificacao());

            $peso = 120;
            $altura = 1.80;
            $imc = new IMC($peso, $altura);
            $this->assertEquals("Obesidade II", $imc->getClassificacao());

            $peso = 130;
            $altura = 1.80;
            $imc = new IMC($peso, $altura);
            $this->assertEquals("Obesidade III", $imc->getClassificacao());
        }

        public function testVerificaGrau() {
            $peso = 50;
            $altura = 1.75;
            $imc = new IMC($peso, $altura);
            $this->assertEquals(0, $imc->getGrau());

            $peso = 70;
            $altura = 1.80;
            $imc = new IMC($peso, $altura);
            $this->assertEquals(0, $imc->getGrau());
            
            $peso = 90;
            $altura = 1.80;
            $imc = new IMC($peso, $altura);
            $this->assertEquals(0, $imc->getGrau());

            $peso = 100;
            $altura = 1.80;
            $imc = new IMC($peso, $altura);
            $this->assertEquals(1, $imc->getGrau());

            $peso = 120;
            $altura = 1.80;
            $imc = new IMC($peso, $altura);
            $this->assertEquals(2, $imc->getGrau());

            $peso = 130;
            $altura = 1.80;
            $imc = new IMC($peso, $altura);
            $this->assertEquals(3, $imc->getGrau());
        }
    }
