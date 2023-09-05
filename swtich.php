<?php 
  /*switch = replacement to using many elseif statements
              more efficient, less code to write*/

   $grade = "okay";

   switch ($grade) {
    case 'A':
        echo "you did great in the test";
        break;
    case 'B':
        echo "you did good in the test";
        break;
    case 'C':
        echo "you did okay in the test";
        break;
    case 'D':
        echo "you did prooly in the test";
        break;
    case 'F':
        echo "you have failed the test";
        break;                                                  
    default:
        echo "your {$grade} is invalid ";
        break;
   }


   $date = date("l");

   switch ($date) {
    case 'Monday':
        echo "Back to work";
        break;
    case 'Tuseday':
        echo "countdown start for the weekend";
        break;
    case 'Wednesday':
        echo "three days to go";
        break;
    case 'Thrusday':
        echo "two days to go";
        break;
    case 'Friday':
        echo "one day to go";
        break;
    case 'saturaday':
        echo "party time baby";
        break; 
    case 'Sunday':
        echo "time to reset";
        break;                                                
    default:
        echo "your {$date} is invalid ";
        break;
   }
  

?>