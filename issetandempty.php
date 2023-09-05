
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
       <label for="Username">Username: <input type="text" name="username" id="Username"></label><br>
       <label for="Password">Password: <input type="password" name="password" id="Password"></label><br>
       <input type="submit" name="login" value="Log in" >
    </form>
</body>
</html>

<?php

//isset() = Returns TRUE if a variable is declared and not null
//empty() = Returns TRUE if a variable is not declared, false, null, ""

if(isset($_POST["login"])){
     $username = $_POST["username"];
     $password = $_POST["password"];
     if (empty($username)) {
        echo "Username is empty";
     }
     elseif(empty($password)){
        echo "Password is empty";
     }
     else {
        echo "welcome $username";
     }
}



?>