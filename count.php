<?php

 require_once("header.php");
 require_once("connection.php");
 $selectQuery= "SELECT COUNT(ID) as total FROM sqlpractice";
 $query = mysqli_query($conn,$selectQuery);
  $values = mysqli_fetch_assoc($query);
  $result = $values['total'];
   echo "total rows in database.=>";
  echo $result;
?>