<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method = "post">
        <label>username: <input type="text" name="username" id=""></label>
        <input type="submit">
    </form>
</body>
</html>

<?php

/* $_SERVER = SGB that contains header, paths, and script
              loactions. The entries in this array are 
              created by the web server. Shows nearly
              everthing you need to know about the current
              web page envinorment */


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        echo "Hello";
    }

?>