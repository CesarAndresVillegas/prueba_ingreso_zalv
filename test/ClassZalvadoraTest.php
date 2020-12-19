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
        // first element input N required by problem
        // second element input S required by problem
        // third element -> return expected 
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

    /**
     * @test
     * @dataProvider question2_2Provider
     */
    public function test_question2_2($limitNumber, $expected)
    {
        $response = Zalvadora::question2_2(array('N' => $limitNumber));
        $this->assertEquals($expected, $response);
    }    

    public function question2_2Provider() {
        $errorText = 'El número no es válido, debe ser mayor a 2 y debe estar en el parámetro N del get';
        // first item -> N input value required by the problem
        // second item -> expected value
        return [
            'Prueba 1' => [10, '2, 3, 5, 7'],
            'Prueba 2' => [2, '2'],
            'Prueba 3' => [0, 'El número no es válido, debe ser mayor a 2 y debe estar en el parámetro N del get'],
            'Prueba 4' => ['10', '2, 3, 5, 7'],
            'Prueba 5' => ['hola', $errorText],
            'Prueba 6' => [null, $errorText]
        ];
    }

    /**
     * @test
     * @dataProvider question2_3Provider
     */
    public function test_question2_3($size, $expected)
    {
        $response = Zalvadora::question2_3(array('N' => $size));
        $this->assertEquals(typeof($expected), typeof($response));
    }    

    public function question2_3Provider() {
        $textAux = 'auxiliar test';
        $arrayAux = [];
        // first item -> N input value required by the problem
        // second item -> expected value
        return [
            'Prueba 1' => [2, []],
            'Prueba 1' => [0, 'error'],
            'Prueba 1' => ['hola', 'error']
        ];
    }
}