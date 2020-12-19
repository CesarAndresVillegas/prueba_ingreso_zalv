<?php

class Zalvadora {
    public static function question2_1($getParams) {
        $multiplier = $getParams["N"];
        $word = $getParams["S"];
        // verify N and S param and the types of var
        $response = $multiplier && $word && is_numeric($multiplier) ?
        str_repeat($word, $multiplier) :
        'Los parámetros están incompletos o con formato errado. Recuerda que los parámetros requeridos son N (númerico - multiplica la palabra) y S (palabra que se multiplicada)';
        return $response;
    }
}