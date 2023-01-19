
<?php

session_start();
include("connection.php");
if(isset($_POST['changepassword'])){
  
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
    if($pass1!=$pass2){
        echo "<script>alert('Password did not match, please try again')</script>";
        echo "<script>window.open('forgetpassword.php')</script>";
        exit();
    }
    $check_login = "select * from user_data where (email='$email') and (date_of_birth='$dob')";
    $chk=mysqli_query($con, $check_login);
    $num = mysqli_num_rows($chk);
    if($num==1){
      
        $update="update user_data set password ='$pass1' where email='$email'";
     
       $updatequery = mysqli_query($con,$update);
      
      
       if($updatequery){
        echo "<script>alert('Password has been  Successfully updated')</script>";
        echo "<script>window.open('login.php')</script>";
        exit();
       }
       else{
        echo "<script>alert('We are facing some technical issue ! try again after some time')</script>";
        echo "<script>window.open('login.php')</script>";
        exit();
    }


    }
    else{
        echo "<script>alert('Please Enter the correct details')</script>";
        echo "<script>window.open('login.php')</script>";
        exit();
    }
    
}








?>