<?php

use FFI\ParserException;

class Person
{
    public $name, $age;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function increase_age()
    {
        $this->age += 2;
    }
}

$person = [
    'name' => 'naufal',
    'age' => 17
];

function change_name($person, $new_name)
{
    return [
        'name' => $new_name,
        'age' => $person['age']
    ];
}

$test = change_name($person, 'rafi');

echo $test['name'];
