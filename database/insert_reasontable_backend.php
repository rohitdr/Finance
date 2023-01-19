<?php
include("connection.php");
if(isset($_POST['submit'])){
$name =$_POST['name'];
$number=$_POST['number'];

$email =$_POST['email'];
$reason =$_POST['reason'];

$sql = "insert into contact_us (name, email, number, reason) VALUES ('$name', '$email', '$number' , '$reason')";

$result= mysqli_query($con, $sql);

if($result){
//  
    echo "<script>alert('The data has been successfully inserted')</script>";
    echo "<script>window.open('reasontable.php')</script>";
    // header("location:login.php");
}
else{
    echo "<script>alert('We could not process this time , please try again')</script>";
    echo "<script>window.open('reasontable.php')</script>";  
    // header("location:http://contacttous.site/signUp.php");
}


}
?>