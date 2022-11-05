<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Calculadora;
use Tests\TestCase;

class CalculadoraTest extends TestCase {
    
    // caso teste 01
    public function test_soma_dois_numeros_positivos()
    {
        //arranje(organiza)
        $calc = new Calculadora();

        //act(executa)
        $resp = $calc->soma(7, 12);

        //assert(verifica)
        $this->assertEquals(19, $resp);

    }

    // caso teste 02
    public function test_divide_numeros_inteiros(){
        $calc = new Calculadora();
        $result = $calc->divide(30,5);
        $this->assertEquals(6, $result);
        
    }

    public function test_resolve_divisao_por_zero(){
        $calc = new Calculadora();
        $result = $calc->divide(30,0);
        $this->assertEquals(null, $result);
        
    }

    public function test_faz_divisao_inteira_para_numeros_positivos(){
        $calc = new Calculadora();
        $v = $calc->divisao_inteira(16,3);
        $this->assertEquals(1,$v['resto']);
        $this->assertEquals(5,$v['quociente']);
    }

    public function test_faz_divisao_inteira_para_numeros_negativos(){
        $calc = new Calculadora();
        $v = $calc->divisao_inteira(-16,-3);
        $this->assertEquals(-1,$v['resto']);
        $this->assertEquals(5,$v['quociente']);
    }
   
}

