<?php
require_once 'ClassZalvadora.php';

$response = Zalvadora::question2_3($_GET);
$size = $_GET['N'];
if((int)$response) {
    for($i=0; $i<$size; $i++) {
        for($j=0; $j<$size; $j++) {
            print_r(" " . $response[$i][$j]);
        }
        print_r("<br />");
    }
}
else {
    print_r($response);
}