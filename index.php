<?php

$numbers = [1, 2, 3, 4, 5, 6];

$doubled_numbers = [];
for ($i = 0; $i < count($numbers); $i++) {
    $doubled = $numbers[$i] * 2;
    $doubled_numbers[] = $doubled;
}

print_r($doubled_numbers);

$double = fn($x) => $x * 2;
$result = array_map($double, $numbers);

print_r($result);
