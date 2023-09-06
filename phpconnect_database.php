<?php
   //1.MySQLi Extension;
   //2.PDO (PHP Data Objects)
 
   $db_server = "localhost";
   $db_user = "root";
   $db_pass = "";
   $db_name = "php";
   $conn = "";

  try{
   $conn = mysqli_connect($db_server, $db_name, $db_pass, $db_user);
 
  }
  catch(mysqli_sql_exception){
   echo "could not conenct to the server ";
  }

   if ($conn){
      echo "you are connected";
   }
   
?>