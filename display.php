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
                            <th>Email</th>
                            <th>City</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>

                     <?php
                      require_once("connection.php");
                     $selectQuery= "SELECT  * FROM sqlpractice LIMIT 4";
                     $query = mysqli_query($conn,$selectQuery);
                      while($result=mysqli_fetch_array($query)){
                     ?>
                        <tr>
                            <td><?php echo $result['ID']?></td>
                            <td><?php echo $result['name']?></td>
                            <td><?php echo $result['age']?></td>
                            <td><?php echo $result['email']?></td>
                            <td><?php echo $result['city']?></td>
                            <td><button class="btn btn-secondary ">Edit</button></td>
                            <td>Delete</td>
                       </tr> 
                       <?php   
                          }
                       ?>
                    </table>                

                </div>
            </div>

            </body>
            </html>






