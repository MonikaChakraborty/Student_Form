<?php
error_reporting(0);
session_start();
//echo '<pre>';
//print_r($_GET);
/*debugger*/
//var_dump();
getData();/*Function is being called*/


function getData()
{
    $studentName = $_POST['studentName'];
    $studentId = $_POST['studentId'];
    $department = $_POST['department'];
    $gender = $_POST['gender'];
    $serverName='localhost';
    $userName='root';
    $password='';
    $database='ttip_1';
    

     $connection=mysqli_connect($serverName,$userName,$password,$database);

   // include "connection.php";

    $insert_query = "INSERT INTO students(studentName,studentId,department,gender) values('$studentName','$studentId','$department','$gender')";

    $insert_query = mysqli_query($connection, $insert_query);

    // if ($insert_query) {
    //     echo 'Data has been saved sucessfully';
    // } else 
    // {
    //     echo 'Data has not been saved sucessfully';
    // }
}
header( "location:registration.php");

?>