<?php
error_reporting(0);
//include 'connection.php';
$serverName='localhost';
$userName='root';
$password='';
$database='ttip_1';

$connection=mysqli_connect($serverName,$userName,$password,$database);

$id=$_POST['id'];
$delete_query="DELETE FROM students WHERE id='$id'";
$result= mysqli_query($connection,$delete_query);

if($result)
{
    echo 'Data has been deleted successfully';
} else{
    echo 'Failed';
}
header ("location: registration.php");
?>