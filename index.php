<?php

$employees = [
    [
        'name' => 'Naufal',
        'age' => 18,
        'salary' => 90000,
        'job_title' => 'developer'
    ],
    [
        'name' => 'Rafi',
        'age' => 16,
        'salary' => 110000,
        'job_title' => 'developer'
    ],
    [
        'name' => 'Sulthan',
        'age' => 13,
        'salary' => 35000,
        'job_title' => 'construction worker'
    ],
    [
        'name' => 'Rajwa',
        'age' => 11,
        'salary' => 55000,
        'job_title' => 'digital marketing specialist'
    ]
];

$developers = array_filter($employees, fn($x) => $x['job_title'] == 'developer');
$developer_salaries = array_map(fn($x) => $x['salary'], $developers);
$total_developer_salaries = array_reduce($developer_salaries, fn($carry, $item) => $carry + $item);
$average_developer_salary = $total_developer_salaries / count($developer_salaries);

$non_developers = array_filter($employees, fn($x) => $x['job_title'] != 'developer');
$non_developer_salaries = array_map(fn($x) => $x['salary'], $non_developers);
$total_non_developer_salaries = array_reduce($non_developer_salaries, fn($carry, $item) => $carry + $item);
$average_non_developer_salary = $total_non_developer_salaries / count($non_developer_salaries);

print_r($developers);
print_r($developer_salaries);
echo ($total_developer_salaries) . "\n";
echo "The average developer salary is $average_developer_salary \n";

print_r($non_developers);
print_r($non_developer_salaries);
echo ($total_non_developer_salaries) . "\n";
echo "The average non developer salary is $average_non_developer_salary \n";
