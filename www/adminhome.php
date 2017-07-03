<?php
	
	session_start();
	$page_title = "Home";

	include 'includes/db.php';

	include 'includes/functions.php';

	






?>
  <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Project XE</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="../css/bootstrap.min.css">

        <!--For font-awesome css-->
        <link rel="stylesheet" href="../css/font-awesome.min.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="../css/mainstyle.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="../css/responsive.css" />
        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

    <body>

      <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

          <div class="brand-bg">
                    <a class="navbar-brand" href="index.html"><img src="../images/logo.png" alt="projectXE logo" /></a>
          </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav pull-right">
                       <li><a href="addmembers.php">Add Team members</a></li>
                    <li><a href="members.php">View team members</a></li>
                    <li><a href="services.php">Add services</a></li>
                    <li><a href="viewservices.php">View services</a></li>
                    <li><a href="logout.php">Logout</a></li>

                    </ul>
                </div><!-- /.navbar-collapse -->
        </div>

            </div><!-- /.container-fluid -->
        </nav>

        <!--Home page style-->
        <header class="home-bg">
        <div class="overlay2-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="header-details">
                            <h1>Welcome to the offical project xe website<i class="fa fa-circle"></i></h1>
                            <p>We do not offer any form of free work</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </header>

        <!-- Sections -->
        <section id="promotion-area" class="sections">
            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
          <div class="col-sm-4 col-sm-12 col-xs-12">
            <div class="promotion">

            <h1>Work<br>Accuracy<i class="fa fa-circle"></i></h1>
            <p>We always deliver our work on time and we make sure you are happy</p>

            </div>
          </div>

          <div class="col-sm-4 col-sm-12 col-xs-12">
            <div class="promotion">

            <h1>Affordable<br>Prices<i class="fa fa-circle"></i></h1>
            <p>Not too cheap, not too costly. We give multiple offers that will suit your needs</p>

            </div>
          </div>

          <div class="col-sm-4 col-sm-12 col-xs-12">
            <div class="promotion">

            <h1>Simple<br> payments<i class="fa fa-circle"></i></h1>
            <p>You’re safe with us. The privacy and security of your financial information is our top priority.</p>

            </div>
          </div>
</html>