<?php

   /*cookie =Information about a user stored in a user's web-browser
             targeted adverstisements, browing preference, and othe
             non-sensitive data
             F12 -> applications to view cookies
   */
    
   setcookie("fav_food", "pizza",time() + (86400 * 2), "/");
   setcookie("fav_food", "fries",time() + (86400 * 4), "/");
   setcookie("fav_food", "chips",time()  -0, "/");


   foreach($_COOKIE as $key => $value){
    echo "{$key} = {$value} <br>";
   }

   if(isset($_COOKIE["fav_food"])){
    echo "buy some {$_COOKIE["fav_food"]}!!";
   }
   else{
    echo "i dont know your favorite food";
   }
?>
