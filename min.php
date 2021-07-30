<?php

 require_once("header.php");
 require_once("connection.php");
 $selectQuery= "SELECT MIN(salary) as salary FROM sqlpractice";
 $query = mysqli_query($conn,$selectQuery);
  $values = mysqli_fetch_assoc($query);
  $result = $values['salary'];
   echo "MAX-salary =>";
  echo $result;
?>