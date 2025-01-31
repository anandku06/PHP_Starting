<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #212121; color: #fff;">

    <h1>
        <?php
        echo "Hello World!!";
        
        ?>
    </h1>
    <form action="./checkboxes.php" method="post">
        <input type="checkbox" name="foods[]" value="Pizza">
        Pizza <br>
        <input type="checkbox" name="foods[]" value="Hamburger">
        Hamburger <br>
        <input type="checkbox" name="foods[]" value="Donut">
        Donut <br>
        <input type="checkbox" name="foods[]" value="HotDog">
        HotDog <br>

        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>

<?php

// using the foods[] array, we are getting all the selected options inside the array not only one option

if(isset($_POST["submit"])){
    // if(isset($_POST["pizza"])){
    //     echo "You like pizza!!<br>";
    // }
    // if(isset($_POST["hamburger"])){
    //     echo "You like hamburger!!<br>";
    // }
    // if(isset($_POST["hotdog"])){
    //     echo "You like hotdog!!<br>";
    // }
    // if(isset($_POST["donut"])){
    //     echo "You like donut!!<br>";
    // }
    // if(empty($_POST["pizza"])){
    //     echo "You DON'T like pizza!!<br>";
    // }
    // if(empty($_POST["hamburger"])){
    //     echo "You DON'T like hamburger!!<br>";
    // }
    // if(empty($_POST["hotdog"])){
    //     echo "You DON'T like hotdog!!<br>";
    // }
    // if(empty($_POST["donut"])){
    //     echo "You DON'T like donut!!<br>";
    // }

    $foods = $_POST["foods"];

    foreach($foods as $key){
        echo $key."<br>";
    }
}

?>