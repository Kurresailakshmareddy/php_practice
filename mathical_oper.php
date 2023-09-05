<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
      <label for="">X : <input type="text" name="x"></label><br>
      <label for="">Y : <input type="text" name="y"></label><br>
      <label for="">Z : <input type="text" name="z"></label><br>
      <input type="submit" value="submit">
    </form>
</body>
</html>

<?php

$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
$total = null;

//$total = abs($x);
//$total = round($x);
//$total = floor($x);
//$total = ceil($x);
//$total = pow($x, $y);
//$total = sqrt($x);
//$total = max($x , $y, $z);
//$total = min($x , $y, $z);
//$total = pi();
//$total = rand();


echo "$total";

?>