<?php

require 'vendor/autoload.php';
require_once 'ClassZalvadora.php';

use PHPUnit\Framework\TestCase;

class ClassZalvadoraTest extends TestCase {
    public function test_question2_1()
    {
        $response = Zalvadora::question_2_1();
        $this->assertEquals(1, $response);
    }    
}