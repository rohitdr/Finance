<?php
session_start();

include("connection.php");
if(isset($_POST['login'])){
 
    $email=$_POST['email'];
    $password=$_POST['pas'];
 
    $check_login = "select * from user_data where (email='$email') and (password='$password')";
    
    $chk = mysqli_query($con,$check_login);
    
 
  
    $num = mysqli_num_rows($chk);
  
    if($num==1){
       
        $_SESSION['email']=$email;
        
        $namequery = mysqli_query($con, $check_login);
        $row = mysqli_fetch_assoc($namequery);
        $name = $row['name'];
       $_SESSION['Phone_number'] = $row['Phone_number'];
       $_SESSION['gender'] = $row['gender'];
       $_SESSION['dob'] = $row['date_of_birth'];
        $_SESSION['username']=$name;
        echo "<script>alert('$name have Successfully logged in')</script>";
        echo "<script>window.open('http://contacttous.site/index.php');</script>";
        
       
        
        

        exit();

    }
    else{
        echo "<script>alert('Please Enter the correct login details')</script>";
        echo "<script>location.replace('login.php');</script>";
       
        exit();
    }
    
}




?>