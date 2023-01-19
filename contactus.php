<?php
session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CONTACT US - Financial Advisor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c54ebdecc5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
 <Style>
   
  nav{
        background-color:teal;
        position: fixed;
        top: 0;
      }
      footer{
        background-color:teal;
       
        
      }
    
      .myfont1{
      font-family: "Trirong", serif;
  font-size: 20px;}
   .myfont2{
      font-family: "Trirong", serif;
  font-size: 20px;
    }
    body{
    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
}
  

.contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 90%;
    background:navajowhite;
}
.contact-form .form-control{
    border-radius:1rem;
    background:sandybrown;
   
}
.contact-image{
    text-align: center;
}
.contact-image img{
 
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}
.contact-form form{
    padding: 5%;
    padding-bottom:15%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
  padding-top:15%;
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
  
}
.contact-form .btnContact {
    width: 100%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
   
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}
.input-icons i {
            position: absolute;
        }
          
        .input-icons {
            width: 100%;
            
        }
          
        .icon {
          padding:15px;
       
            min-width: 50px;
            text-align: center;
        }
          
        .input-field {
            width: 100%;
            padding: 10px;
            text-align: center;
        }
.imganimation {
  
  
  background-image:"https://image.ibb.co/kUagtU/rocket_contact.png";
  position: relative;
  animation-name: example;
  animation-duration: 0.5s;
 
}

@keyframes example {


  0%   {background-image:"https://image.ibb.co/kUagtU/rocket_contact.png"; left:0px; top:0px;}
  25%  {background-image:"https://image.ibb.co/kUagtU/rocket_contact.png"; left:0px; top:150px;}
  50%  {background-image:"https://image.ibb.co/kUagtU/rocket_contact.png"; left:0px; top:0px;}
  75%  {background-image:"https://image.ibb.co/kUagtU/rocket_contact.png"; left:0px; top:-550px;}
  100%  {background-image:"https://image.ibb.co/kUagtU/rocket_contact.png"; left:0px; top:0px;}

 
}
 input ::placeholder {
  color: red;
  
}


    </style>
 

</head>
  <body>
    
<?php include("navbar.php");
?>

     
 
<?php

     

    

if(isset($_POST['btnSubmit'])){
    
   $name = $_POST['nameing'];
   $email = $_POST['email'];
   $number = $_POST['number'];
   $reaso = $_POST['reason'];
  
   


  
 
    function valid_phone($phone)
    {
        return preg_match('/^[0-9]{10}+$/', $phone);
    }

    if(!valid_phone($number)){
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong> Your Phone number is invalid!
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
     </div>';
    }
    else{
    
 
    

   
 
//email
$to ="rohitdr098@gmail.com";
$subject ="Need help to .";
$message ="Name : ".$name."\n"."Email : ".$email."\n"."Phone number : ".$number."\n"."Reason : ".$reaso." ";
$header ="from : ".$email;
 $mailed =mail($to,$subject,$message,$header);



include("connection.php");
if (!$con){
   die("Sorry we failed to connect: ". mysqli_connect_error());
}

else{

$sql = "insert into contact_us (name, email, number, reason) VALUES ('$name', '$email', '$number' , '$reaso')";

$result= mysqli_query($con, $sql);



if($result && $mailed){
 
  

  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
   <strong>Success!</strong> We will contact you soon.
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>';

 }

else{
    //  echo "The record was not inserted successfully because of this error ---> ". mysqli_error($con);
     echo '<div class="alert alert-danger alert-dismissible" role="alert">

     <strong>Error!</strong> We are facing some technical issue! please try again later.
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>';
 }
}
}


}
?> 



<div class="container   contact-form ">
            <div class="contact-image ">
                <img id ="imganimation" src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form method="post"  enctype="multipart/form-data">
                <h3 class="text-dark"><marquee behavior="alternative" direction="right">Drop Us a Message</marquee></h3>
               <div class="row text-centre ">
                    <div class="col-md-12 ">
                        <div class="form-group mt-3 input-icons">
                        <i class="fa-solid fa-file-signature icon"></i> 
                        <input type="text" name="nameing" class="form-control input-field border-dark" placeholder="Your Name *"  required value ="<?php  echo $_SESSION['username']; ?>">
                        </div>
                        <div class="form-group mt-3 input-icons">
                       <i class="fa-solid fa-envelope icon"></i> 
                         <input type="email" name="email" class="form-control input-field  border-dark" placeholder="Your Email *"   required value ="<?php  echo $_SESSION['email'];   ?>" >
                         <small id="emailHelp" class="form-text text-dark">We will never share your email with anyone else.</small>
                        </div>
                        <div class="form-group mt-3 input-icons">
                        <i class="fa-solid fa-phone icon"></i>
                         <input type="phone number" name="number" class="form-control input-field  border-dark" placeholder="Phone Number *"   required value ="<?php  echo $_SESSION['Phone_number'];     ?>">
                        </div>
                        
                        <div class="form-group mt-3 input-icons">
                        <i class="fa-solid fa-message p-3"></i>
                            <textarea name="reason" class="form-control input-field  border-dark" placeholder="Your Message *" style="width: 100%; height: 150px;"  required></textarea>
                        </div>
                        <div class="form-group mt-2">
                            <!-- <input type="submit" name="btnSubmit"  class="btnContact" value="Send Message" /> -->
                            <button  name="btnSubmit" class="btnContact" value="Send Message"  onclick="DoAnimation();" type="submit">Send</button>
                        </div>
                    </div>
                    <!-- <div class="col-md-6">
                        
                    </div> -->
                  
                       
                </div>
             
            </form>
</div>
<script>


function DoAnimation() {
  var targetElement = document.getElementById("imganimation");
  targetElement.className = "imganimation";
}

  </script>


       


  


<?php
include("footer.php");
?>  





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>