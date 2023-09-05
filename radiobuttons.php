<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "post">
        <label for="visa"><input type="radio" name="credit_card" id="visa" value="Visa"> Visa <br></label>
        <label for="master"><input type="radio" name="credit_card" id="master" value="Master"> Master<br></label>
        <label for="american"><input type="radio" name="credit_card" id="american" value="American Express"> American Express<br></label>
        <input type="submit" name= "confirm" value="confirm">
    </form>
</body>
</html>

<?php

if(isset($_POST["confirm"])){

    $credit_card = "null"; 

    if (isset($_POST["credit_card"])) {
          $credit_card = $_POST["credit_card"];
    }
    switch($credit_card){
        case 'Visa':
            echo "You have selected Visa";
            break;
        case 'Master':
            echo "You have selected Visa";
            break;
        case 'American Express':
            echo "You have selected Visa";
            break;
       default :
        echo "Please make a selection";
    }
}

?>