<?php

/*session = SGB used to store information on a user to be used across multiple pages.
            A user is assigned a session-id. 
            EX: login credentials

*/

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>This is the login the page </h2>
    <a href="session_home.php">this goes to the home page</a>
    <form action="" method="post">
        <label for="username">Username: <input type="text" name="username" id="username"></label><br>
        <label for="password">Password: <input type="password" name="password" id="password"></label><br>
        <input type="submit" value="login" name="login">
    </form>
</body>
</html>

<?php

if(isset($_POST["login"])){

    if(!empty($_POST["username"]) && !empty($_POST["password"]) ){

        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

        header("Location: session_home.php");
    }
    else{
        echo "Mising username / password <br>";
    }
}

?>

