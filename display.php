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
                            <th>RESULT</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>

                     <?php 
                      require_once("connection.php");
                      $selectQuery= 'SELECT Id, Name,percentage, IF(percentage>=35,"PASS","FAIL")AS RESULT FROM student'; 
                      $query = mysqli_query($conn,$selectQuery);
                      while($result= mysqli_fetch_array($query)){
                               
                     ?>
                        <tr>
                        <td><?php echo $result['Id']?></td>
                        <td><?php echo $result['Name']?></td>
                        <td><?php echo $result['percentage']?></td>                     
                        <td><?php echo $result['RESULT']?></td>
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






