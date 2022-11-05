<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_true_is_true(){
        $v = 3 < 5;
        $this->assertTrue($v);
    }

    public function test_nome_tem_mais_que_dez_letras(){
        // Arranje (cria o cenario)
        $nome='Dona Maria';
        
        // Act (executar o código sob teste)
        $k = strlen($nome);

        //Assert (valida o resultado)
        $this->assertGreaterThan(10, $k);
    }
}
