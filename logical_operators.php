<?php
  /* Logical Operators = combine conditional statements
   if(condition1 && condition2)
   
   && = true if both conditons are true
   || = true if at least one conditon is true 
    ! = true is false. False if true.
   
   */
  $temp = 40;
  $cloudy = false;

   
  /*if ($temp >=0 && $temp<=30) {
      echo "the weather is good";
  }
  /else {
    echo "the weather is bad";
  }*/

  if ($temp=0 || $temp > 30) {
      echo "the weather is bad <br>";
  }
  else {
    echo "the weather is good <br>";
  }

  if($cloudy){
    echo "it is cloudy";
  }
  else {
    echo "it is sunny";
  }

?>