

<style>
  nav{
    font-size: 20px;
background:	#7B3F00;
}





 li a {

text-decoration:none;
padding:5px 21px;

background:#5F3222;
color:#eee;

text-align:center;

border-top:2px solid #815444;
border-right:2px solid #3d1000;
border-bottom:2px solid #3d1000;
border-left:2px solid #815444;
}

 li a:hover {
background:#a37666;
color:#000;
border-top:2px solid #815444;
border-right:2px solid #c59888;
border-bottom:2px solid #c59888;
border-left:2px solid #815444;
}

.decorate{
  text-decoration:none;


background:#5F3222;
color:#eee;

text-align:center;

border-top:2px solid #815444;
border-right:2px solid #3d1000;
border-bottom:2px solid #3d1000;
border-left:2px solid #815444;
}
.decorate:hover{
  background:#a37666;
color:#000;
border-top:2px solid #815444;
border-right:2px solid #c59888;
border-bottom:2px solid #c59888;
border-left:2px solid #815444;
}
  </style>

<nav class="navbar navbar-expand-lg  navbar-dark myfont1 shadow  ">
<!-- logo -->
<!-- 
style="background-color:teal; font-family: 'Trirong', serif;
font-size: 20px;" -->

  
  


  <div class="container-fluid">
 
<!--    
    <a class="navbar-brand" href="#">
    <img src="logofa.jpg" alt="ANIL" width="50" height="48"  style="margin-right:1px; border-radius:11px;">
    </a> -->
    <a class="navbar-brand active" href="<?php if(($_SESSION['email']=='admin@gmail.com')){ echo 'database.php';} else{echo 'index.php'; } ?>"><?php if(isset($_SESSION['username'])){ if($_SESSION['username']=='admin'){echo 'Anil Kumar Maurya';} else{echo $_SESSION['username'];}} else {echo 'FINANCIAL ADVISOR'; } ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active " href="product.php">PRODUCTS</a>
        </li>
      
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            SERVICES
          </a>
          <ul class="dropdown-menu" style="background-color:#3D3342;">
          <li><a class="dropdown-item text-white decorate" href="loan.php">PERSONAL LOAN</a></li>
            <li><a class="dropdown-item text-white decorate" href="education_loan.php">EDUCATIONAL LOAN</a></li>
            <li><a class="dropdown-item text-white decorate" href="Bussiness_loan.php">BUSSINESS LOAN</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item text-white decorate" href="first.php">OVERVIEW</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="contactus.php">CONTACT US</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" href="about.php">ABOUT</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid fa-user"></i>
          </a>
          <ul class="dropdown-menu" style="background-color:#3D3331;">
        
           
            <li> <button class="dropdown-item pt-1 m-1 decorate"  onclick="location.href='<?php if(!isset($_SESSION['username'])){ echo 'sign_up.php';} else{echo '#'; } ?>';" type="button"><?php if(!isset($_SESSION['username'])){ echo 'Sign Up';} else{ echo $_SESSION['email'];} ?></button></li>
            <li> <button class="dropdown-item pt-1 m-1 decorate"  onclick="location.href='<?php if(isset($_SESSION['username'])){ echo 'logout.php';} else{echo 'login.php'; } ?>';" type="button"><?php if(isset($_SESSION['username'])){ echo 'LOGOUT';} else{echo 'LOGIN'; } ?></button></li>
          </ul>
        </li>
       <!-- <li>
          <button class="btn btn-outline-light pt-1 m-1"  onclick="location.href='<?php if(isset($_SESSION['username'])){ echo 'logout.php';} else{echo 'login.php'; } ?>';" type="button"><?php if(isset($_SESSION['username'])){ echo 'LOGOUT';} else{echo 'LOGIN'; } ?></button>
        </li> -->
       </ul>
       
      
      <form class="d-flex" role="search">
        <input class="form-control rounded-0" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light rounded-0 " type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
      </form>
     
         
      
    </div>
    
  </div>
</nav>
