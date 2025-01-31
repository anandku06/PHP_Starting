<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #212121; color: #fff;">
    <form action="./radiobtn.php" method="post">
        <input type="radio" name="creditCard" value="Visa">Visa <br>
        <input type="radio" name="creditCard" value="American Express">American Express <br>
        <input type="radio" name="creditCard" value="MasterCard">MasterCard <br>
        <input type="submit" name="confirm" value="Confirm">
        </form>
</body>
</html>

<?php
// to avoid multiple selections in radio button include your options under same name grp

if(isset($_POST["confirm"]) && isset($_POST["creditCard"])){
    $creditCard = $_POST["creditCard"]; // it targets the name attribute so the value should be same as the name given in the form

    if($creditCard == "Visa"){
        echo "You selected Visa!!<br>";
    }
    else if($creditCard == "MasterCard"){
        echo "You selected MasterCard!!<br>";
    }
    else{
        echo "You selected American Express!!<br>";
    }
}
else{
    echo "Please select anything!!<br>";
}

?>