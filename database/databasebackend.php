<?php

if(isset($_POST['submit'])){
   

    if($_POST['tables']=="user_data"){
  header("location:http://contacttous.site/usertable.php");
    }
    if($_POST['tables']=="reason"){
        header("location:http://contacttous.site/reasontable.php"); 
    }
    if($_POST['tables']=="personal_infromation"){
      header("location:http://contacttous.site/personal_information_table.php"); 
  }
}




?>