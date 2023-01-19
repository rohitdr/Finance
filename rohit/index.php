<?php
session_start();

?>
<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>financial_advisor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <script src="https://kit.fontawesome.com/c54ebdecc5.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rubik+Gemstones&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    
   
<!-- Start of Async Drift Code -->
<script>
"use strict";

!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('8cebkbsyy5e7');
</script>
<!-- End of Async Drift Code -->
  
  
  </head>
  <body>
    
<?php
include("navbar.php");
?>
      
 





<main  >

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators ">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner " style="margin:2px 0px 0px 0px; height:auto">
      <div class="carousel-item active ">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="modern-orange-abstract-background-vector-illustration-design-presentation-banner-cover-web-flyer-card-poster-wallpaper-texture-slide-magazine-powerpoint_181182-19617.webp" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#5F9EA0"/></svg>

        <div class="container pt-5" >
          <div class="carousel-caption text-start ">
            <h1 >Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#5F9EA0"/></svg>

        <div class="container  pt-5">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#5F9EA0"/></svg>

        <div class="container  pt-5">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
  
 <div class="container  ">
  <div class="p-5 mb-2 bg-light rounded-3 mt-2 im " >
    <div class="container-fluid py-2 text-dark">
      <h1 class="display-5 fw-bold ">We’re wise beyond our collective years and intent on making the most of yours.</h1>
      <p  style="color:black" class="col-md-8 fs-4 text-left">Wealth advice with a disciplined, evidence-based approach is hard to come by. Fortunately, you’ve found your way here, as that’s precisely what Buckingham delivers.</p>
      <button class="btn btn-primary btn-lg" type="button" onclick="window.location.href='contactus.php'">CONTACT </button>
      <div class="row align-items-md-stretch">
        <div class="col-md-6  mt-2 ">
          <div class="h-100 p-5 text-bg-dark rounded-3  h5 ">
            <h2 class="text-success">Good is never good enough.</h2>
            <p>It’s what drives us to find clear, academic answers to your every question. And every follow-up question. Until all that’s left is clarity, comfort and a strategy built to your specific needs and values.</p>
         <button class="btn btn-outline-light" type="button">Example button</button>
           </div>
        </div>
        <div class="col-md-6  mt-2">
          <div class="h-100 p-5 bg-light border rounded-3 text-dark ">
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

    <div class="row featurette reveal">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
      </div>
      <div class="col-md-5">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="GORUP1.jpeg" alt="" width="500" height="500">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette reveal">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="FIRST.jpeg" alt="" width="500" height="500">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette reveal">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-5">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="SECOND.jpeg" alt="" width="500" height="500">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div>
  
<div class="container col-xxl-10 px-4 py-5 reveal">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="306736831_3261871180691576_6615227132091947851_n.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="400" height="400" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3 stylishfont">Rohit Kumar</h1>
        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          
        </div>
      </div>
    </div>
  </div>


  <hr class="featurette-divider">


  <div class="container col-xxl-10 px-4 py-5 reveal">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3 stylishfont">Anil Maurya<h1>
        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        </div>
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="ANIL.jpeg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="500" height="400" loading="lazy">
      </div>
    </div>
  </div>

  <hr class="featurette-divider">


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
</div>

</main>

















<?php
include("footer.php");
?>
 <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

