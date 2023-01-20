

<style>
  nav{
    font-size: 20px;
background:	#96C2DB;
}


@media (max-width: 1000px) {
  li a {
float:left;} 
}


 li a {

text-decoration:none;
padding:5px 21px;
margin:2px;

color:#000000;
border-radius:10px;
text-align:center;

/* border-top:2px solid #13274F;
border-right:2px solid #13274F;
border-bottom:2px solid #13274F;
border-left:2px solid #13274F; */
}

 li a:hover {
background:#B2B5E0;
color:#000;
border-top:2px solid #13274F;
border-right:2px solid #13274F;
border-bottom:2px solid #13274F;
border-left:2px solid #13274F;

}

.decorate{
  text-decoration:none;

  border-radius:10px;

color:#eee;

text-align:center;


}
.decorate:hover{
  background:#B2B5E0;
color:#000;
/* border-top:2px solid #815444;
border-right:2px solid #c59888;
border-bottom:2px solid #c59888;
border-left:2px solid #815444; */
border-top:2px solid #13274F;
border-right:2px solid #13274F;
border-bottom:2px solid #13274F;
border-left:2px solid #13274F;
}
  </style>

<nav class="navbar navbar-expand-lg  navbar-dark myfont1   ">
<!-- logo -->
<!-- 
style="background-color:teal; font-family: 'Trirong', serif;
font-size: 20px;" -->

  
  


  <div class="container-fluid">
 
<!--    
    <a class="navbar-brand" href="#">
    <img src="logofa.jpg" alt="ANIL" width="50" height="48"  style="margin-right:1px; border-radius:11px;">
    </a> -->
    <a class="navbar-brand active fw-bold" href="<?php if(($_SESSION['email']=='admin@gmail.com')){ echo 'database.php';} else{echo 'index.php'; } ?>"><?php if(isset($_SESSION['username'])){ if($_SESSION['username']=='admin'){echo 'Anil Kumar Maurya';} else{echo $_SESSION['username'];}} else {echo 'FINANCIAL ADVISOR'; } ?></a>
    <button class="navbar-toggler bg-primary " type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active fw-bold" aria-current="page" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active  fw-bold" href="product.php">PRODUCTS</a>
        </li>
      
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            SERVICES
          </a>
          <ul class="dropdown-menu dark" style="background-color:#96C2DB;">
          <li><a class="dropdown-item text-dark decorate fw-bold" href="loan.php">PERSONAL LOAN</a></li>
            <li><a class="dropdown-item text-dark decorate fw-bold" href="education_loan.php">EDUCATIONAL LOAN</a></li>
            <li><a class="dropdown-item text-dark decorate fw-bold" href="Bussiness_loan.php">BUSSINESS LOAN</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item text-dark decorate fw-bold" href="first.php">OVERVIEW</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active fw-bold" href="contactus.php">CONTACT US</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active fw-bold" href="about.php">ABOUT</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid fa-user"></i>
          </a>
          <ul class="dropdown-menu"  style="background-color:#96C2DB;">
        
           
            <li> <button class="dropdown-item pt-1 m-1 decorate text-dark fw-bold"  onclick="location.href='<?php if(!isset($_SESSION['username'])){ echo 'sign_up.php';} else{echo '#'; } ?>';" type="button"><?php if(!isset($_SESSION['username'])){ echo 'Sign Up';} else{ echo $_SESSION['email'];} ?></button></li>
            <li> <button class="dropdown-item pt-1 m-1 decorate text-dark fw-bold"  onclick="location.href='<?php if(isset($_SESSION['username'])){ echo 'logout.php';} else{echo 'login.php'; } ?>';" type="button"><?php if(isset($_SESSION['username'])){ echo 'LOGOUT';} else{echo 'LOGIN'; } ?></button></li>
          </ul>
        </li>
       <!-- <li>
          <button class="btn btn-outline-light pt-1 m-1"  onclick="location.href='<?php if(isset($_SESSION['username'])){ echo 'logout.php';} else{echo 'login.php'; } ?>';" type="button"><?php if(isset($_SESSION['username'])){ echo 'LOGOUT';} else{echo 'LOGIN'; } ?></button>
        </li> -->
       </ul>
       
      
      <form class="d-flex" role="search">
        <input class="form-control rounded-1" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light rounded-1 " type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
      </form>
     
         
      
    </div>
    
  </div>
</nav>
