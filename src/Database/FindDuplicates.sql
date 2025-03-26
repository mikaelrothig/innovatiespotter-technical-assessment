SELECT LOWER(TRIM(name))                 AS normalized_name,
       COUNT(*)                          AS frequency,
       STRING_AGG(DISTINCT source, ', ') AS sources
FROM companies
GROUP BY normalized_name
HAVING count(*) > 1