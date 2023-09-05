<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Enter a number to count to : <input type="text" name="counter"></label>
        <label for="">Enter a number to count from : <input type="text" name="counter"></label>
        <input type="submit" value="start">
    </form>
</body>
</html>

<?php 
 
  $counter = $_POST["counter"];

  for ($i=0; $i <=$counter ; $i--) { 
     echo $i ."<br>";
  }


?>