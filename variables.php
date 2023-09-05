<?php
  $name ="Kurre";
  $food ="egg";
  $email ="kasjham@gmail.com";

  $age = 21;
  $user = 2;
  $quantity = 3;

  $gpa = 3.0;
  $price = 5.67;
  $tax_rate = 5.1;
   
  echo  "Hello {$name}<br>";
  echo "Your email {$email}<br>";
  echo "Your age is {$age}<br>";
  echo "there are only $user users <br>";
  echo "your score is $gpa <br> ";
  echo "your pizza price is $ $price<br>";
  echo "your tax % is $tax_rate<br>";

  $total=null;

  echo "you have ordered $quantity x $food 's <br>";
  $total= $quantity * $price;
  echo "your total cost for your order is {$total}";
?>

