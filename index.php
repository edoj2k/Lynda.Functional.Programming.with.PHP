<?php

// $create_multiplier = function ($y) {
//     return function ($x) use ($y) {
//         return $x * $y;
//     };
// };

$create_multiplier = fn($x) => fn($y) => $x * $y;

$double = $create_multiplier(18)(2);
echo $double . "\n";
