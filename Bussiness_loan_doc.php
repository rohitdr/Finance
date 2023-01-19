<?php

session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bussiness Loan-Financial Advisor</title>
    
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
        <h1 class="fw-bold mb-0 fs-2 text-primary centre">Upload  Documents</h1>
     
       
      </div>
     
   
      <div class="modal-body p-5 pt-0">
       
        <form action="Bussiness_loan_doc_backend.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
  <label for="photo1" class="form-label fw-bold">Photograph</label>
  <input class="form-control" type="file" id="photo1" name="photo_file">
</div>
<figcaption class="blockquote-footer text-danger">
    Photograph Should be Passport Size.
  </figcaption>
<div class="mb-3">
  <label for="formFile2" class="form-label fw-bold">Signature</label>
  <input class="form-control" type="file" id="formFile2" name="sign">
</div>
        <div class="mb-3">
  <label for="formFile3" class="form-label fw-bold">Id Document</label>
  <input class="form-control" type="file" id="formFile3" name="id_file">
</div>
<div class="mb-3">
  <label for="formFile4" class="form-label fw-bold"> Adhare card/Pan card</label>
  <input class="form-control" type="file" id="formFile4" name="adhare_or_pan">
</div>
<figcaption class="blockquote-footer text-danger">
    Its not the same as Id Document
  </figcaption>
<div class="mb-3">
  <label for="formFile5" class="form-label fw-bold">Salary Slip</label>
  <input class="form-control" type="file" id="formFile5" name="salary_slip">
</div>
<div class="mb-3">
  <label for="formFile6" class="form-label fw-bold">Banking Statement</label>
 
  <input class="form-control" type="file" id="formFile6" name="bank_statement">
</div>
<figcaption class="blockquote-footer text-info">
 The statement should be of 4 months.
  </figcaption>

<button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" name="submit">Submit</button>
  </form>
  <figcaption class="blockquote-footer text-danger text-center mt-2">
  All the documents should be of less than 100kb and pdf.
  </figcaption>
      </div>
    
    </div>
  </div>
</div>





 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>



