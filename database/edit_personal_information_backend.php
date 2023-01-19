<?php
session_start();
include("connection.php");
if(isset($_POST['update'])){
    $myname =$_POST['full_name'];
    $faname =$_POST['father_name'];
    $moname =$_POST['mother_name'];
    $number=$_POST['number'];
    $dob =$_POST['dob'];
    $gender=$_POST['gender'];
    $email =$_POST['email'];
    $id =$_POST['gridRadios'];
    $idnum =$_POST['idnumber'];
    $oidnum =$_POST['Other_id_name'];
    $add1 =$_POST['inputAddress'];
    $add2 =$_POST['inputAddress2'];
    $city =$_POST['inputCity'];
    $state =$_POST['inputState'];
    $pin =$_POST['pincode'];
$id=$_GET['id'];


$update="update loan_information set Full_name='$myname', Father_name='$faname', Mother_name='$moname', Id_Type='$id', Id_Number='$idnum', Other_Id='$oidnum', Address1='$add1', Address2='$add2', City='$city', State='$state', Pin_code='$pin', email='$email', Phone_number='$number', date_of_birth='$dob', gender='$gender' where id='$id'";


$update_query= mysqli_query($con,$update);


if($update_query){
    echo "<script>alert('Data has been successfully updated')</script>";
    
    echo "<script>window.open('personal_information_table.php')</script>"; 
}
else{
    
    echo "<script>alert('We could not process this time , please try again')</script>";

    echo "<script>window.open('personal_information_table.php')</script>";  
 
}


}
?>