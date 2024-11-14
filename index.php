<?php

// $divide = function ($x, $y) {
//     if ($y == 0) {
//         echo "Cannot divide by zero!\n";
//         return null;
//     } else {
//         return $x / $y;
//     }
// };

// $divide = fn($x, $y) => $y == 0 ? "Cannot divide by zero!\n" : $x / $y;
$divide = fn($x, $y) => $y == 0 ? "Cannot divide by zero!\n" : $x / $y;

// $result = $divide(6, 3);
// echo $result . "\n";

$numbers = [1, 2, 3, 4, 5];
$square = array_map(fn($n) => $n * $n, $numbers);
$evenNumbers = array_filter($numbers, fn($n) => $n % 2 === 0);

print_r($square);
print_r($evenNumbers);

// $second_arg_isnt_zero = function ($func) {
//     return function (...$args) use ($func) {
//         if ($args[1] == 0) {
//             echo "Cannot divide by zero!\n";
//             return null;
//         }
//         return $func(...$args);
//     };
// };

$second_arg_isnt_zero = fn($func) => fn(...$args) => $args[1] == 0 ? "Cannot divide by zero!\n" : $func(...$args);

$divide_safe = $second_arg_isnt_zero($divide);

echo $divide_safe(10, 0) . "\n";
