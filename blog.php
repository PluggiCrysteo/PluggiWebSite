<!DOCTYPE html>

<?php
 	 require("php/decide-lang.php");
 ?>
	 
	 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pluggi</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/icon/pluggi.png"/>
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>  
     <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/dark-red-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style3.css" rel="stylesheet">

    <!-- Fonts -->
    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Raleway for Title -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- Pacifico for 404 page   -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
	<!-- Login -->
	
	<script type="text/javascript" src="assets/js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.leanModal.min.js"></script>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />

	
  </head>
  <body>

  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start menu section -->
<header class="header">
	<div class="container">
		<div class="row">
					    <button type="button" class="navbar-toggle menu-button" data-toggle="collapse" data-target="#myNavbar">
					        <span class="glyphicon glyphicon-align-justify"></span>
					    </button>
				<nav class="collapse navbar-collapse" id="myNavbar" role="navigation">
					<ul class="nav navbar-nav navbar-right menu">
					<li><a href="vitrine.php?lang=<?php echo $_GET['lang']?>#news"><?php echo NAV_BARRE_3; ?></a></li> 
					<li class="dropdown">
					<a data-toggle="dropdown" class="dropdown-toggle" href=""><?php echo NAV_BARRE_1; ?><b class="caret"></b></a>
					<ul class="dropdown-menu">             
						<li><a href="vitrine.php?lang=<?php echo $_GET['lang']?>#pluggi"><?php echo NAV_BARRE_11; ?></a></li>
						<li><a href="vitrine.php?lang=<?php echo $_GET['lang']?>#why_pluggi"><?php echo NAV_BARRE_12; ?></a></li>
						<li><a href="vitrine.php?lang=<?php echo $_GET['lang']?>#buy_pluggi"><?php echo NAV_BARRE_13; ?></a></li>
					 </ul>
					</li>
					<li><a href="vitrine.php?lang=<?php echo $_GET['lang']?>#parternship"><?php echo NAV_BARRE_4; ?></a></li> 	
					<li><a href="vitrine.php?lang=<?php echo $_GET['lang']?>#team"><?php echo NAV_BARRE_2; ?></a></li> 
					<li><a href="vitrine.php?lang=<?php echo $_GET['lang']?>#from-blog"><?php echo NAV_BARRE_7; ?></a></li>  
					<li><a href="vitrine.php?lang=<?php echo $_GET['lang']?>#compte"><?php echo NAV_BARRE_6; ?></a></li>  
					<li><a href="vitrine.php?lang=<?php echo $_GET['lang']?>#contact"><?php echo NAV_BARRE_5; ?></a></li>
					</ul>
				</nav>

		</div>
	</div>
</header>
  <!-- End menu section -->
    
 <!-- Start from blog section -->
  <section id="from-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="from-blog-area">
            <div class="title-area">
              <h2 class="tittle"><?php echo TXT_9_TITRE; ?></h2>
              <span class="tittle-line"></span>
              <p><?php echo TXT_9_TITRE_2; ?></p>
            </div>
            <!-- From Blog content -->
            <div class="from-blog-content">
              <div class="row">
                <div class="col-md-4">
                  <article class="single-from-blog">
                    <figure>
                      <img src="assets/images/blog/roule.gif" alt="img">
                    </figure>
                    <div class="blog-title">
                      <h2><?php echo TXT_9_DIV_1_TITRE; ?></a></h2>
                      <p><?php echo TXT_9_DIV_1_DATE; ?></span></p>
                    </div>
                    <p><?php echo TXT_9_DIV_1_TEXT; ?></p>
                  </article>
                </div>
                <div class="col-md-4">
                <article class="single-from-blog">
                    <figure>
                      <a href="blog-single.html"><img src="assets/images/blog/yeux.gif" alt="img"></a>
                    </figure>
                    <div class="blog-title">
                      <h2><?php echo TXT_9_DIV_2_TITRE; ?></a></h2>
                      <p><?php echo TXT_9_DIV_2_DATE; ?></span></p>
                    </div>
                    <p><?php echo TXT_9_DIV_2_TEXT; ?></p>
                  </article>
                </div>
                <div class="col-md-4">
                <article class="single-from-blog">
                    <figure>
                      <a href="blog-single.html"><img src="assets/images/blog/son.gif" alt="img"></a>
                    </figure>
                    <div class="blog-title">
                      <h2><?php echo TXT_9_DIV_3_TITRE; ?></a></h2>
                      <p><?php echo TXT_9_DIV_3_DATE; ?></span></p>
                    </div>
                    <p><?php echo TXT_9_DIV_3_TEXT; ?></p>
                  </article>
                </div>
              </div>    
            </div>
          </div>
        </div>
      </div>
	   <div class="row">
        <div class="col-md-12">
            <!-- From Blog content -->
            <div class="from-blog-content">
              <div class="row">
                <div class="col-md-4">
                  <article class="single-from-blog">
                    <figure>
                      <img src="assets/images/blog/roule.gif" alt="img">
                    </figure>
                    <div class="blog-title">
                      <h2><?php echo TXT_9_DIV_1_TITRE; ?></a></h2>
                      <p><?php echo TXT_9_DIV_1_DATE; ?></span></p>
                    </div>
                    <p><?php echo TXT_9_DIV_1_TEXT; ?></p>
                  </article>
                </div>
                <div class="col-md-4">
                <article class="single-from-blog">
                    <figure>
                      <a href="blog-single.html"><img src="assets/images/blog/yeux.gif" alt="img"></a>
                    </figure>
                    <div class="blog-title">
                      <h2><?php echo TXT_9_DIV_2_TITRE; ?></a></h2>
                      <p><?php echo TXT_9_DIV_2_DATE; ?></span></p>
                    </div>
                    <p><?php echo TXT_9_DIV_2_TEXT; ?></p>
                  </article>
                </div>
                <div class="col-md-4">
                <article class="single-from-blog">
                    <figure>
                      <a href="blog-single.html"><img src="assets/images/blog/son.gif" alt="img"></a>
                    </figure>
                    <div class="blog-title">
                      <h2><?php echo TXT_9_DIV_3_TITRE; ?></a></h2>
                      <p><?php echo TXT_9_DIV_3_DATE; ?></span></p>
                    </div>
                    <p><?php echo TXT_9_DIV_3_TEXT; ?></p>
                  </article>
                </div>
              </div> 
    </div>
  </section>
  <!-- End from blog section -->


  <!-- Start Footer -->    
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-top-area">                        
              <div class="footer-social">
                <a class="facebook" href="https://www.facebook.com/CrysteoISEN?fref=ts"><span class="fa fa-facebook"></span></a>
                <a class="dribbble" href="http://crysteo.xyz/fr_FR/"><span class="fa fa-dribbble"></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- initialize jQuery Library --> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
  <!-- mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="assets/js/wow.js"></script> 

  <!-- Custom js -->
  <script type="text/javascript" src="assets/js/custom.js"></script>
  

  <?php
  
	if ($_GET['lang']=='fr') {           // si la langue est 'fr' (français) on inclut le fichier fr-lang.php
		?> <script src="assets/js/soon/custom.js"></script>  <?php
  	} 
	else {
		?> <script src="assets/js/soon/custom1.js"></script>  <?php
	}
	
  ?>
  
    <script src="assets/js/soon/plugins.js"></script>
    <script src="assets/js/soon/jquery.themepunch.revolution.min.js"></script>
    
  </body>
</html>