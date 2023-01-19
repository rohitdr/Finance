<?php 
session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Personal_Loan -- financial_advisor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <script src="https://kit.fontawesome.com/c54ebdecc5.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rubik+Gemstones&display=swap" rel="stylesheet">
  <style>
label,legend{
  font-weight:bold;
}
.personal{
background-color: ##bebfd6;
}
body{
  background-image:url('v960-ning-30.jpg');
 
       background-repeat:no-repeat;
       background-size:cover;
}
h1{
  font-weight:bold;
}
input{
  background-color: #bebfd6;
}


  </style>


</head>
  <body>
   
  <?php if(!isset($_SESSION['email'])){
 
  echo "<script>location.replace('login.php');</script>";
}
else{



?>
 <?php
require("navbar.php");
 ?>

     





    






<div class="container text-center text-white m-2 mb-0">
  <h1 class="">Personal Loan Application</h1>
  
</div>

 

<!-- personal information -->


<div class="container col-xxl-10 px-3 py-2 mb-2 reveal personal ">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-2">
  <hr style="width:100%;text-align:left;margin-left:0">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="man-personal-information-folder-data-safety-man-personal-information-103799869.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="500" height="400" loading="lazy">
    </div>
    <div class="col-lg-6">
    

<div class="row ">
  <h4 class="text-primary fw-bold">Personal Information</h4>
  <hr style="width:100%;text-align:left;margin-left:0">
</div>
 <form method="post" action="loan_backend.php">
  <div class="row mt-2">
  <label for="First_name"> FULL NAME</label>
    <div class="col">
      <input type="text" class="form-control"  name ="full_name" placeholder="Full name" value ="<?php  echo $_SESSION['username']; ?>" >
    </div>
   
  </div>
  <div class="row  mt-2">
  <label for="father_name">FATHER NAME</label>
    <div class="col">
      <input type="text" class="form-control" placeholder="Father name" name="father_name"  >
    </div>
   
  </div>
  <div class="row  mt-2">
  <label for="mother_name"> MOTHER NAME</label>
    <div class="col">
      <input type="text" class="form-control" placeholder="Mother name"  name ="mother_name" >
    </div>
   
  </div>
  <fieldset class="form-group  mt-2">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0 mt-3">GENDER</legend>
      <div class="col-sm-10">
        <div class="form-check mt-2">
          <input class="form-check-input " type="radio" name="gender" id="gridRadios1" value="male" <?php if($_SESSION['gender']=="male") {echo "checked";} ?> >
          <label class="form-check-label " for="gridRadios1">
            MALE
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="female" <?php  if ($_SESSION['gender']=="female"){echo "checked";}?>>
          <label class="form-check-label" for="gridRadios2">
            FEMALE
          </label>
        </div>
        <div class="form-check disabled">
          <input class="form-check-input" type="radio" name="gender" id="gridRadios3" value="other"  <?php  if ($_SESSION['gender']=="other"){echo "checked";}?>>
          <label class="form-check-label" for="gridRadios3">
          OTHER
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  <div class="form-group  mt-2 col-md-4">
    <label for="inputdob">Date Of Birth</label>
    <input type="date" class="form-control" id="date_of_birth" name="dob" value ="<?php  echo $_SESSION['dob'];     ?>">
  </div>
 
  <div class="row  mt-2 col-md-5">
    <div class="col">
      <label for="inputEmail4">Email Address</label>
      <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email" value ="<?php  echo $_SESSION['email'];   ?>">
    </div>
    </div>
    <div class="form-group  mt-2 col-md-5">
  
    <label for="inputPhone_number">Phone Number</label>
    <input type="phone number" class="form-control" id="inputPhone_number" name="number" placeholder="Phone Number" value ="<?php  echo $_SESSION['Phone_number'];     ?>" >
  
  </div>
    </div>
  </div>
</div>


<!-- addtionla information -->


<div class="container col-xxl-10 px-4 py-1 mb-0 reveal personal mt-0 ">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-0">
  <hr style="width:100%;text-align:left;margin-left:0">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="additional-information-resources.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="700" loading="lazy">
    </div>
    <div class="col-lg-6">


    <fieldset class="form-group  mt-0">
    <div class="row">
    <div class="row  mt-0">
  <h4>Identity Verfication</h4>
  <hr style="width:100%;text-align:left;margin-left:0">
</div>
      <legend class="col-form-label col-sm-2 pt-0 mt-3">Type of Id</legend>
      <div class="col-sm-10">
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
    </div>
  </fieldset>
  
  <div class="form-group  mt-2">
    <label for="inputid">ID NUMBER</label>
    <input type="text" class="form-control" id="inputid" name="idnumber"placeholder="ID Number">
  </div>
  <div class="row  mt-3">
  <h4 class="text-primary fw-bold">HOME ADDRESS</h4>
  <hr style="width:100%;text-align:left;margin-left:0">
</div>
  <div class="form-group  mt-2">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group  mt-2">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" name="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  
  <div class="form-row  mt-2">
    <div class="form-group ">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" name ="inputCity" Placeholder="City">
    </div>
    <div class="form-group   mt-2">
      <label for="inputState">State</label>
      <select id="inputState"  name ="inputState"class="form-control">
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
    <div class="form-group col-md-4 mt-2">
      <label for="inputZip">ZIP</label>
      <input type="Phone number" class="form-control" id="inputZip" placeholder="Pin code" name="pincode">
    </div>
  </div>
  <div class="form-group  mt-2">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
      I agree all statements in <a href="#!">Terms of service</a>
      </label>
    </div>
  </div>








    </div>
  </div>
</div>

<div class="container m-3 "  style="text-align:center;">
<button type="submit" class="btn btn-primary  lg " value="submit" name="submit">Submit</button>
</div>

</form>













</div>

<script>




</script>
<?php
require("footer.php");
 ?>
  

<?php
}
?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>