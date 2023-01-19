<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
   
         $email=$_POST['email'];
        $password =$_POST['pas'];
        $sername="localhost";
        $user="root";
        $pass="";
        $database ="rohit";
       
        $con =mysqli_connect($sername, $user, $pass, $database);
      
        $sql ="SELECT * FROM `user` WHERE email ='$email' and password ='$password'";
        $result =mysqli_query( $con, $sql);
        $num = mysqli_num_rows($result);
        if($num==1){
           include("index.html");
           $_SESSION['user']=$email;
        
        }
        else{
            echo "no";
        }

}