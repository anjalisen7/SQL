<?php
 require_once("header.php");
            ?>
            <body>
            <div class="container">
                <div class="col-lg-12">
                    <h2 class="text-center text-danger">All Data</h2>
  
                    <table class="table  text-center table-stripped table-hover table-bordered">
                        <tr class="table table-success table-stripped">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>City</th>
                            <th>Email</th>
                            <th>salary</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>

                     <?php
                      require_once("connection.php");
                      $selectQuery= "SELECT ID as customer_id, name as customer_name, age as customer_Age, city as customer_city FROM sqlpractice";
                      $query = mysqli_query($conn,$selectQuery);
                      while($result= mysqli_fetch_array($query)){
                               
                     ?>
                        <tr>
                        <td><?php echo $result['customer_id']?></td>
                        <td><?php echo $result['customer_name']?></td>
                        <td><?php echo $result['customer_Age']?></td>                     
                        <td><?php echo $result['customer_city']?></td>
                        <!-- <td><?php echo $result['email']?></td>
                        <td><?php echo $result['salary'];?></td> -->
                            <td><button class="btn btn-secondary ">Edit</button></td>
                            <td>Delete</td>
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






