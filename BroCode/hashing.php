<?php 
    // hashing -> transforming sensitive data (password) into letters, numbers and/or symbols via a mathematical process (similar to enccyprtion).
    // hides the original data from the 3rd parties

    $passWord = "anand123";

    $hash = password_hash($passWord, PASSWORD_DEFAULT);
    // this function is used to hash the password
    // at every refresh randomises the pattern of hash
    // takes two args first the string to be hashed, other the algo constant (here PASSWORD_DEFAULT -> used bycrypt algo)

    echo $hash . "<br>";

    if(password_verify($passWord, $hash)){
        echo "You are logged in!! <br>";
    }
    else{
        echo "Incorrect password!! <br>";
    }
    // checks the whether the hash created and the original password are same or not
?>