<?php

// $create_printer = function () {
//     return function () {
//         echo "Hello functional!\n";
//     };
// };

$create_printer = fn() => fn() => "Hello functional!\n";

$my_printer = $create_printer();
echo $my_printer();

// $double = fn($x) => $x * 2;
// $triple = fn($x) => $x * 3;
// $quadruple = fn($x) => $x * 4;

// $create_multiplier = function ($y) {
//     return function ($x) use ($y) {
//         return $x * $y;
//     };
// };

$create_multiplier = fn($y) => fn($x) => $x * $y;

$double = $create_multiplier(2);
$triple = $create_multiplier(3);
$quadruple = $create_multiplier(4);

echo $create_multiplier(2)(3) . "\n";

echo $double(3) . "\n";
echo $triple(3) . "\n";
echo $quadruple(3) . "\n";
