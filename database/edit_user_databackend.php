<?php
session_start();
include("connection.php");
if(isset($_POST['update'])){
$name =$_POST['name'];
$number=$_POST['number'];
$dob =$_POST['dob'];
$gender=$_POST['gender'];
$email =$_POST['email'];
$pass1 =$_POST['pass1'];
$id=$_GET['id'];


$update="update user_data set name='$name', email='$email', password='$pass1', Phone_number='$number', date_of_birth='$dob', gender='$gender' where id='$id'";


$update_query= mysqli_query($con,$update);


if($update_query){
    echo "<script>alert('Data has been successfully updated')</script>";
    
    echo "<script>window.open('usertable.php')</script>"; 
}
else{
    
    echo "<script>alert('We could not process this time , please try again')</script>";

    echo "<script>window.open('database.php')</script>";  
 
}


}
?>