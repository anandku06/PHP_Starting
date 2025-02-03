<?php 
    include("./header.html"); // here the include function included the 'header.html' file
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body style="background-color: #212121; color: #fff;">
    This is the Home page <br>
    Stuff about your Home page can go here <br>

</body>
</html>

<?php 
    include("./footer.html");
    // include() -> copies the content of a file(php/html/text) and includes it in your php file.
    // Sections of our website become reusable
    // Changes only need to be made in one place
?>