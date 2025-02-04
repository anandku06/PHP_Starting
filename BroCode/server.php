<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
</head>
<body style="background-color: #212121; color: #fff;">
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Username: <br>
        <input type="text" name="username"> <br>
        <input type="submit">
    </form>
<!-- here we used the $_SERVER's array key ?PHP_SELF? that contains the location of the current file; so to avoid the sudden change of the file name, we can use this to ensure the efficient flow of the data -->

<!-- using the 'htmlspecialchars()' function to prevent any XSS attack; as it changes the special chars to HTML tags -->

</body>
</html>

<?php 

    // server -> a super-global variable that contains headers, paths, and script locations.
    // the entries in this array are created by the web server
    // shows nearly everything you need to know about the current web page env.
    // $_SERVER

    // foreach($_SERVER as $key => $value) {
    //     echo $key . " => " . $value ."<br>";
    // }
?>