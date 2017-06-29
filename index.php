<?php
////////////////////////////////////////////////////
      if(isset($_POST["submit"])){
          $firstname=$_POST["firstName"];
          $lastname=$_POST["lastName"];
          $email=$_POST["e_mail"];
      }else{
            $firstname="";
            $lastname="";
            $email="";
      }
///////////////////////////////////////////////////
      ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accomodate Me</title>
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
    
    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Titillium+Web" rel="stylesheet">

    <!-- Slider
    ================================================== -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

  </head>
  <body>
    <!-- Navigation
    ==========================================-->
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <a class="navbar-brand" href="index.html">Accomodate Me</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#tf-home" class="page-scroll">Home</a></li>
            <li><a href="#tf-about" class="page-scroll">About</a></li>
            <li><a href="#tf-team" class="page-scroll">Team</a></li>
            <li><a href="#tf-signin" class="page-scroll">Sign In</a></li>
            <li><a href="#tf-signup" class="page-scroll" >Sign Up</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Home Page
    ==========================================-->
    <div id="tf-home" class="text-center">
        <canvas id="anime-canvas"></canvas>
        <div class="overlay">
            <div class="content">
                <h1>Welcome on <strong><span class="color">Accomodate Me</span></strong></h1>
                <p class="lead">Wherever you are <strong>Be Happy</strong></p>
                <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
            </div>
        </div>
    </div>

    <!-- About Us Page
    ==========================================-->
    <div id="tf-about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="img/02.png" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <div class="section-title">
                            <h4>About us</h4>
                            <h2 id="about-header">Some Words about<strong><br>Accomodate Me</strong></h2>
                            <hr>
                            <div class="clearfix"></div>
                        </div>
                        <p class="intro">We are from University of Moratuwa Computer Science and Engineering Department. We want to you to have a boarding place as you like </p>
                        <ul class="about-list">
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Mission</strong> - <em>We want you to be comfortable</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Clients</strong> - <em>Boarding Owners and Boarding Searchers</em>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Page
    ==========================================-->
    <div id="tf-team" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center">
                    <h2>Meet <strong>our team</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>

                <div id="team" class="owl-carousel owl-theme row">
                    <div class="item">
                        <div class="thumbnail">
                            <img src="img/team/01.jpg" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Maneesha Indrachapa</h3>
                                <p>CEO / Founder</p>
                                <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="img/team/02.jpg" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Lakshika Athapattu</h3>
                                <p>CEO / Founder</p>
                                <p>Life is 10% what happens to you and 90% how you react to it.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="img/team/03.jpg" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Kavindu Chamiran</h3>
                                <p>CEO / Founder</p>
                                <p>Optimism is the faith that leads to achievement.Nothing can be done without hope and confidence.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="img/team/04.jpg" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Yasiru Janith</h3>
                                <p>CEO / Founder</p>
                                <p>Good,better,best. Never let it rest until your good is better and your better is best.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    

    <!-- Contact Section
    ==========================================-->
      
    <div id="tf-signin" class="text-center">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="section-title center">
                        <h2>Sign In</h2>
                        <div class="line">
                            <hr>
                        </div>
                        <div class="clearfix"></div>
                        <!--small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small-->            
                    </div>

                    <form method="post" action="process.php">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                            </div>
                            <br><br><br>
                            <h3 id="signInForget">Forget Password? <a href=# >Click here</a></h3>
                            <h3 id="signInAlready">Not yet Registered? <a href="#tf-signup" class="page-scroll">Sign Up</a></h3> <br> 
                        </div>
                        <button type="submit" class="btn tf-btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <hr id="signin-bottom-line">
    </div>
      
      
    <!--signup-->
    <div id="tf-signup" class="text-center">
      <div class="container">
          
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
              
            <div class="section-title center">
              <h2>Sign Up</h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
              </div>
              
              <form method="post" action="process.php" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputFirstName2">First Name</label>
                        <input type="text" class="form-control" id="exampleInputFirstName2" placeholder="Enter First Name" name="firstName" value="<?php echo htmlspecialchars($firstname); ?>">
                      </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputLastName2">Last Name</label>
                        <input type="text" class="form-control" id="exampleInputLastName2" placeholder="Enter Last Name" name="lastName" value="<?php echo htmlspecialchars($lastname); ?>">
                      </div>
                    </div>
                  </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail2">Email Address</label>
                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email" name="e_mail" value="<?php echo htmlspecialchars($email); ?>">
                      </div>
                    </div>
                  </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword2">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                      </div>
                </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="exampleInputreenterPassword2">Re-enter Password</label>
                            <input type="password" class="form-control" id="exampleInputreenterPassword2" placeholder="Re-enter password" name="rPassword">
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="profilepicture">Profile Picture</label>
                        <input type="file" class="form-control" id="profilepicture"  name="profilepicture" >
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
<!--                  <div class="col-md-6">-->
                    <div class="form-group" id="selectType">
                      <label for="selectType">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select Type</label><br>
                        `
                        <div class="selectType">
                        <label  id="selectOne"  for="exampleInputType1">
                            <input type="radio" class="form-control" id="exampleInputType1" name="boarding-owner-or-searcher">
                            Boarding Searcher</label><br>
                        </div>
                        
                        <div class="selectType">
                        <label  id="selectTwo" for="exampleInputType2"><input type="radio" class="form-control" id="exampleInputType2" name="boarding-owner-or-searcher"> Boarding Owner &nbsp;&nbsp;&nbsp;</label>
                        </div>
                        
                      </div>
<!--                    </div>-->
                  </div><br>
                  
                  <h3 id="signUpAlready">Already have an Account <a href="#tf-signin"  class="page-scroll">Sign In</a></h3>
                  <button type="submit" class="btn tf-btn btn-default" name="submit" value="Submit">Submit</button>
              </form>
          </div>
        </div>
      </div>
        <hr id="signup-bottom-line">
    

    <nav id="footer">
        <div class="container">
            <div class="pull-left fnav">
                <p>ALL RIGHTS RESERVED. COPYRIGHT © 2017. Designed by TeamMILKY &#169;</p>
            </div>
        </div>
    </nav>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>

    <script src="js/owl.carousel.js"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>
    <script src="js/animatedParticals.js"></script>

  </body>
</html>