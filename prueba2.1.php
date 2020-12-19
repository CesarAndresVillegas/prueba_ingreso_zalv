<?php
require_once 'ClassZalvadora.php';

$response = Zalvadora::question2_1($_GET);
print_r($response);