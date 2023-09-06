<?php
   //1.MySQLi Extension;
   //2.PDO (PHP Data Objects)
 
  

      $sname= "localhost";
      $uname= "root";
      $password = "";

      $db_name = "php";

      $conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
   
?>