<?php

$names_1 = [
    'naufal',
    'rafi',
    'sulthan',
    'rajwa'
];

$names_2 = [
    'irfa',
    'zahran',
    'dedek',
    'umar'
];

$all_names = [
    'vivi',
    ...$names_1,
    'imah',
    ...$names_2,
    'ferry'
];

print_r($all_names);

$person_data = [
    'name' => 'naufal',
    'age' => 18
];

$career_data = [
    'name' => 'rafi',
    'job' => 'developer',
    'salary' => 12000
];

$person_with_career_data = array_merge(
    $person_data,
    $career_data
);

print_r($person_with_career_data);

$add = function (...$args) {
    $sum = 0;
    for ($i = 0; $i < count($args); $i++) {
        $sum += $args[$i];
    }
    return $sum;
};

echo $add(1, 2, 3, 4, 5, 6, 7) . "\n";

$numbers_to_add = [1, 2, 3, 4, 5, 6, 7];
echo $add(...$numbers_to_add) . "\n";

$number = [1, 2, 3, 4, 5, 6, 7];
$sum = array_reduce($number, fn($carry, $item) => $carry + $item);

echo $sum . "\n";
