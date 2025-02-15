<?php 
// take these files as controllers that entertain incoming requests and response of the client-side
$header = "Contact Us"; // this variable is accessible under the require file as well

echo ($_SERVER['REQUEST_URI']);

require("./views/contact.view.php");