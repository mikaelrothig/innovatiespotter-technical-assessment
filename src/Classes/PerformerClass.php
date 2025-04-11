<?php
/**
 * PHP DEVELOPER ASSESSMENT
 *
 * This file includes TWO tasks. Both must be completed.
 *
 * ---
 *
 * TASK 1: DEBUGGING + LOGIC
 *
 * You are given a function that determines the best performer based on score-per-attempt ratio.
 *
 * Your implementation must:
 * - Return the correct performer based on the ratio
 * - In case of equal ratios, the first user in the list should be returned
 * - Ensure your logic is accurate, not just producing seemingly correct output
 */

function getBestPerformer(array $users): ?string {
    $bestRatio = 0;
    $bestName = null;

    foreach ($users as $user) {
        if ($user['attempts'] == 0) {
            continue;
        }

        $ratio = $user['score'] / $user['attempts'];

        if ($ratio > $bestRatio) {
            $bestRatio = $ratio;
            $bestName = $user['name'];
        }
    }
    return $bestName;
}

// Input dataset
$users = [
    ['name' => 'Nikos', 'score' => 116, 'attempts' => 4],
    ['name' => 'Matteo', 'score' => 177, 'attempts' => 6],
    ['name' => 'Mikael', 'score' => 90, 'attempts' => 3],
    ['name' => 'Jeff', 'score' => 90, 'attempts' => 3],
    ['name' => 'Stan', 'score' => 150, 'attempts' => 0],
    ['name' => 'Stan', 'score' => 120, 'attempts' => null],
];

$result = getBestPerformer($users);
echo "Best performer: " . ($result ?? 'None') . PHP_EOL;