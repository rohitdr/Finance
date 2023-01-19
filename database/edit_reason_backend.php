<?php
session_start();
include("connection.php");
if(isset($_POST['update'])){
$name =$_POST['name'];
$number=$_POST['number'];

$email =$_POST['email'];
$reason =$_POST['reason'];
$id=$_GET['id'];


$update="update contact_us set name='$name', email='$email', reason='$reason', number='$number' where Id='$id'";


$update_query= mysqli_query($con,$update);


if($update_query){
    echo "<script>alert('Data has been successfully updated')</script>";
    
    echo "<script>window.open('reasontable.php')</script>"; 
}
else{
    
    echo "<script>alert('We could not process this time , please try again')</script>";

    echo "<script>window.open('database.php')</script>";  
 
}


}
?>