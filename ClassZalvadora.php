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

    public static function question2_2($getParams){
        $limitNumber = (int)$getParams["N"];
        // reduce process charge
        if($limitNumber == 2) {
            $response = '2';
        }
        else if($limitNumber>=2) {
            $currentNumber=2;
            $response = '';
            while ($currentNumber < $limitNumber) {  
                $divisorCounter=0;  
                for ($i=1; $i<=$currentNumber; $i++) {  
                    if (($currentNumber%$i)==0) {  
                        $divisorCounter++;
                        // if has more than 2 divisor is not prime number
                        // so, break reduce nor necessary process
                        if($divisorCounter >=3) {
                            break;
                        }  
                    }  
                }  
                // if only can be divided by 2 values is prime
                if ($divisorCounter<3) {  
                    $response .= "$currentNumber, ";
                }  
                $currentNumber=$currentNumber+1;  
            }
            // delete last ,_ chars
            $response = substr($response, 0, -2);
        }
        // verify no valid N param
        else {
            $response = 'El número no es válido, debe ser mayor a 2 y debe estar en el parámetro N del get';
        }
        return $response;
    }
}