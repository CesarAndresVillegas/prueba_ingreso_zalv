<?php

require 'vendor/autoload.php';
require_once 'ClassZalvadora.php';

use PHPUnit\Framework\TestCase;

class ClassZalvadoraTest extends TestCase {
    /**
     * @test
     * @dataProvider question2_1Provider
     */
    public function test_question2_1($multiplier, $word, $expected)
    {
        $response = Zalvadora::question2_1(array('N' => $multiplier, 'S' => $word));
        $this->assertEquals($expected, $response);
    }    

    public function question2_1Provider() {
        $errorText = 'Los parámetros están incompletos o con formato errado. Recuerda que los parámetros requeridos son N (númerico - multiplica la palabra) y S (palabra que se multiplicada)';
        // primer elemento input N requerido en el problema
        // segundo elemento input S requerido en el problema
        // tercer elemento retorno esperado 
        return [
            'Prueba 1' => [2, 'Hola', 'HolaHola'],
            'Prueba 2' => [3, '=)', '=)=)=)'],
            'Prueba 3' => [0, 'Hola', $errorText],
            'Prueba 4' => ['2', 'Hola', 'HolaHola'],
            'Prueba 5' => [null, 'Hola', $errorText],
            'Prueba 6' => [2, null, $errorText],
            'Prueba 7' => [null, null, $errorText],
            'Prueba 8' => ['hola', "Hola", $errorText],
            'Prueba 9' => [3, 4, 444]
        ];
    }
}