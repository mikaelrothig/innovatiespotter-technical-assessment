SELECT source, COUNT(*) AS company_count
FROM companies
GROUP BY source
ORDER BY company_count DESC;