<?php 

require("./functions.php");

$url = $_SERVER["REQUEST_URI"];
echo $url;

if($url === "/PHP_Starting/LaraCasts/Pagelinks/"){
    require("./controllers/index.php");
}
else if($url === "/PHP_Starting/LaraCasts/Pagelinks/index.php/about"){
    require("./controllers/about.php");    
}
else if($url === "/PHP_Starting/LaraCasts/Pagelinks/contact"){
    require("./controllers/contact.php");
}