<?php

//array = "variable which can hold more than one value
//         at a time.

     $foods = array("apple","orange","banana","coconut");

     //$foods[0] = "pineapple;
     //array_push($foods, "pinneapple"); it is used add the value to the index.
     //array_pop($foods); it is used to remove the last value from the index.
     // array_shift($foods); it is used to remove the first value from the index.
     //$foods = array_reverse($foods); it is used to reverse the index.
    
     echo count($foods);

    foreach($foods as $food){
        echo $food ."<br>";
     }


     
?>