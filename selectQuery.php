<?php
 require_once("connection.php");
 require_once("header.php");
   $selectQuery= "Select * from sqlPractice order by city desc ,id desc";
     $result=mysqli_query($conn,$selectQuery);
      if(mysqli_num_rows($result)>0){
            ?>
            <body background="grey">
            <div class="container">
                        <table class="table-stripped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>S.NO.</th>
                                     <th>Name</th>
                                    <th>Age</th>
                                    <th>EMAIL</th>
                                    <th>City</th>
                                </tr>
                            </thead>
                            <?php
                     while($row = mysqli_fetch_assoc($result)){?>
                            <tbody>
                                <tr>
                                    <td><?php print_r($row['ID']);?></td>
                                    <td><?php print_r($row['name']);?></td>
                                    <td><?php print_r($row['age']);?></</td>
                                    <td><?php print_r($row['email']);?></</td>
                                    <td><?php print_r($row['city']);?></</td>
                                </tr>
                            </tbody>
                                <?php }?>
                        </table>
             </div> 
            
        </body>  
        <?php  
      }else{
          echo"NO Result";
      }

?>






