<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
     <label for="">Quantity : <input type="text" name="quantity" id=""></label><br>
     <input type="submit" value="submit">
    </form>
</body>
</html>



<?php
   /* $GET, $POST = speacial variable used to collect data from an HTML form
                    data is sent to the file in the action attribute of <form>
                    <form action="some_file.php" method="get">

    $GET= Data is appended to the url 
          NOT SECURE
          char limit 
          bookmark is possible w/values 
          GET requests are can be cached
          better for a search page

    $POST=Data is packaged inside the body of the HTTP request
          MORE SECURE
          No Data limit
          cannot bookmark
          GET request are not cached 
          Better for submitting credentials*/
       
    $item = "dosa";
    $price = "10.0";
    
    $quantity = $_GET["quantity"];
    $total = null;

    $total = $quantity * $price;

    echo "Your have ordered {$quantity} x {$item}\'s<br>";
    echo "Your total is : \${$total}";


?>