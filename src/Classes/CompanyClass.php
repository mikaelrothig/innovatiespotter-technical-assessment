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