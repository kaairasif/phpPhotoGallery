<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="Beautiful Responsive Animated OnePage Template" />
<meta name="keywords" content="Zerif, responsive, html, template, creative"/>
<meta name="author" content="Mizanur Rahman" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>RealVU</title>

<!-- =========================
 FAV AND TOUCH ICONS  
============================== -->
<link rel="shortcut icon" href="images/favicon.png">
<link rel="apple-touch-icon" href="images/icons/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/icons/apple-touch-icon-114x114.png">

<!-- =========================
     STYLESHEETS      
============================== -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<link rel="stylesheet" href="css/component.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/input_effects.css" />
<link rel="stylesheet" href="css/bootstrap-select.css" />
<link rel="stylesheet" href="css/font-awesome.min.css" />
<link rel="stylesheet" href="css/file_inputs.css" />



<link rel="stylesheet" href="css/slick.css"/>
<link rel="stylesheet" href="css/slick-theme.css"/>


<!-- CUSTOM STYLES -->
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="css/photo_gallery.css">
<link rel="stylesheet" href="css/responsive.css">


<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
	<![endif]-->
<!--JQUERY -->
<script src="js/modernizr.custom.js"></script>
</head>

<body class="green">

  <section class="top_section">
	<div class="container">
	  <div class="row">
	  	<div class="col-md-6 col-sm-7">
		  <ul class="com_nav">
		  	<li><a href="" title=""><i class="fa fa-phone"></i> Questions? &nbsp; Call Us: +1 123-456789</a></li>
		  	<li><a href="" title=""><i class="fa fa-envelope"></i> support@abc.com</a></li>
		  </ul>	
	  	</div>
	  	<div class="col-md-6 col-sm-5">
	  		<ul class="control_nav">
	  		    	<li class="dropdown signIn rightOpen">
			  		<a href="" title="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-sign-in"></i> &nbsp; Login</a>                    
                    <ul class="dropdown-menu">
					    <li>
					    	
                          <h3><i class="fa fa-user"></i> Login TO your account</h3>
                            <p class="btn-md-inline">
							  <a href="subscriber_login.php" class="btn btn-md">Subscriber</a>
							  <a href="partner_login.php" class="btn btn-md pull-right">Dealer</a>
							</p>

					    </li>
				    </ul>                
			  	</li>		
	  		    <li><span>Choose Language: </span></li>
			  	<li class="dropdown rightOpen lingual"><a href="#" title="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> English <img src="images/language.png" alt="language"></a>
				  <ul class="dropdown-menu">
				    <li><a href="#">English <img src="../images/language.png" alt="language"></a></li>
				    <li><a href="#">Bangla <img src="../images/bd.png" alt="language"></a></li>
				  </ul>
			  	</li>
			  	  	
			</ul>
	  	</div>
	  </div>	 	
	</div><!-- / END CONTAINER -->
</section>

<header class="header">  
   <div class="container">
    <div class="parabolic_container">
	 <div class="row">
	 	<div class="col-md-2 col-xs-12">
	 		<a class="logo" href="index.php" title="logo"><img src="images/logo.png" alt=""></a>
	 	</div>
	 	<div class="col-md-10 col-xs-12">
	 		<nav class="navbar navbar-default">
				  <div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				        <li class="<?php if($activePage == "about") { echo "active"; } ?>"><a href="about.php">ABOUT US</a>
				        </li>

				        <!--<li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">OFFER <span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">Action</a></li>
				            <li><a href="#">Another action</a></li>
				            <li><a href="#">Something else here</a></li>
				            <li><a href="#">Separated link</a></li>
				            <li><a href="#">One more separated link</a></li>
				          </ul>
				        </li>		 -->
				        <li class="<?php if($activePage == "offer") { echo "active"; } ?>"><a href="offer.php">Offer</a></li>		        
				        <li class="<?php if($activePage == "subscriber") { echo "active"; } ?>"><a href="become_a_subscriber.php">Become A Subscriber</a></li>
				        <li class="<?php if($activePage == "dealer") { echo "active"; } ?>"><a href="become_a_dealer.php">Become a Dealer</a></li>
				        <li class="<?php if($activePage == "help") { echo "active"; } ?>"><a href="help.php">HELP</a></li>				        
				      </ul>
				      <form class="navbar-form navbar-right searchFrm" role="search">
				        <div class="form-group">
				          <input type="text" class="form-control" placeholder="Search...">
				        </div>
				        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
				      </form>				     
				  </div><!-- /.navbar-collapse -->
			   </div><!-- /.container-fluid -->
			</nav>
	 	</div>
	 	
	  </div>	 
    </div><!-- / END CONTAINER -->	
  </div>
  <div class="container  p_m">
  	 <div class="innerShapeTop"></div>
  </div>
</header><!-- / END HEADER -->