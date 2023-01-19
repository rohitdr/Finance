<?php
session_start();

?>
<!doctype html>

<html lang="en">
  <head>
   
    <script src="chat.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>financial_advisor</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <script src="https://kit.fontawesome.com/c54ebdecc5.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rubik+Gemstones&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="indexbutton.css">
    
   <style>
 
.center{
    text-align:center;
  }
  .size{
    color:#3ad238;
    font-size:60px;
  }
  .im{
        background-image: url('indextop.jpg');
        background-repeat:no-repeat;
        background-size:cover;
 
       }
     



body {
  
  color: #fff;
 
  text-shadow: 0 1px 3px rgba(0,0,0,.5);
}

    </style>

  
  </head>
  <body>
    
<?php
 
include("navbar.php");
?>

<main >




  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
  
 <div class="container pt-3 ">
  <div class="p-2 mb-2 bg-light rounded-3 im " >
    <div class="container-fluid py-2 text-dark shadow-lg">
      <h1 class="display-5 fw-bold text-dark ">We’re wise beyond our collective years and intent on making the most of yours.</h1>
      <p  style="color:green" class="col-md-8 fs-4 text-left">Wealth advice with a disciplined, evidence-based approach is hard to come by. Fortunately, you’ve found your way here, as that’s precisely what Buckingham delivers.</p>
      <button class="btn btn-primary btn-lg button-92 " type="button" onclick="window.location.href='contactus.php'">CONTACT </button>
      <div class="row align-items-md-stretch">
        <div class="col-md-6  mt-2 ">
          <div class="h-100 p-5 text-bg-dark rounded-3  h5 shadow-lg ">
            <h2 class="text-success">Good is never good enough.</h2>
            <p>It’s what drives us to find clear, academic answers to your every question. And every follow-up question. Until all that’s left is clarity, comfort and a strategy built to your specific needs and values.</p>
        
           </div>
        </div>
        <div class="col-md-6  mt-2">
          <div class="h-100 p-5 bg-light border rounded-3 text-dark  shadow-lg">
            <h2 class="text-success">Live in the now.
              We’ll keep our eye on what’s ahead.</h2>
            <p>Guided by evidence and fueled by your ambitions, our team will seek to continuously optimize a wealth strategy distinctly tailored to your needs. Helping you focus on the now and letting us prepare for what’s next.</p>
             <!-- <button class="btn btn-outline-secondary" type="button">Example button</button> -->
           </div>
        </div>
      </div>
    </div>
  </div>
  </div> 

  <div class="container marketing mt-5">

   
  


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette reveal shadow-lg">
      <div class="col-md-7 pt-5 ">
        <h2 class="featurette-heading fw-normal lh-1 text-center fw-bolder pt-5 size mb-2"> Personal Loan</h2>
        <p class="lead text-dark fw-bold text-center"> A Personal Loan is ideal for funding planned events, such as marriages, vacations & home renovation or unplanned ones, like emergency medical procedures. The best part is that you can get a Loan quickly through an end to end online process for your every need.</p>
      
      </div>
      <div class="col-md-5">
       
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto border " src="personalloanindex.png" alt="" width="500" height="500">
      </div>
      <div class="center m-3  ">
      <a href="first.php" class="btn btn-primary  btn-lg active text-center center button-92" role="button" aria-pressed="true">Apply Now</a>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette reveal ">
      <div class="col-md-7 order-md-2 pt-5">
        <h2 class="featurette-heading fw-normal lh-1 text-center fw-bolder pt-5 size mb-2 ">Education Loan</h2>
        <p class="lead text-dark fw-bold text-center">Why should money stand in the way of the future? A simple way to fund your dreams is by obtaining an education loan. An education loan can assist you in gaining admission to the university of your interest.</p>
      
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto border" src="educationloanindedx.webp" alt="" width="500" height="500">
      </div>
      <div class="container center m-3 order-md-3">
      <a href="first.php" class="btn btn-primary btn-lg active text-center center button-92" role="button" aria-pressed="true">Apply Now</a>
      </div>
    </div>

   

    <hr class="featurette-divider">

    <div class="row featurette reveal shadow-lg">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1 text-center fw-bolder pt-5 size mb-2">Meet Me</h2>
        <p class="lead text-dark fw-bold text-center">Asking someone for a coffee meeting might sound unprofessional, but it's actually a great way to get to know a client or colleague better. Coffee meetings offer a more relaxed and personal setting to discuss things, which can potentially help a customer or colleague open up more about the company, brand or anything else that's on their mind.</p>
       
      </div>
      <div class="col-md-5">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto border" src="meetingindex.webp" alt="" width="500" height="500">
      </div>
      <div class="center m-3 order-md-3">
      <a href="first.php" class="btn btn-primary btn-lg active text-center center button-92" role="button" aria-pressed="true">Apply Now</a>
      </div>
    </div>
    <hr class="featurette-divider">
    
    <div class="row featurette reveal ">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1 text-center fw-bolder pt-5 size mb-2">Xerox</h2>
        <p class="lead text-dark fw-bold text-center">Quality online document printout service in India for office, corporate, school, college and home with cheap price. You can print colour or black & white pdf documents, thesis, print training reports, college project reports, pdf book printing etc online with spiral binding, twin wiro binding, soft cover perfect binding or hard binding and delivered it to anywhere in India.</p>
        
      </div>
      <div class="col-md-5">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto border" src="photocopy-concept-illustration_114360-1076.webp" alt="" width="500" height="500">
      </div>
      <div class="center m-3 order-md-3">
      <a href="first.php" class="btn btn-primary btn-lg active text-center center button-92 " role="button" aria-pressed="true">PrintOut</a>
      </div>
    </div>
    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div>
<!--   
<div class="container col-xxl-10 px-4 py-5 reveal">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="306736831_3261871180691576_6615227132091947851_n.jpg" class="d-block mx-lg-auto img-fluid border" alt="Bootstrap Themes" width="400" height="400" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3 stylishfont">Rohit Kumar</h1>
        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          
        </div>
      </div>
    </div>
  </div> -->





  <div class="container col-xxl-10 px-4 py-5 reveal shadow-lg">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      
      <div class="col-lg-6 text-dark">
        <h1 class="display-5 fw-bold lh-1 mb-3 stylishfont">Anil Kumar Maurya<h1>
        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        </div>
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="anil2.jfif" class="d-block mx-lg-auto img-fluid border" alt="......loading" width="500" height="400" loading="lazy">
      </div>
    </div>
  </div>

  <hr class="featurette-divider ">
  <div class="container reveal  ">
 <iframe width="100%" height="500px" src="C8E9W3PRP7BFS704.mp4" title="YouTube video player" frameborder="0" allow="accelerometer;  clipboard-write; encrypted-media; gyroscope; picture-in-picture"  autoplay=1 allowfullscreen></iframe>
 </div>
<!-- 
  <div class="container col-xxl-10 px-4 py-5 mb-2 reveal">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="mohit.jpeg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="500" height="400" loading="lazy">
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold lh-1 mb-3 stylishfont">Mohit Kumar</h1>
      <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
     
    </div>
  </div>
</div> -->

</main>

















<?php
include("footer.php");

?>
 <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

