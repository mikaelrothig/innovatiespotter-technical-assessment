<?php

include '../Classes/CompanyClass.php';

use Classes\CompanyClass;

$company = new CompanyClass();

$input1 = [
    'name' => ' OpenAI ',
    'website' => 'https://openai.com ',
    'address' => ' '
];
$input2 = [
    'name' => 'Innovatiespotter',
    'address' => 'Groningen'
];
$input3 = [
    'name' => ' Apple ',
    'website' => '<HIDDEN INPUT> '
];

$testCases = [$input1, $input2, $input3];