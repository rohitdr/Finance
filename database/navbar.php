<?php

session_start();
?>
<nav class="navbar navbar-expand-lg  navbar-dark myfont1  " style="background-color:teal; font-family: 'Trirong', serif;
font-size: 20px;">
  <!-- <a class="navbar-brand" href="#" style="margin-right:5px">
    <img src="F.jpg" alt="ANIL" width="30" height="30">
  </a> -->
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand active" href="<?php if(($_SESSION['username']=='admin')){ echo 'database.php';} else{echo 'index.php'; } ?>"><?php if(isset($_SESSION['username'])){ if($_SESSION['username']=='admin'){echo 'Anil Kumar Maurya';} else{echo $_SESSION['username'];}} else {echo 'FINANCIAL ADVISOR'; } ?></a>
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
          <ul class="dropdown-menu" style="background-color:teal;">
            <li><a class="dropdown-item text-white" href="first.php">OVERVIEW</a></li>
            <li><a class="dropdown-item text-white" href="xerox.php">XEROS</a></li>
           
            <li><a class="dropdown-item text-white" href="other.php">OTHER</a></li>
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
          <ul class="dropdown-menu" style="background-color:teal;">
        
           
            <li> <button class="btn btn-outline-light pt-1 m-1"  onclick="location.href='<?php if(!isset($_SESSION['username'])){ echo 'sign_up.php';} else{echo '#'; } ?>';" type="button"><?php if(!isset($_SESSION['username'])){ echo 'Sign Up';} else{ echo $_SESSION['email'];} ?></button></li>
            <li> <button class="btn btn-outline-light pt-1 m-1"  onclick="location.href='<?php if(isset($_SESSION['username'])){ echo 'logout.php';} else{echo 'login.php'; } ?>';" type="button"><?php if(isset($_SESSION['username'])){ echo 'LOGOUT';} else{echo 'LOGIN'; } ?></button></li>
          </ul>
        </li>
       <!-- <li>
          <button class="btn btn-outline-light pt-1 m-1"  onclick="location.href='<?php if(isset($_SESSION['username'])){ echo 'logout.php';} else{echo 'login.php'; } ?>';" type="button"><?php if(isset($_SESSION['username'])){ echo 'LOGOUT';} else{echo 'LOGIN'; } ?></button>
        </li> -->
       </ul>
       
      
      <form class="d-flex" role="search">
        <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit">Search</button>
      </form>
     
         
      
    </div>
    
  </div>
</nav>
