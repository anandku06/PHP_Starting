<?php

// lambda function -> anonymous functions that are assigned to a variable and then used

$sum = function ($a, $b) {
    return $a + $b;
};
// here the sum is a variable that contains a function but its a variable that acts as a function; also takes a semi-colon for termination

echo $sum(12, 34); // calling as a variable but taking args like functions

// declared an associative array
$fruits = [
    [
        "name" => "apple",
        "rate" => 150
    ],
    [
        "name" => "banana",
        "rate" => 100
    ],
    [
        "name" => "grapes",
        "rate" => 250
    ],
    [
        "name" => "orange",
        "rate" => 200
    ]
];

// made an anonymous function that takes two args, one the array to be filtered and the function acc to which the array is to be filtered; returns the filtered array
function filter($items, $fn)
{
    $filteredItems = [];

    foreach ($items as $item) {
        if ($fn($item)) {
            $filteredItems[] = $item;
        }
    }
    return $filteredItems;
}

// giving the  parameters here
// $filtering = filter($fruits, function ($fruit) {
//     return $fruit['rate'] >= 200;
// });
// this whole can be done using array built-in function

$filtering = array_filter($fruits, function ($fruit) {
    return $fruit['rate'] >= 200;
}); // we just implemented the logic of this built-in function

?>

<ul>
    <?php foreach ($filtering as $item) : ?>
        <li>
            <?= $item["name"] ?>
        </li>
    <?php endforeach; ?>
</ul>