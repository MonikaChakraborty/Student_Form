<html>
    <head> 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    </head>
    <body>

    <div class="container">

    <div class="row mt-5">
    <div class="col-lg-6 col-md-6 col-sm-12" >

    <form action="save.php" method="post">

        <div class="card bg-dark">
            <div class="card-header text-center">
                <h3>Student Registration Form</h3>

            </div>
            <div class="card-body">
            
                <div class="form-group">
                    <label><b>Student Name</b></label>
                    <input class="form-control" type="text" id="studentName" name="studentName" placeholder="Enter Student Name">
                </div>

                <div class="form-group">
                    <label><b>Student ID</b></label>
                    <input class="form-control" type="text" id="studentId" name="studentId" placeholder="Enter Student ID">
                </div>

                <div class="form-group">
                    <label><b>Department</b></label>
                    <input class="form-control" type="text" id="department" name="department" placeholder="Enter Department Name">
                </div>

                <div class="form-group">
                    <label><b>Gender</b></label>

                    <select class="form-control" name="gender" id="gender">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>

            </div>
</div>

            <!-- <div class="card-footer"> -->
            <!-- <div class="form-group"> -->
                    <input class="btn btn-primary mt-3" type="submit" id="submitButton" name="submitButton">
                <!-- </div> -->
            <!-- </div> -->
</form>

        </div>
          
            <div class="col-lg-6 col-md-6 col-sm-12">

            <table class="table table-bordered table-striped table-hover text-center">

            <tr class="head">
            
            <th><b>Student Name</b></th>
            <th><b>Student ID</b></th>
            <th><b>Department</b></th>
            <th><b>Gender</d></th>
            <th><b>Delete</b></th>
            <th><b>Edit</b></th>

        </tr>
        
        <?php

$serverName='localhost';
$userName='root';
$password='';
$database='ttip_1';


 $connection=mysqli_connect($serverName,$userName,$password,$database);

        $select_query = "SELECT * FROM students";

    // //$result = mysqli_query($connection, query: "SELECT * FROM students");

     $result = mysqli_query($connection, $select_query);

     while($row_array= mysqli_fetch_array($result))
     {
         
         ?>
         <tr>
            
            <td><?php echo $row_array['studentName']?></td>
            <td><?php echo $row_array['studentId']?></td>
            <td><?php echo $row_array['department']?></td>
            <td><?php echo $row_array['gender']?></td>

            
            <th>
                <form action="delete.php" method="post">
                    <input hidden name="id" value="<?php echo $row_array['id']?>" >
                    <input onclick="return confirm('Do you want to delete?')"class="btn btn-danger" type="submit" value="Delete">

                </form>

            <th>
                <a class="btn btn-success" href="edit.php?id=<?php echo $row_array['id']?>">Edit</a>
            </th>
     
        </tr>
        <?php
     }
         ?>

            </table>

            </div>

        </div>

    </div>
    </div>
        
    </body>
</html>