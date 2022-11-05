<?php
    namespace Tests;

    use App\Model\Pergunta;
    use PHPUnit\Framework\TestCase;

    class PerguntaTest extends TestCase {
        public function testUsuario() {
            $pergunta = new Pergunta();
            $this->assertNotNull($pergunta->getConexao());
        }
    }
