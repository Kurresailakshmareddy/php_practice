<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="username">Username: <input type="text" name="username"></label>
        <label for="username">Age: <input type="text" name="age"></label>
        <input type="submit" name="login" value="login" >
    </form>
</body>
</html>

<?php

if(isset($_POST["login"])){

    $username = filter_input(INPUT_POST, "username", 
                            FILTER_SANITIZE_SPECIAL_SPEC);
   
    $age = filter_input(INPUT_POST, "age", 
                            FILTER_SANITIZE_NUMBER_INT);
                            
    $age = filter_input(INPUT_POST, "age", 
                            FILTER_VALIDATE_NUMBER_INT);
    
        if (empty($gae)){
            echo "That numer wasnt valid";
        }
        else{
            echo "you are $age years old";
        }
}

?>