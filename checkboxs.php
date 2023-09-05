<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
      <label for="Pizza"><input type="checkbox" name="pizza" id="Pizza" value="Pizza"> Pizza</label><br>
      <label for="Dosa"><input type="checkbox" name="dosa" id="Dosa" value="Dosa"> Dosa</label><br>
      <label for="Idly"><input type="checkbox" name="idly" id="Idly" value="Idly"> Idly</label><br>
      <input type="submit" name="submit" value="submit">

    </form>
</body>
</html>

<?php

  if(isset($_POST["submit"])){

    if(isset($_POST["pizza"])){
        echo "You have order Pizza ! <br>";
    }
    if(isset($_POST["dosa"])){
        echo "You have order dosa ! <br>";
    }
    if(isset($_POST["idly"])){
        echo "You have order idly ! <br>";
    }
    if(empty($_POST["pizza"])){
        echo "Please try pizza next time! <br>";
    }
    if(empty($_POST["dosa"])){
        echo "Please try dosa next time! <br>";
    }
    if(empty($_POST["idly"])){
        echo "Please try idly next time! <br>";
    }
  }


?>