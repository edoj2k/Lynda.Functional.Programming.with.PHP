<?php
// $create_function = function () {
//     $x = 5;
//     return function () use ($x) {
//         echo "x is $x \n";
//     };
// };

$create_function = fn($x = 5) => fn() => "x is $x \n";

$function = $create_function();
echo $function();

// $create_printer = function () {
//     $my_favorite_number = 42;
//     return function () use ($my_favorite_number) {
//         echo "My favorite number is $my_favorite_number \n";
//     };
// };

$create_printer = fn($my_favorite_number = 42) => fn() => "My favorite number is $my_favorite_number \n";

$my_printer = $create_printer();
echo $my_printer();
