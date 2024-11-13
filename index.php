<?php
$double = fn($x) => $x * 2;

$subtract_one = fn($x) => $x - 1;

$add_three = fn($x) => $x + 3;

$my_number = 42;

// $doubled = $double($my_number);
// $doubled_minus_one = $subtract_one($doubled);
// $plus_three = $add_three($doubled_minus_one);

$function_array = [
    $double,
    $subtract_one,
    $add_three
];

for ($i = 0; $i < count($function_array); $i++) {
    $my_number = $function_array[$i]($my_number);
}

echo $my_number . "\n";
