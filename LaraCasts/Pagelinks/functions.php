<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value); // dumps info about the provided element
    echo "</pre>";


    die(); // terminates the PHP script
}

// echo ($_SERVER['REQUEST_URI']);
function isURL($url){
    return $_SERVER["REQUEST_URI"] === $url;
}

