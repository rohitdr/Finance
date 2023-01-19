<?php
include("connection.php");
if(isset($_POST['submit'])){
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





$insert="insert into loan_information (Full_name, Father_name, Mother_name, Phone_number, date_of_birth, gender, email, Id_Type, Id_Number, Other_Id, Address1, Address2, City, State, Pin_code)
 VALUES ('$myname','$faname','$moname','$number','$dob','$gender','$email','$id','$idnum','$oidnum','$add1','$add2','$city','$state','$pin')";
$insert_query= mysqli_query($con,$insert);
if($insert_query){

echo "<script>location.replace('Educational_loan_doc.php');</script>";
  
}
else{
    echo "<script>alert('We could not process this time , please try again')</script>";
    echo "<script>window.open('Educational_loan.php')</script>";  
    // header("location:http://contacttous.site/signUp.php");
}


}
?>