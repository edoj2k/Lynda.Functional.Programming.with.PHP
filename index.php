<?php

$employees = [
    [
        'name' => 'Naufal',
        'years_of_service' => 18,
    ],
    [
        'name' => 'Rafi',
        'years_of_service' => 15
    ],
    [
        'name' => 'Sulthan',
        'years_of_service' => 13
    ],
    [
        'name' => 'Rajwa',
        'years_of_service' => 11
    ]
];

function array_usort($array, $comparator_func)
{
    usort($array, $comparator_func);
    return $array;
}

$years_of_service_comparator = function ($a, $b) {
    // if ($a['years_of_service'] < $b['years_of_service']) {
    //     return -1;
    // } else if ($a['years_of_service'] > $b['years_of_service']) {
    //     return 1;
    // } else {
    //     return 0;
    // }
    return $a['years_of_service'] - $b['years_of_service'];
};

$sorted_employees = array_usort($employees, $years_of_service_comparator);

print_r($sorted_employees);
