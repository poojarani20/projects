<div class="menu-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="row">
          <div class="col-sm-3"> <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="img-responsive"> </a> </div>
          <div class="col-sm-4">
            
          </div>
          <div class="col-sm-5">
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar2"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <div id="navbar2" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                  
                  <?php  $base=basename($_SERVER['PHP_SELF']); ?>
                    <li <?php if($base=='index.php'){?>class="active"<?php } ?>><a href="index.php">Home</a></li>
                    <li <?php if($base=='services.php'){?>class="active"<?php } ?>><a href="services.php">Services</a></li>
                    <li <?php if($base=='workshop.php'){?>class="active"<?php } ?>><a href="workshop.php">Workshop</a></li>
                    <li <?php if($base=='question-answers.php'){?>class="active"<?php } ?>><a href="question-answers.php"> Q&A </a></li>
                    <li <?php if($base=='contact.php'){?>class="active"<?php } ?>><a href="contact.php"> Contact us</a></li>
                    
                    <!--<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                  
                  </ul>
                </li>-->
                  </ul>
                </div>
                <!--/.nav-collapse --> 
              </div>
              <!--/.container-fluid --> 
            </nav>
            <br>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
