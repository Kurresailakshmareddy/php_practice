<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method ="post">
        <label>Enter a country : <input type="text" name="country" id=""></label>
        <input type="submit" value="submit">
    </form>
</body>
</html>

<?php

$capitals = array("USA"=>"Washington D.C",
                     "Japan"=> "Kyoto",
                      "South Korea" => "seoul",
                     "India"=>"New Delhi"  );

    $capital = $capitals[$_POST["country"]];

     echo "The capital is {$capital}";


?>