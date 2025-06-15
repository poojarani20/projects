<!doctype html>
<html>
<head>
<title>Quick Doctorin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include("header-style.php"); ?>
</head>
<body>
<section class="serach-wrapper-inner">
  <?php include("nav.php"); ?>
</section>
<section class="content-block">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      
      <h1>Questions & Answers</h1>
        <div class="panel-group" id="accordion">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Question? </a> </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
              <div class="panel-body">
              Answer:................
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Question?</a> </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body">
                 Answer:................
             
           
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"> Question? </a> </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
              <div class="panel-body">     Answer:................ </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>

<?php include("footer.php"); ?>
</body>
</html>
