<?php 

declare(strict_types=1);

namespace App\Entities\Calculadora;

class Calculadora 
{
    public function somar($a, $b) {
        return $a + $b;
    }

    public function subtrair($a, $b) {
        return $a - $b;
    }
}