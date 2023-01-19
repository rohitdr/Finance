<?php
session_start();
include("connection.php");

$id=$_GET['id'];


$delete="delete from loan_information where id='$id'";


$delete_query= mysqli_query($con,$delete);


if($delete_query){
    echo "<script>alert('Data has been successfully deleted')</script>";
    
    echo "<script>window.open('personal_information_table.php')</script>"; 
}
else{
    
    echo "<script>alert('We could not process this time , please try again')</script>";

    echo "<script>window.open('personal_information_table.php')</script>";  
 
}



?>