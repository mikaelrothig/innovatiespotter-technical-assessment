<?php

namespace Classes;
class CompanyClass
{
    public function normalizeCompanyData(array $data): ?array
    {
        $normalizedCompanyData = [];

        if (!$this->isCompanyDataValid($data)) {
            return null;
        }

        $normalizedCompanyData['name'] = strtolower(trim($data['name']));

        if (!empty($data['website'])) {
            $normalizedWebsite = trim($data['website']);

            if (filter_var($normalizedWebsite, FILTER_VALIDATE_URL)) {
                $normalizedCompanyData['website'] = parse_url($normalizedWebsite, PHP_URL_HOST);
            }
        }

        if (!empty($data['address'])) {
            $normalizedCompanyData['address'] = trim($data['address']);
        }
        else {
            $normalizedCompanyData['address'] = null;
        }

        return $normalizedCompanyData;
    }
    private function isCompanyDataValid(array $data): bool
    {
        return isset($data['name'], $data['address']);
    }
}

// Test Data
$input = [
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

$company = new CompanyClass();

$result = $company->normalizeCompanyData($input);
var_dump($result);
$result2 = $company->normalizeCompanyData($input2);
var_dump($result2);
$result3 = $company->normalizeCompanyData($input3);
var_dump($result3);