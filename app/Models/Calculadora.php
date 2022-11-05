<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Calculadora extends Model{

    public function soma ($a, $b){
        return $a + $b;
    }

    public function divide($a, $b){
        if($b == 0)return null;
        return $a / $b;
    }
    public function divisao_inteira($dividendo, $divisor){
        $quociente = 0;

        if($dividendo >=0 && $divisor >0)
        while($dividendo > $divisor) {
            $dividendo -= $divisor;
            $quociente++;
        }

        if($dividendo < 0 && $divisor <0)
        while($dividendo < $divisor) {
            $dividendo += $divisor * -1;
            $quociente++;
        }
        
        return['quociente' => $quociente, 'resto' => $dividendo];

    }
}
