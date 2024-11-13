<?php
class TodoItem
{
    private $name, $is_complete;

    function change_name($new_name)
    {
        $this->name = $new_name;
    }

    function mask_as_done()
    {
        $this->is_complete = true;
    }
}

class TodoList
{
    private $items;

    function add_item($item)
    {
        $this->items[] = $item;
    }
}

$todo_item_1 = [
    'name' => 'Learn functional programming',
    'is_completed' => false
];

$todo_item_2 = [
    'name' => 'Get a great job',
    'is_completed' => false
];

$todo_list = [
    $todo_item_1,
    $todo_item_2
];

function get_completed_items($list) {}
