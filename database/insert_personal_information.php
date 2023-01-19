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
 
 
 include("connection.php");







?>

 



<div class="modal modal-signin position-static d-block  py-5" tabindex="-1" role="dialog" id="modalSignin">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        
        <h1 class="fw-bold mb-0 fs-2 text-primary">Insert Data in the Table</h1>
        
      </div>

      <div class="modal-body p-5 pt-0">
        <form method="post" action="insert_personal_information_backend.php">
        <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-3" id="floating1" name="full_name">
            <label for="floating1"> Full Name</label>
          </div>
        <div class="form-floating mb-3">
            <input type="phone number" class="form-control rounded-3" id="floating2"   name="number">
            <label for="floating2">Phone Number</label>
          </div>
          <div class="form-floating mb-3">
     <input type="email" class="form-control rounded-3" id="floating3" name ="email">
            <label for="floating3">Email address</label>
          </div>
          <div class="form-floating mb-3">
     <input type="text" class="form-control rounded-3" id="floating4" name ="father_name">
            <label for="floating4">Father Name</label>
          </div>
          <div class="form-floating mb-3">
     <input type="text" class="form-control rounded-3" id="floating5" name ="mother_name">
            <label for="floating5">Mother Name</label>
          </div>
            
          <div class="form-outline flex-fill mb-1">
                      
                      <label class="form-label" for="flexRadioDefault1">Gender</label>
                      <input class="form-check-input radiomargin" type="radio" name="gender" id="flexRadioDefault1" value="male" >
                        <label class="form-label " for="flexRadioDefault1">Male</label>
                        <input class="form-check-input  radiomargin" type="radio" name="gender" id="flexRadioDefault2" value="female"  >
                        <label class="form-label" for="flexRadioDefault2">Female</label>
                        <input class="form-check-input  radiomargin" type="radio" name="gender" id="flexRadioDefault3" value="other">
                        <label class="form-label" for="flexRadioDefault3">Other</label>
                    
                    </div>
                    <div class="form-floating mb-3">
            <input type="date" class="form-control rounded-3" id="floating6"   name ="dob">
            <label for="floating6">Date of birth</label>
          </div>

          <legend class="col-form-label col-sm-4 pt-0 mt-3">Type of Id</legend>
          <div class="form-floating mb-3">
        <div class="form-check mt-2">
          <input class="form-check-input " type="radio" name="gridRadios" id="gridRadios1" value="Passport" checked>
          <label class="form-check-label " for="gridRadios1">
            Passport
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Adhare card">
          <label class="form-check-label" for="gridRadios2">
            Adhare Card
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Driving Licence">
          <label class="form-check-label" for="gridRadios2">
            Driving Licence
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="voter id">
          <label class="form-check-label" for="gridRadios2">
            Voter Id
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Socail Security Number">
          <label class="form-check-label" for="gridRadios2">
            Socail Security Number
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="other">
          <label class="form-check-label" for="gridRadios2">
            Other
          </label>
          <input type="text" class="form-control" placeholder="OTHER" name="Other_id_name">
        </div>
       
      </div>
      <div class="form-floating mb-3">
     <input type="phone number" class="form-control rounded-3" id="floating15" name ="idnumber">
            <label for="floating15">Id Number</label>
          </div>
  

  <div class="form-floating mb-3">
     <input type="text" class="form-control rounded-3" id="floating7" name ="inputAddress">
            <label for="floating7">Address 1</label>
          </div>

          <div class="form-floating mb-3">
     <input type="text" class="form-control rounded-3" id="floating8" name ="inputAddress2">
            <label for="floating8">Address 2</label>
          </div>

          <div class="form-floating mb-3">
     <input type="text" class="form-control rounded-3" id="floating9" name ="inputCity">
            <label for="floating9">City</label>
          </div>
          <legend class="col-form-label col-sm-4 pt-0 " for="inputState">State</legend>
          <div class="form-floating mb-3">
      
      <select id="inputState"  name ="inputState" class="form-control rounded-3">
      <option selected>Choose...</option>
        <option value="AN">Andaman and Nicobar Islands</option>
    <option value="AP">Andhra Pradesh</option>
    <option value="AR">Arunachal Pradesh</option>
    <option value="AS">Assam</option>
    <option value="BR">Bihar</option>
    <option value="CH">Chandigarh</option>
    <option value="CT">Chhattisgarh</option>
    <option value="DN">Dadra and Nagar Haveli</option>
    <option value="DD">Daman and Diu</option>
    <option value="DL">Delhi</option>
    <option value="GA">Goa</option>
    <option value="GJ">Gujarat</option>
    <option value="HR">Haryana</option>
    <option value="HP">Himachal Pradesh</option>
    <option value="JK">Jammu and Kashmir</option>
    <option value="JH">Jharkhand</option>
    <option value="KA">Karnataka</option>
    <option value="KL">Kerala</option>
    <option value="LA">Ladakh</option>
    <option value="LD">Lakshadweep</option>
    <option value="MP">Madhya Pradesh</option>
    <option value="MH">Maharashtra</option>
    <option value="MN">Manipur</option>
    <option value="ML">Meghalaya</option>
    <option value="MZ">Mizoram</option>
    <option value="NL">Nagaland</option>
    <option value="OR">Odisha</option>
    <option value="PY">Puducherry</option>
    <option value="PB">Punjab</option>
    <option value="RJ">Rajasthan</option>
    <option value="SK">Sikkim</option>
    <option value="TN">Tamil Nadu</option>
    <option value="TG">Telangana</option>
    <option value="TR">Tripura</option>
    <option value="UP">Uttar Pradesh</option>
    <option value="UT">Uttarakhand</option>
    <option value="WB">West Bengal</option>
      </select>
      </div>
         
         
        
          <div class="form-floating mb-3">
     <input type="Phone number" class="form-control rounded-3" id="floating10" name="pincode">
            <label for="floating10">ZIP</label>
          </div>
   
      
         
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" name="submit" value="submit" >INSERT</button>
        
         
         
        </form>
      </div>
    </div>
  </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>