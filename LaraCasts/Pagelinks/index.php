<?php
// take these files as controllers that entertain incoming requests and response of the client-side
$header = "Home"; // this variable is accessible under the require file as well

function dd($value)
{
    echo "<pre>";
    var_dump($value); // dumps info about the provided element
    echo "</pre>";


    die(); // terminates the PHP script
}

echo ($_SERVER['REQUEST_URI']);

require("./views/index.view.php");
