<?php

session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DATABASE-Financial Advisor</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c54ebdecc5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">


</head>
  <body class=" bg-secondary">
    <?php  include("navbar.php");?>



    <div class="modal modal-signin position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSignin">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
        <h1 class="fw-bold mb-0 fs-2 text-primary">Choose the table</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
   
      <div class="modal-body p-5 pt-0">
       
        <form action="databasebackend.php" method="post">
  <label for="table" class="text-dark " style="font-weight:bold;" >Select Table:</label>
<select name="tables" id="tables" class="form-control rounded-3" >
	<option value=""   class="form-control rounded-3 text-dark " style="font-weight:bold;" >--- Choose a table ---</option>
	<option value="user_data"  class="form-control rounded-3 text-dark " style="font-weight:bold;">  user_data</option>
	<option value="reason"  class="form-control rounded-3 text-dark " style="font-weight:bold;" >reason</option>
  <option value="personal_infromation"  class="form-control rounded-3 text-dark " style="font-weight:bold;" >LOAN (Personal-Information)</option>
	
</select><br>
<button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" name="submit">Submit</button>
  </form>
   
      </div>
    </div>
  </div>
</div>





 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>



