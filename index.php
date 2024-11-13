<?php
class Person
{
    public $first_name, $last_name, $initials;
}
function create_person($first, $last)
{
    return [
        'first_name' => $first,
        'last_name' => $last,
        'initials' => $first[0] . $last[0]
    ];
}

$person = create_person('naufal', 'aziz');
$updated_person = create_person('ananta', $person['last_name']);

print_r($updated_person);
