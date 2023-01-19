<?php
session_start();
?>
<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign-up -- Financial Advisor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c54ebdecc5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<style>
  .radiomargin{
    margin-left:10px;
  }
</style>

</head>
  <body>
   <?php
   include("navbar.php");
   ?>
 



    <section class="vh-100 pt-5" style="background-color: #eee;">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-lg-12 col-xl-11">
            <div class="card text-black" style="border-radius: 25px;">
              <div class="card-body p-md-5">
                <div class="row justify-content-center">
                  <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
    
                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
    
                    <form class="mx-1 mx-md-4" action="signupbackend.php" method="post">
    
                      <div class="d-flex flex-row align-items-center mb-2">
                       
                        <div class="form-outline flex-fill mb-0">
                        <i class="fas fa-user fa-lg me-2  fa-fw"></i>
                        <label class="form-label" for="form3Example1c">Your Full Name:</label>
                          <input type="text" id="form3Example1c" placeholder="Enter your name" class="form-control" name="name" onkeyup="this.value = this.value.toUpperCase();" required/>
                          
                        </div>
                      </div>
                      <div class="d-flex flex-row align-items-center mb-2">
                     
                        <div class="form-outline flex-fill mb-0">
                        <i class="fa-solid fa-phone me-3"></i>
                        <label class="form-label" for="form3Example1c">Your Phone Number</label>
                          <input type="phone number" id="form3Example1f"  placeholder="Enter your Number" class="form-control" name="number"  required/>
                          
                        </div>
                      </div>
                      <div class="d-flex flex-row align-items-center mb-2">
                     
                        <div class="form-outline flex-fill mb-1">
                        <i class="fa-regular fa-calendar-days me-3"></i>
                        <label class="form-label" for="form3Example1c">Date of Birth</label>
                          <input type="date" id="form3Example1e" class="form-control" name="dob"  required/>
                          
                        </div>
                      </div>
                      
                      <div class="d-flex flex-row align-items-center mb-1">
                      
                        <div class="form-outline flex-fill mb-1">
                        <i class="fa-solid fa-person me-3"></i>
                        <label class="form-label" for="flexRadioDefault1">Gender</label>
                        <input class="form-check-input radiomargin" type="radio" name="gender" id="flexRadioDefault1" value="male" required>
                          <label class="form-label " for="flexRadioDefault1">Male</label>
                          <input class="form-check-input  radiomargin" type="radio" name="gender" id="flexRadioDefault2" value="female">
                          <label class="form-label" for="flexRadioDefault2">Female</label>
                          <input class="form-check-input  radiomargin" type="radio" name="gender" id="flexRadioDefault3" value="other">
                          <label class="form-label" for="flexRadioDefault3">Other</label>
                        </div>
                      </div>
                    
                      <div class="d-flex flex-row align-items-center mb-2">
                       
                        <div class="form-outline flex-fill mb-0">
                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                        <label class="form-label" for="form3Example3c">Your Email:</label>
                          <input type="email" id="form3Example3c" placeholder="Enter your email"class="form-control" name ="email" required />
                          
                        </div>
                      </div>
    
                      <div class="d-flex flex-row align-items-center mb-2">
                       
                        <div class="form-outline flex-fill mb-0">
                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                        <label class="form-label" for="form3Example4c">Password:</label>
                          <input type="password" id="form3Example4c" placeholder="Enter your password" class="form-control" name ="password1"   minlength="8" required />
                          
                        </div>
                      </div>
                      
                      


                      <div class="d-flex flex-row align-items-center mb-4">
                       
                        <div class="form-outline flex-fill mb-0">
                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                        <label class="form-label" for="form3Example4cd">Confirm Password:</label>
                          <input type="password" id="form3Example4cd"placeholder="Enter your password again" class="form-control" name="password2" required />
                         
                        </div>
                      </div>
    
                      <div class="form-check d-flex justify-content-center mb-5">
                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                        <label class="form-check-label" for="form2Example3">
                          I agree all statements in <a href="#!">Terms of service</a>
                        </label>
                      </div>
    
                      <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <!-- <input type="submit" Name ="submit" value ="Register"> -->
                      <button type="submit" class="btn btn-primary " onclick="matchPassword()" value="submit" name ="submit" >Register</button>
                      </div>
    
                    </form>
    
                  </div>
                  <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
    
                    <img src="draw1.webp"
                      class="img-fluid" alt="Sample image">
    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   
  

    <div style="height:310px; background-color: #eee;"></div>  

<?php
include("footer.php");
?>
<!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>