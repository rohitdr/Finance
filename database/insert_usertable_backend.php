<?php
include("connection.php");
if(isset($_POST['submit'])){
$name =$_POST['name'];
$number=$_POST['number'];
$dob =$_POST['dob'];
$gender=$_POST['gender'];
$email =$_POST['email'];
$pass1 =$_POST['pass1'];
$pass2 =$_POST['pass2'];


If($pass1!=$pass2){
    echo "<script>alert('Password did not match, please try again')</script>";
    echo "<script>window.open('sign_up.php')</script>";
    exit();
}
$check_email = "select * from user_data where email='$email'";
$em = mysqli_query($con, $check_email);
$num_email= mysqli_num_rows($em);
If($num_email==1){
    echo "<script>alert('Email already exits, please try again')</script>";
    echo "<script>window.open('usertable.php')</script>";
    // header("location:http://contacttous.site/signUp.php");
    exit();
}

$insert="insert into user_data (name, email, password, Phone_number, date_of_birth, gender) values ('$name','$email','$pass1','$number','$dob','$gender')";
$insert_query= mysqli_query($con,$insert);
if($insert_query){
//  
    echo "<script>alert('The data has been successfully inserted')</script>";
    echo "<script>window.open('usertable.php')</script>";
    // header("location:login.php");
}
else{
    echo "<script>alert('We could not process this time , please try again')</script>";
    echo "<script>window.open('usertable.php')</script>";  
    // header("location:http://contacttous.site/signUp.php");
}


}
?>