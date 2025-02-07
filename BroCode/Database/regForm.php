<?php 
include("./database.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Registration Form</title>
</head>
<body class="p-8">
    <div class="mx-auto container bg-gray-200 border-2 border-gray-400 shadow-lg">
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <h2 class="p-8 text-cyan-400 text-center text-3xl font-semibold underline decoration-4">Welcome to FakeBook!!</h2>

            <div class="p-4 mt-4">
            Username:
            <input type="text" name="username" placeholder="Enter your username" class="m-4"> <br>
            Password:
            <input type="password" name="password" placeholder="Enter your password" class="m-4"> <br>

            <input type="submit" name="submit" value="Register" class="p-1 bg-white cursor-pointer border-2 border-black rounded-lg">
            </div>
        </form>
    </div>
</body>
</html>

<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = filter_input(INPUT_POST,'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST,'password', FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($username) || empty($password)){
        echo "Add credentials!!! <br>";
    }
    else{
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (user, password) VALUES('$username', '$hash')";

        try{
            mysqli_query($conn, $sql);
            echo "User is registered!! <br>";
        }catch(mysqli_sql_exception){
            echo "User can't be registered!! <br>";
        }
    }

}



mysqli_close($conn);
// using the 'PHP_SELF' key of the SERVER SGV for the filename and enclosing with 'htmlspecialchars()' function to avoid XSS
?>