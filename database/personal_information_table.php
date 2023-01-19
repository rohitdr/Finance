<?php

session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Personal_information Table</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c54ebdecc5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <style>
body{
  background-color:#e2e7ec;
}
</style>

</head>
  <body>
  <?php if(!isset($_SESSION['email'])){
  echo "<script>alert('You had not logged in, please Login')</script>";
  echo "<script>window.open('login.php')</script>";
}
else{



?>
   






  <div class="container mt-4 py-3 ">
 
 <h1 class="text-center p-3">Personal_information Table</h1>


<table class="table table-striped  table-bordered  table-hover table-sm table-primary text-center" >

<tr>
<th  class="table-dark"scope="col">#</th>
<th class="table-dark">Full name</th>
<th class="table-dark">Father Name</th>
<th class="table-dark">Mother Name</th>
<th class="table-dark">Phone_number</th>
<th class="table-dark">Date_of_birth</th>

<th class="table-dark">gender</th>
<th class="table-dark">email</th>

<th class="table-dark">Id_type</th>
<th  class="table-dark">Id_number</th>
<th class="table-dark">Other_id</th>
<th class="table-dark">Address1</th>

<th class="table-dark">Address2</th>
<th  class="table-dark">City</th>
<th  class="table-dark">State</th>
<th  class="table-dark">Pincode</th>
<th  class="table-dark">Operations</th>
</tr>
<?php
include("connection.php");

$showfulldata2 ="select * from  loan_information ";
$sfdquery2=mysqli_query($con, $showfulldata2);

while( $sfdrow2=mysqli_fetch_assoc($sfdquery2)){
    
?>
<tr>
<th scope="row"><?php  echo $sfdrow2['id']; ?></th>
    <td> <?php echo $sfdrow2['Full_name']; ?></td>
    <td> <?php echo $sfdrow2['Father_name']; ?></td>
    <td> <?php echo $sfdrow2['Mother_name']; ?></td>
    <td> <?php echo $sfdrow2['Phone_number']; ?></td>
    <td> <?php echo $sfdrow2['date_of_birth']; ?></td>
    <td> <?php echo $sfdrow2['gender']; ?></td>
    <td> <?php echo $sfdrow2['email']; ?></td>
    <td> <?php echo $sfdrow2['Id_Type']; ?></td>
    <td> <?php echo $sfdrow2['Id_Number']; ?></td>
    <td> <?php echo $sfdrow2['Other_Id']; ?></td>
    <td> <?php echo $sfdrow2['Address1']; ?></td>
    <td> <?php echo $sfdrow2['Address2']; ?></td>
    <td> <?php echo $sfdrow2['City']; ?></td>
    <td> <?php echo $sfdrow2['State']; ?></td>
    <td> <?php echo $sfdrow2['Pin_code']; ?></td>
   
    <td>
     <button class="btn btn-outline-warning bg-warning text-white  "  onclick="location.href='edit_personal_information.php?id=<?php  echo $sfdrow2['id']; ?>';" type="button">EDIT</button>
     <button class="btn btn-outline-dark bg-danger me-2"  onclick="location.href='delete_personal_information.php?id=<?php  echo $sfdrow2['id']; ?>';" type="button">DELETE</button>
    </td>

    
</tr>
<?php

}
?>






</table> 
<button class="btn btn-outline-dark bg-primary me-2 btn-lg"  onclick="location.href='insert_personal_information.php';" type="button">INSERT NEW DATA</button>

</div>



<?php
}

?>


 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>



