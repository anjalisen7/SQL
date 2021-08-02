<?php
 require_once("header.php");
            ?>
            <body>
            <div class="container">
                <div class="col-lg-12">
                    <h2 class="text-center text-danger">All Data</h2>
  
                    <table class="table  text-center table-stripped table-hover table-bordered">
                        <tr class="table table-success table-stripped">
                            <th>Id</th>
                            <th>Name</th> 
                            <th>percentage</th>
                            <th>GRADE</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>

                     <?php 
                      require_once("connection.php");
                      $selectQuery= 'UPDATE student SET
                       percentage =(CASE Id         
                          when 1 then 90
                          when 3 then 64
                          when 4 then 18
                        END)
                          where Id IN(1,3,4)'; 
                      $query = mysqli_query($conn,$selectQuery);
                      while($result= mysqli_fetch_array($query)){
                               
                     ?>
                        <tr>
                        <td><?php echo $result['Id']?></td>
                        <td><?php echo $result['Name']?></td>
                        <td><?php echo $result['percentage']?></td>                     
                        <td><?php echo $result['GRADE']?></td>
                     <td><button class="btn btn-secondary ">Edit</button></td>
                        <td><button class="btn btn-danger ">Delete</button></td>
                       </tr> 
                       <?php   
                          }
                       ?>
                    </table>                

                </div>
            </div>
            <a href="insert.php"><button type="button" name="back" class="btn btn-success btn-lg"> 🔙 Back</button></a>
            </body>
            </html>






