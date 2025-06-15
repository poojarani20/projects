<!doctype html>
<html>
<head>
<title>Quick Doctorin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include("header-style.php"); ?>
<link rel="stylesheet" type="text/css" href="jquery.datetimepicker.css"/>


</head>
<body>
<section class="serach-wrapper-inner">
  <?php include("nav.php"); ?>
</section>
<section class="content-block">
  <div class="container">
    <div class="row">
          <div class="col-sm-6">
        <div class="row">
          <div class="col-sm-6"> <i class="fa fa-calendar" aria-hidden="true"></i> On 6th Dec, 2016 </div>
          <div class="col-sm-6"> <i class="fa fa-clock-o" aria-hidden="true"></i> At 3:00 PM </div>
        </div>
        <div class="row">
          <div class="col-sm-6"> <img src="images/doctor.jpg"> </div>
          <div class="col-sm-6">
            <h4>
Dr. Mini Nair </h4>
            <p> BAMS , Diploma in Diet and Nutrition , Level 4 Certificate in Specialist Hair & Scalp Services , Diploma in Skin treatment , certificate in dermatology and microbiology </p>
            <p> Ayurveda , Dietitian/Nutritionist </p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56036.65058166645!2d77.05550987390006!3d28.621049499968354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d04ba6b064d0f%3A0xf609cdf712fe603e!2sJanakpuri%2C+New+Delhi%2C+Delhi!5e0!3m2!1sen!2sin!4v1481016029665" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="col-sm-6">
            <p> Get Directions
              
              PG Gynaecology And Urology Centre<br>
              C5A-302A, Janak Puri, Delhi </p>
          </div>
        </div>
      </div>
         
      <div class="col-sm-6">
        <div class="">
          <div id="loginbox" style="margin-top:50px;" class="mainbox ">
            <div class="panel panel-info" >
              <div class="panel-heading">
                <div class="panel-title">Confirm Appointment</div>
              </div>
              <div style="padding-top:30px" class="panel-body" >
                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                <form id="loginform" class="form-horizontal" role="form">
                  <div style="margin-bottom: 25px" class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Patient/Visitor Name">
                  </div>
                  <div style="margin-bottom: 25px" class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Email*">
                  </div>
                  <div style="margin-bottom: 25px" class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                    <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Mobile*">
                  </div>
                  
                  
                   <div style="margin-bottom: 25px" class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input id="some_class_1" type="text" class="form-control some_class" name="some_class_1" value="" placeholder="calendar*">
                  </div>
                  
                

                  
                  <!--<div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>-->
                  
                  <div style="margin-top:10px" class="form-group"> 
                    <!-- Button -->
                    
                    <div class="col-sm-12 controls"> <a id="btn-fblogin" href="#" class="btn btn-primary">Done</a> </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="content-block text-center"> <a href="search.php">
  <button class="hvr-bounce-to-right"> Back</button>
  </a> </section>

<?php include("footer.php"); ?>
<script src="jquery.datetimepicker.js"></script>
<script src="build/jquery.datetimepicker.full.js"></script>

<script>/*
window.onerror = function(errorMsg) {
	$('#console').html($('#console').html()+'<br>'+errorMsg)
}*/

$.datetimepicker.setLocale('en');
$('.some_class').datetimepicker();
var logic = function( currentDateTime ){
	if (currentDateTime && currentDateTime.getDay() == 6){
		this.setOptions({
			minTime:'11:00'
		});
	}else
		this.setOptions({
			minTime:'8:00'
		});
};
</script>
</body>
</html>
