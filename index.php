<?php
$add = fn($x, $y) => $x + $y;

$subtract = fn($x, $y) => $x - $y;

// $combine_2_and_3 = function ($func) {
//     return $func(2, 3);
// };
$x = 2;
$y = 3;

$combine_2_and_3 = fn($func) => $func($x, $y);

echo $combine_2_and_3($subtract) . "\n";

$combine_names = fn($func) => $func('naufal', 'aziz');

$append_with_space = fn($str_1, $str_2) => $str_1 . " " . $str_2;

$government_form_notation = fn($str_1, $str_2) => strtoupper($str_2) . ", " . strtoupper($str_1);

// echo $combine_names($append_with_space) . "\n";
echo $combine_names(fn($str_1, $str_2) => $str_1 . " " . $str_2) . "\n";

// echo $combine_names($government_form_notation) . "\n";
echo $combine_names(fn($str_1, $str_2) => strtoupper($str_2) . ", " . strtoupper($str_1)) . "\n";
