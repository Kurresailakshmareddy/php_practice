<?php 

/* hashing = transforming sensitive data(password)
            inot letters, numbers, and/or symbols
            via a mathematical process. (similar to encrytion) 
            Hides the original data from 3 rd parties.
            */

   $password = "lakshma";

   $hashing = password_hash($password, PASSWORD_BCRYPT);

   if(password_verify("lakshma",$hashing)){
    echo "you are logged in !";
   }
   else{
    echo "incorrect password";
   }

?>