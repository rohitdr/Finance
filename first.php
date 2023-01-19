<?php

session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OVERVIEW</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c54ebdecc5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="button.css">
    <link rel="stylesheet" href="infobutton.css">
    <link rel="stylesheet" href="firsttext.css">
    
  <style>
   
   
   
    body{
      background-image: url('overviewbackground.jpg');
     
     background-repeat:no-repeat;
     background-size:cover;

    }
  </style>


</head>
  <body>
    
  <?php include("navbar.php");
  ?>





      <!-- <main >
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center   my">
          <div class="col-md-5 p-lg-5 mx-auto my-5  text-white" >
            <h1 class="display-4 fw-normal ">Financial Products and Services</h1>
            <p class="lead fw-normal">we offer a broad range of products and services to make your financial life better. Whether you start with our digital tools or talk directly to one of us, we're here to help you find what you need.</p>
            <a class="btn btn-outline-secondary" href="#">Coming soon</a>
          </div>
          <div class="product-device shadow-sm d-none d-md-block"></div>
          <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
      <div> <div class ="container" width="50%">
        <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3 mk  ">
          <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden my1"  >
            <div class="my-3 py-3 text-dark">
              <h2 class="display-5 ">Loan</h2>
              <p class="lead"><ul>A loan is the lending of money by one or more individuals, organizations,</ul> <ul>  or other entities to  other individuals, organizations, etc</ul></p>
              <button class="btn btn-outline-dark mt-0" type="button" onclick="window.location.href='loan.php'">APPLY FOR LOAN</button>
            </div>
             
            <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
            <img src="loan.jpg" alt="" height="100%" width="100%"></div></div></div></div>
         <div class ="container" width="50%">
            <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3 mk  ">
              <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden my1"  >
                <div class="my-3 py-3 text-dark">
                  <h2 class="display-5 ">Xerox(Printout)</h2>
                  <p class="lead"><ul>We offer all type of printing color black and white </ul> <ul>and much more you can explore it.For using our xerox service use the below link</ul></p>
                  <button class="btn btn-outline-dark mt-0" type="button" onclick="window.location.href='loan.php'">APPLY FOR LOAN</button>
                </div>
                 
                <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
                <img src="loan.jpg" alt="" height="100%" width="100%"></div></div></div>
              </div>
              </div> -->



      <!--  
        <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
          <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
              <h2 class="display-5">Another headline</h2>
              <p class="lead">And an even wittier subheading.</p>
            </div>
            <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
          </div>
          <div class="text-bg-primary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 py-3">
              <h2 class="display-5">Another headline</h2>
              <p class="lead">And an even wittier subheading.</p>
            </div>
            <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
          </div>
        </div>
      
        <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
          <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
              <h2 class="display-5">Another headline</h2>
              <p class="lead">And an even wittier subheading.</p>
            </div>
            <div class="bg-body shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
          </div>
          <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 py-3">
              <h2 class="display-5">Another headline</h2>
              <p class="lead">And an even wittier subheading.</p>
            </div>
            <div class="bg-body shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
          </div>
        </div>
      
        <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
          <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
              <h2 class="display-5">Another headline</h2>
              <p class="lead">And an even wittier subheading.</p>
            </div>
            <div class="bg-body shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
          </div>
          <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 py-3">
              <h2 class="display-5">Another headline</h2>
              <p class="lead">And an even wittier subheading.</p>
            </div>
            <div class="bg-body shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
          </div>
        </div> -->
      <!-- </main> -->

      <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100 bg-secondary text-white">
                        <!-- Product image-->
                        <img class="card-img-top" src="personal-loan-calculator-dollar-bills-pen-thw-121801900.jpg" alt="..." height="200"  />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder stylish" style="font-weight:bold;">Personal Loan</h5>
                                <!-- Product price-->
                           
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent ">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto button-49 " href="loan.php">Apply</a></div>
                            <div class="text-center mt-2"> <a class="btn btn-outline-dark mt-auto button-56" href="loan.php">More Info</a></div>
                        </div>
                       
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 bg-secondary text-white">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"></div>
                        <!-- Product image-->
                        <img class="card-img-top" src="housing-loan.jpg" alt="..." height="200" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder stylish">Home       Loan</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                             
                            
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto button-49 " href="loan.php">Apply</a></div>
                            <div class="text-center mt-2"> <a class="btn btn-outline-dark mt-auto button-56" href="loan.php">More Info</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 bg-secondary text-white">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">0.5% Cheaper</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="Education-Loan.webp" alt="..."  height="200"  />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder stylish">Education Loan</h5>
                                <!-- Product price-->
                                
                              
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto button-49 " href="loan.php">Apply</a></div>
                            <div class="text-center mt-2"> <a class="btn btn-outline-dark mt-auto button-56" href="loan.php">More Info</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 bg-secondary text-white">
                        <!-- Product image-->
                        <img class="card-img-top" src="car-loan-avoid.jpg" alt="..."   height="200" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder stylish">Car Loan</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                            
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto button-49 " href="loan.php">Apply</a></div>
                            <div class="text-center mt-2"> <a class="btn btn-outline-dark mt-auto button-56" href="loan.php">More Info</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 bg-secondary text-white">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"></div>
                        <!-- Product image-->
                        <img class="card-img-top" src="mobile_LAP_banner.jpg" alt="..." height="200"  />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder stylish">Loan Against Property</h5>
                                <!-- Product price-->
                               
                              
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto button-49 " href="loan.php">Apply</a></div>
                            <div class="text-center mt-2"> <a class="btn btn-outline-dark mt-auto button-56" href="loan.php">More Info</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 bg-secondary text-white">
                        <!-- Product image-->
                        <img class="card-img-top" src="NBFC-Business-loan-sss.jpg" alt="..." height="200"  />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder stylish">Bussiness Loan</h5>
                                <!-- Product price-->
                               
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto button-49 " href="loan.php">Apply</a></div>
                            <div class="text-center mt-2"> <a class="btn btn-outline-dark mt-auto button-56" href="loan.php">More Info</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 bg-secondary text-white">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="photocopy-concept-illustration_114360-1076.webp" alt="..."  height="200" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder stylish">Xerox</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                
                               
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto button-49 " href="loan.php">Apply</a></div>
                            <div class="text-center mt-2"> <a class="btn btn-outline-dark mt-auto button-56" href="loan.php">More Info</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 bg-secondary text-white">
                        <!-- Product image-->
                        <img class="card-img-top" src="2f0e2ed1bca0ccb400f02ca2ab478cba.jpg" alt="..."  height="200"  />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder stylish">Meet with me</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                              
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto button-49 " href="loan.php">Apply</a></div>
                            <div class="text-center mt-2"> <a class="btn btn-outline-dark mt-auto button-56" href="loan.php">More Info</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





<?php
include("footer.php");
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>