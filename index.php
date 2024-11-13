<?php

function my_function()
{
    echo "hello!\n";
}

$my_function = function ($name) {
    echo "hello $name!\n";
};

$my_function_2 = $my_function;
$my_function_2("naufal");

$environtment = 'dev';

$fetch_data_real = function () {
    echo "fetching data...\n";
};

$fetch_data_fake = function () {
    return [
        'name' => 'Rajwa Aliyya',
        'age' => 13,
        'job' => 'student'
    ];
};

$fetch_data = ($environtment === 'prod'
    ? $fetch_data_fake
    : $fetch_data_real
);

print_r($fetch_data());
