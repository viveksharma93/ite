<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ITE</title>

	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
	  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.bootstrap.min.css">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">
<?php include './config/appconfig.php';?>
    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +91-9111240646</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="https://www.facebook.com/LinuxBhopal/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <!-- <div class="search white-text cursor-pointer">
                              Login | Sign Up
                            </div> -->
                            <!-- <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div> -->
                       </div>
                       <!-- <div class="pull-right white-text cursor-pointer">
                         Hey Hemraj
                       </div> -->
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">
                      <img width="220"  src="images/logo.png" alt="logo">
                    </a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                  <ul class="nav navbar-nav">
                        <li class="<?php echo ($_SERVER['PHP_SELF'] == CONTEXT.'/index.php' ? ' active' : '');?>"><a href="index.php">Home</a></li>
                        <li class="<?php echo ($_SERVER['PHP_SELF'] ==  CONTEXT.'/about-us.php' ? ' active' : '');?>"><a href="about-us.php">About Us</a></li>
                        <li class="<?php echo ($_SERVER['PHP_SELF'] ==  CONTEXT.'/services.php' ? ' active' : '');?>"><a href="services.php">Services</a></li>
                        <li class="dropdown <?php echo ($_SERVER['PHP_SELF'] == CONTEXT.'/courses.php' ? ' active' : '');?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Courses
                              <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- <li><a href="courses.php?id=1">Basic Linux</a></li> -->
                                <li><a href="rhcsa.php">RHCSA</a></li>
                                <li><a href="rhcsa.php">RHCE</a></li>
                                <li><a href="rhcsa.php">RHCVA</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo ($_SERVER['PHP_SELF'] == CONTEXT.'/batches.php' ? ' active' : '');?>"><a href="batches.php">Batches</a></li>
                        <li class="<?php echo ($_SERVER['PHP_SELF'] == CONTEXT.'/achievements.php' ? ' active' : '');?>"><a href="achievements.php">Gallery</a></li>
                        <!-- <li class="<?php echo ($_SERVER['PHP_SELF'] == CONTEXT.'/blog.php' ? ' active' : '');?>"><a href="#">Blog</a></li> -->
                        <li class="<?php echo ($_SERVER['PHP_SELF'] == CONTEXT.'/contact-us.php' ? ' active' : '');?>"><a href="contact-us.php">Contact</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->

    </header><!--/header-->
