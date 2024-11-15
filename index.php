<?php

// $map = function ($func, $array) {
//     $new_array = [];

//     for ($i = 0; $i < count($array); $i++) {
//         $result = $func($array[$i]);
//         $new_array[] = $result;
//     }
//     return $new_array;
// };

$map = function ($func, $array) {
    return array_reduce(
        $array,
        fn($carry, $item) => [...$carry, $func($item)],
        [],
    );
};

$numbers = [1, 2, 3, 4];
$result = $map(
    fn($x) => $x * 3,
    $numbers
);

print_r($result);
