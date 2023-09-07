<?php

include("phpconnect_database.php")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method ="post">
      <label for="Username">Username: <input type="text" name="username" id="Username"></label><br>
      <label for="Password">Password: <input type="password" name="password" id="Password"></label><br>
      <input type="submit" name = "login" value="register">
    </form>
</body>
</html>

<?php

if($_SERVER["REQUEST_MEHTOD"] == "POST"){

  $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
  $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

  if(empty($username)){
    echo "Please enter a username";
  }
  elseif(empty($password)){
    echo "please enter a password";
  }
  else{
    $hash = password_hash($password, PASSWORD_BCRYPT);
    $sql = "INSERT INTO users (user, password) VALUES ('$username','$hash)";
    mysqli_query($conn, $sql);
    echo "you are now registered!";
  }
}

?>