<?php
   $age = 25;
   $citizen = true;
   
   if ($age && $citizen) {
     echo "You can Vote <br>";
   }
   else{
    echo "you cannot vote <br>";
   }

   if (!$age || !$citizen) {
    echo "You cannot Vote <br>";
  }
  else{
   echo "you can vote <br>";
  }

  $child = true;
  $senior = false;
  $ticket = null;

  if($child||$senior){
    $ticket = 10;
  }
  else {
    $ticket = 15;
  }
  
  echo "the ticket price is \$$ticket";
     

?>