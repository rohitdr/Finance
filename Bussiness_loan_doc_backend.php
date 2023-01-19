<?php

session_start();

include("connection.php");
if(isset($_POST['submit'])){
    $photo_file=  $_FILES['photo_file']['name'];
  
    $id_file = $_FILES['id_file']['name'];
    $sign_file = $_FILES['sign']['name'];
    $adhorpan_file = $_FILES['adhare_or_pan']['name'];
    $salary_file = $_FILES['salary_slip']['name'];
    $bankstate_file = $_FILES['bank_statement']['name'];

    //temporary names
    $photo_file_temporary = $_FILES['photo_file']['tmp_name'];
    $id_file_temporary = $_FILES['id_file']['tmp_name'];
    $sign_file_temporary= $_FILES['sign']['tmp_name'];
    $adhorpan_file_temporary = $_FILES['adhare_or_pan']['tmp_name'];
    $salary_file_temporary = $_FILES['salary_slip']['tmp_name'];
    $bankstate_file_temporary= $_FILES['bank_statement']['tmp_name'];
    //file sizes
    $photo_file_size = $_FILES['photo_file']['size'];
    $id_file_size  = $_FILES['id']['size'];
    $sign_file_size = $_FILES['sign']['size'];
    $adhorpan_file_size  = $_FILES['adhare_or_pan']['size'];
    $salary_file_size  = $_FILES['salary_slip']['size'];
    $bankstate_file_size = $_FILES['bank_statement']['size'];

    if(($photo_file_size  > 100000) || ($id_file_size  > 100000) ||($sign_file_size  > 100000) || ($adhorpan_file_size  > 100000 ) || ($salary_file_size  > 100000) || ($bankstate_file_size  > 100000)){
        echo "<script>alert('File size should be less than 100kb')</script>";
        echo "<script>window.open('Bussiness_loan_doc.php')</script>";  
    
    }

//uploading file
    $remote_photo="/home/contactt/contacttous.site/bussiness_loan/".$_SESSION['email'] ."+"."photo"."+";
    $remote_id="/home/contactt/contacttous.site/bussiness_loan/".$_SESSION['email'] ."+"."id"."+";
    $remote_sign="/home/contactt/contacttous.site/bussiness_loan/".$_SESSION['email'] ."+"."sign"."+";
    $remote_adhorpan="/home/contactt/contacttous.site/bussiness_loan/".$_SESSION['email'] ."+"."adhorpan"."+";
    $remote_salary="/home/contactt/contacttous.site/bussiness_loan/".$_SESSION['email'] ."+"."salary"."+";
    $remote_bankstate="/home/contactt/contacttous.site/bussiness_loan/".$_SESSION['email'] ."+"."bankstate"."+";

















    //
    // 
if(  move_uploaded_file($photo_file_temporary, $remote_photo.$photo_file)  && move_uploaded_file($id_file_temporary, $remote_id.$id_file) && move_uploaded_file($sign_file_temporary, $remote_sign.$sign_file)  &&  move_uploaded_file($adhorpan_file_temporary, $adhorpan_photo.$adhorpan_file) &&  move_uploaded_file($salary_file_temporary, $remote_salary.$salary_file) && move_uploaded_file($bankstate_file_temporary, $remote_bankstate.$bankstate_file)){


echo "<script>alert('Documents have benn Successfully uploaded')</script>";
echo "<script>window.open('http://contacttous.site/index.php');</script>";
  
}
else{
    echo "<script>alert('We could not process this time , please try again')</script>";
    echo "<script>window.open('Bussiness_loan_doc.php')</script>";  

}


}
?>