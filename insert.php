<?Php
require_once("connection.php");
require_once("header.php");
 if(isset($_POST['click'])){
    $name=$_POST['name'];
    $email=$_POST['mail'];
    $age=$_POST['age'];
    $city=$_POST['city'];
    $insertQuery= "INSERT into `sqlpractice`(`name`,`email`,`age`,`city`)Values('$name','$email','$age','$city')";
    $result=mysqli_query($conn,$insertQuery);
 }
 ?>
 <body>
     <?php
     require_once("formInsert.php");
     ?>
 </body>
 </html>