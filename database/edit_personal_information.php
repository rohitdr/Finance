<?php

session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update the Detail for <?php echo $sfdrow['name']; ?></title>
    
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
   
  <?php
 
 $id=$_GET['id'];
 include("connection.php");



$showfulldata ="select * from loan_information where id='$id'";

$sfdquery=mysqli_query($con, $showfulldata);



$sfdrow=mysqli_fetch_assoc($sfdquery);

$num =mysqli_num_rows($sfdquery);


?>

 



<div class="modal modal-signin position-static d-block  py-5" tabindex="-1" role="dialog" id="modalSignin">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        
        <h1 class="fw-bold mb-0 fs-2 text-primary">Update Data For the Table</h1>
        
      </div>

      <div class="modal-body p-5 pt-0">
        <form method="post" action="edit_personal_information_backend.php?id=<?php  echo $id; ?>">
       
         
        <div class="modal-body p-5 pt-0">
        <form method="post" action="insert_personal_information_backend.php">
        <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-3" id="floating1" name="full_name" value="<?php echo $sfdrow['Full_name'];  ?>" >
            <label for="floating1"> Full Name</label>
          </div>
        <div class="form-floating mb-3">
            <input type="phone number" class="form-control rounded-3" id="floating2"   name="number" value="<?php echo $sfdrow['Phone_number'];  ?>" >
            <label for="floating2">Phone Number</label>
          </div>
          <div class="form-floating mb-3">
     <input type="email" class="form-control rounded-3" id="floating3" name ="email" value="<?php echo $sfdrow['email'];  ?>" >
            <label for="floating3">Email address</label>
          </div>
          <div class="form-floating mb-3">
     <input type="text" class="form-control rounded-3" id="floating4" name ="father_name" value="<?php echo $sfdrow['Father_name'];  ?>" >
            <label for="floating4">Father Name</label>
          </div>
          <div class="form-floating mb-3">
     <input type="text" class="form-control rounded-3" id="floating5" name ="mother_name" value="<?php echo $sfdrow['Mother_name'];  ?>" >
            <label for="floating5">Mother Name</label>
          </div>
            
          <div class="form-outline flex-fill mb-1">
                      
                      <label class="form-label" for="flexRadioDefault1">Gender</label>
                      <input class="form-check-input radiomargin" type="radio" name="gender" id="flexRadioDefault1"  value="male" <?php if($sfdrow['gender']=="male") {echo "checked";} ?>>
                        <label class="form-label " for="flexRadioDefault1">Male</label>
                        <input class="form-check-input  radiomargin" type="radio" name="gender" id="flexRadioDefault2" value="female" <?php if($sfdrow['gender']=="female") {echo "checked";} ?>  >
                        <label class="form-label" for="flexRadioDefault2">Female</label>
                        <input class="form-check-input  radiomargin" type="radio" name="gender" id="flexRadioDefault3" value="other" <?php if($sfdrow['gender']=="other") {echo "checked";} ?> >
                        <label class="form-label" for="flexRadioDefault3">Other</label>
                    
                    </div>
                    <div class="form-floating mb-3">
            <input type="date" class="form-control rounded-3" id="floating6"   name ="dob" value="<?php echo $sfdrow['date_of_birth'];  ?>">
            <label for="floating6">Date of birth</label>
          </div>

          <legend class="col-form-label col-sm-4 pt-0 mt-3">Type of Id</legend>
          <div class="form-floating mb-3">
        <div class="form-check mt-2">
          <input class="form-check-input " type="radio" name="gridRadios" id="gridRadios1" value="Passport" <?php if($sfdrow['Id_Type']=="Passport") {echo "checked";} ?>>
          <label class="form-check-label " for="gridRadios1">
            Passport
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Adhare card" <?php if($sfdrow['Id_Type']=="Adhare card") {echo "checked";} ?>>
          <label class="form-check-label" for="gridRadios2">
            Adhare Card
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Driving Licence" <?php if($sfdrow['Id_Type']=="Driving Licence") {echo "checked";} ?>>
          <label class="form-check-label" for="gridRadios2">
            Driving Licence
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="voter id" <?php if($sfdrow['Id_Type']=="voter id") {echo "checked";} ?>>
          <label class="form-check-label" for="gridRadios2">
            Voter Id
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Socail Security Number" <?php if($sfdrow['Id_Type']=="Socail Security Number") {echo "checked";} ?>>
          <label class="form-check-label" for="gridRadios2">
            Socail Security Number
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="other" <?php if($sfdrow['Id_Type']=="other") {echo "checked";} ?>>
          <label class="form-check-label" for="gridRadios2">
            Other
          </label>
          <input type="text" class="form-control" placeholder="OTHER" name="Other_id_name" value="<?php echo $sfdrow['Other_Id'];  ?>">
        </div>
       
      </div>
      <div class="form-floating mb-3">
     <input type="phone number" class="form-control rounded-3" id="floating15" name ="idnumber" value="<?php echo $sfdrow['Id_Number'];  ?>">
            <label for="floating15">Id Number</label>
          </div>
  

  <div class="form-floating mb-3">
     <input type="text" class="form-control rounded-3" id="floating7" name ="inputAddress" value="<?php echo $sfdrow['Address1'];  ?>">
            <label for="floating7">Address 1</label>
          </div>

          <div class="form-floating mb-3">
     <input type="text" class="form-control rounded-3" id="floating8" name ="inputAddress2" value="<?php echo $sfdrow['Address2'];  ?>">
            <label for="floating8">Address 2</label>
          </div>

          <div class="form-floating mb-3">
     <input type="text" class="form-control rounded-3" id="floating9" name ="inputCity" value="<?php echo $sfdrow['City'];  ?>">
            <label for="floating9">City</label>
          </div>
          <legend class="col-form-label col-sm-4 pt-0 " for="inputState">State</legend>
          <div class="form-floating mb-3">
      
      <select id="inputState"  name ="inputState" class="form-control rounded-3">
      <option >Choose...</option>
        <option value="AN"  <?php if($sfdrow['State']=="AN") {echo "selected";} ?>>Andaman and Nicobar Islands</option>
    <option value="AP" <?php if($sfdrow['State']=="AN") {echo "selected";} ?>>Andhra Pradesh</option>
    <option value="AR" <?php if($sfdrow['State']=="AR") {echo "selected";} ?>>Arunachal Pradesh</option>
    <option value="AS" <?php if($sfdrow['State']=="AS") {echo "selected";} ?>>Assam</option>
    <option value="BR" <?php if($sfdrow['State']=="BR") {echo "selected";} ?>>Bihar</option>
    <option value="CH" <?php if($sfdrow['State']=="CH") {echo "selected";} ?>>Chandigarh</option>
    <option value="CT" <?php if($sfdrow['State']=="CT") {echo "selected";} ?>>Chhattisgarh</option>
    <option value="DN" <?php if($sfdrow['State']=="DN") {echo "selected";} ?>>Dadra and Nagar Haveli</option>
    <option value="DD" <?php if($sfdrow['State']=="DD") {echo "selected";} ?>>Daman and Diu</option>
    <option value="DL" <?php if($sfdrow['State']=="DL") {echo "selected";} ?>>Delhi</option>
    <option value="GA" <?php if($sfdrow['State']=="GA") {echo "selected";} ?>>Goa</option>
    <option value="GJ" <?php if($sfdrow['State']=="GJ") {echo "selected";} ?>>Gujarat</option>
    <option value="HR" <?php if($sfdrow['State']=="HR") {echo "selected";} ?>>Haryana</option>
    <option value="HP" <?php if($sfdrow['State']=="HP") {echo "selected";} ?>>Himachal Pradesh</option>
    <option value="JK" <?php if($sfdrow['State']=="JK") {echo "selected";} ?>>Jammu and Kashmir</option>
    <option value="JH" <?php if($sfdrow['State']=="JH") {echo "selected";} ?>>Jharkhand</option>
    <option value="KA" <?php if($sfdrow['State']=="KA") {echo "selected";} ?>>Karnataka</option>
    <option value="KL" <?php if($sfdrow['State']=="KA") {echo "selected";} ?>>Kerala</option>
    <option value="LA" <?php if($sfdrow['State']=="LA") {echo "selected";} ?>>Ladakh</option>
    <option value="LD" <?php if($sfdrow['State']=="LD") {echo "selected";} ?>>Lakshadweep</option>
    <option value="MP" <?php if($sfdrow['State']=="MD") {echo "selected";} ?>>Madhya Pradesh</option>
    <option value="MH" <?php if($sfdrow['State']=="MH") {echo "selected";} ?>>Maharashtra</option>
    <option value="MN" <?php if($sfdrow['State']=="MN") {echo "selected";} ?>>Manipur</option>
    <option value="ML" <?php if($sfdrow['State']=="ML") {echo "selected";} ?>>Meghalaya</option>
    <option value="MZ" <?php if($sfdrow['State']=="MZ") {echo "selected";} ?>>Mizoram</option>
    <option value="NL" <?php if($sfdrow['State']=="NL") {echo "selected";} ?>>Nagaland</option>
    <option value="OR" <?php if($sfdrow['State']=="OR") {echo "selected";} ?>>Odisha</option>
    <option value="PY" <?php if($sfdrow['State']=="PY") {echo "selected";} ?>>Puducherry</option>
    <option value="PB" <?php if($sfdrow['State']=="PB") {echo "selected";} ?>>Punjab</option>
    <option value="RJ" <?php if($sfdrow['State']=="RJ") {echo "selected";} ?>>Rajasthan</option>
    <option value="SK" <?php if($sfdrow['State']=="SK") {echo "selected";} ?>>Sikkim</option>
    <option value="TN" <?php if($sfdrow['State']=="TN") {echo "selected";} ?>>Tamil Nadu</option>
    <option value="TG" <?php if($sfdrow['State']=="TG") {echo "selected";} ?>>Telangana</option>
    <option value="TR" <?php if($sfdrow['State']=="TR") {echo "selected";} ?>>Tripura</option>
    <option value="UP" <?php if($sfdrow['State']=="UP") {echo "selected";} ?>>Uttar Pradesh</option>
    <option value="UT" <?php if($sfdrow['State']=="UT") {echo "selected";} ?>>Uttarakhand</option>
    <option value="WB" <?php if($sfdrow['State']=="WB") {echo "selected";} ?>>West Bengal</option>
      </select>
      </div>
         
         
        
          <div class="form-floating mb-3">
     <input type="Phone number" class="form-control rounded-3" id="floating10" name="pincode" value="<?php echo $sfdrow['Pin_code'];  ?>">
            <label for="floating10">ZIP</label>
          </div>
   
                     
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" name="update" value="update" >UPDATE</button>
        
         
         
        </form>
      </div>
    </div>
  </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>