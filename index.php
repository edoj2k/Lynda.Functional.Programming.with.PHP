<?php

$numbers = [1, 2, 3, 4, 5, 6];

$even_numbers = [];
for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] % 2 == 0) {
        $even_numbers[] = $numbers[$i];
    }
}

print_r($even_numbers);

$even = array_values(array_filter($numbers, fn($x) => $x % 2 == 0));

print_r($even);
