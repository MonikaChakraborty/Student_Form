<!-- <html>
    <head>

    </head>

    <body>
        <div class="container">  
            <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 my-5" style="height: 200px;">

<table class="table table-bordered table-striped table-hover text-center">

<tr>

<td><b>Student Name</b></td>
<td><b>Student ID</b></td>
<td><b>Department</b></td>
<td><b>Gender</b></td>
<td><b>Delete</b></td>
<td><b>Edit</b></td>
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
<!-- <td><?php echo $row_array['id']?></td> -->
<td><?php echo $row_array['studentName']?></td>
<td><?php echo $row_array['studentId']?></td>
<td><?php echo $row_array['department']?></td>
<td><?php echo $row_array['gender']?></td>


<td>
    <form action="delete.php" method="post">
        <input hidden name="id" value="<?php echo $row_array['id']?>" >
        <input onclick="confirm('Do you want to delete?')"class="btn btn-danger" type="submit" value="Delete">

    </form>

<td>
    <a class="btn btn-success" href="edit.php?id=<?php echo $row_array['id']?>">Edit</a>
</td>

</tr>
<?php
}
?>

</table>

</div>

            </div>          
        </div>
    </body>
</html> -->