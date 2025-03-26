# Innovatiespotter Technical Assessment

Code for an Innovatiespotter technical assessment aimed at showcasing my PHP development skills, with an emphasis on clean code, validation, and SQL management.

## Task 1 - Refactoring

Refactored PHP code designed to demonstrate best practices in code readability, validation, and performance optimization.

The following changes were made:

1. Updated `return` to `return null` to satisfy the expected return type of `array|null`.
2. Renamed `$c` to `$normalizedCompanyData` for better readability.
3. `isCompanyDataValid` used `isset($data[0])`. This is incorrect as `$data` is an associative array. The function was updated to check if keys `name`, and `address` exist. `website` was not added as it seems to be an optional entry.
4. The `isset($data['address'])` if check was removed as `isCompanyDataValid` has already done this.
5. Added if check for whether `$data['website']` exists.
6. `$cleanWebsite` is an undefined variable. It's been renamed and defined as `normalisedWebsite` for consistency. `FILTER_VALIDATE_URL` and `PHP_URL_HOST` filters were used instead of a regex match as I think it's a cleaner approach. `Trim` was used to ensure the if check works as intended.

## Task 2 - SQL Queries

Additionally, the repository includes SQL queries relevant to the task, demonstrating a hands-on understanding of working with databases in a PHP environment.