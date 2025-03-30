<?php

include __DIR__ . '/../Classes/CompanyClass.php';

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

// Run tests
echo "Testing input 1:\n";
$result1 = $company->normalizeCompanyData($input1);
var_dump($result1);

echo "\nTesting input 2:\n";
$result2 = $company->normalizeCompanyData($input2);
var_dump($result2);

echo "\nTesting input 3:\n";
$result3 = $company->normalizeCompanyData($input3);
var_dump($result3);