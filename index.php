<?php

$letters = ['a', 'b', 'c', 'd', 'e'];
$numbers = [1, 2, 3, 4, 5];

// $pairs = array_map(fn($letter, $number) => "$letter$number", $letters, $numbers);

$pairs = array_map(fn($letter, $index) => "The letter at position $index is $letter", $letters, array_keys($letters));

print_r($pairs);
