<!doctype html>
<html>
<head>
<title>Quick Doctorin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include("header-style.php"); ?>
</head>
<body>
<section class="serach-wrapper">
  <?php include("nav.php"); ?>
  <div class="container ">
    <div class="row">
      <div class="col-sm-12">
        <div class="mainheading">
          <h1>Search & Save On Medical today</h1>
          <h2>Create an account to manage your appointments and find savings on healthcare procedures. </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="serachbg">
          <div class="serachbg-inner">
          
          <form action="search.php">
            <div class="row">
              <div class="col-sm-8">
                <div class="form-group">
                  <input type="text" class="form-control" id="" placeholder="Ex.  Doctors, Clinics, Hospitals">
                </div>
              </div>
              <div class="col-sm-4">
                <button class="hvr-bounce-to-right">Search</button>
                &nbsp;&nbsp; <span>OR</span>&nbsp;&nbsp;
                <button class="hvr-bounce-to-right">ADVANCE Search</button>
                <div class="text-right"><span >Need Help?</span></div>
              </div>
            </div>
            
            </form>
          </div>
        </div>
        <div class="text-center app" ><img src="images/app.png"></div>
      </div>
    </div>
  </div>
</section>
<section class="green-wrapper">
  <div class="green-shape"><img src="images/green-top-shape.png" class="img-responsive"></div>
  <div class="container">
    <div class="counter-wrp">
      <div class="row">
        <div class="col-sm-4"> <span class="counter"> 562</span> <i>+</i>
          <h4>Hospitals</h4>
        </div>
        <div class="col-sm-4"> <span class="counter"> 28,000</span> <i>+</i>
          <h4>Doctors</h4>
        </div>
        <div class="col-sm-4"> <span class="counter"> 4000</span> <i>+</i>
          <h4>Happy Customers</h4>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="content-block text-center">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2>Content <span>Block</span></h2>
        <div class="small-line"></div>
        <p> Quick Doctor in is an Indian based organization which basically provides the service of database for medical consumables and disposable products for the end users. With plans to create a comprehensive medical material database and an efficient logistics network in India. </p>
        <p> With years of experience from its parent companies Konoike Transport and Medius Holdings, it has set up its registered office in Gurgaon. </p>
      </div>
    </div>
  </div>
  <div class="blueline"></div>
  <div class="container libtm-space">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="text-center">Select <span>Department</span></h2>
        <div class="small-line"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
        <ul>
          <li>Laboratory Medicine </li>
          <li>Nuclear Medicine </li>
          <li>Orthopaedics </li>
          <li>Pathology </li>
          <li>Psychiatry </li>
          <li>Reproductive Biology</li>
        </ul>
      </div>
      <div class="col-sm-3">
        <ul>
          <li>Medicine </li>
          <li> Nuclear Magnetic </li>
          <li> Otorhinolaryngology </li>
          <li> Pharmacology </li>
          <li> Pulmonary Medicine </li>
          <li> Research Section </li>
        </ul>
      </div>
      <div class="col-sm-3">
        <ul>
          <li> Microbiology </li>
          <li> Nursing Department</li>
          <li> Paediatrics </li>
          <li> Physiology </li>
          <li> Sleep Disorders </li>
          <li> Surgical Disciplines </li>
        </ul>
      </div>
      <div class="col-sm-3">
        <ul>
          <li> Nephrology</li>
          <li> Obstetrics and Gynaecology </li>
          <li> Paediatric Surgery</li>
          <li> Physical Medicine </li>
          <li> Radio Diagnosis</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="content-block text-center">
  <div class="singup-wrapper">
    <h3> Sign Up for Save On Medical today </h3>
    <p> Create an account to manage your appointments and find savings on healthcare procedures. </p>
    <button class="hvr-bounce-to-right">Signup Now</button>
  </div>
</section>
<section class="content-block">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2 class="text-center">Our Satisfied <span>Customers</span></h2>
        <div class="small-line"></div>
      </div>
    </div>
    <div class="">
      <div class="testimonial-wrapper">
        <div lass="left-qoute"><img src="images/left-qoute.png"></div>
        <ul id="testimonial">
          <li>
            <div class="col-sm-8">
              <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
              <div class="right-qoute"><img src="images/right-qoute.png"></div>
            </div>
            <div class="col-sm-4">
              <div class="testimonial-user"> <img src="images/small-testimonial-1.jpg" class="img-responsive"> </div>
              <h5>Mr. ABC, Delhi</h5>
            </div>
          </li>
          <li>
            <div class="col-sm-8">
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
              <div class="right-qoute"><img src="images/right-qoute.png"></div>
            </div>
            <div class="col-sm-4">
              <div class="testimonial-user"> <img src="images/small-testimonial-2.jpg" class="img-responsive"> </div>
              <h5>Mr. XYZ, Delhi</h5>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<?php include("footer.php"); ?>
<script>
    $(function(){
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    });
    
</script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script> 
<script src="js/jquery.countup.js"></script> 
<script>
$('.counter').countUp();
</script> 
<script src="bxslider/jquery.min.js"></script> 
<script src="bxslider/jquery.bxslider.min.js"></script> 
<!-- bxSlider CSS file -->
<link href="bxslider/jquery.bxslider.css" rel="stylesheet" />
<script>
$(document).ready(function(){
$('#testimonial').bxSlider({
 auto: true,
   mode: 'fade',
  minSlides: 1,
  maxSlides: 1,
  slideMargin: 0
});
});
</script>
</body>
</html>
