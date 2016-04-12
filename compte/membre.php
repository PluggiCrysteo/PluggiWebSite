<?php
$pageName = isset($_GET['page'])?$_GET['page']:"accueil";
include_once('../php/Identification.php');
$identification->checkIdentification($pageName);
?>

<?php
 	 require("../php/decide-lang.php");
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pluggi</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="../assets/images/icon/pluggi.png"/>
    <!-- Font Awesome -->
    <link href="../assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap1.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="../assets/css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="../assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/animate.css"/>  
     <!-- Theme color -->
    <link id="switcher" href="../assets/css/theme-color/blue-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="../style3.css" rel="stylesheet">

    <!-- Fonts -->
    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Raleway for Title -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- Pacifico for 404 page   -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	
	
	<!-- Login -->
	
	<script type="text/javascript" src="../assets/js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.leanModal.min.js"></script>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
	<link type="text/css" rel="stylesheet" href="../assets/css/styleFenetre.css" />
	
  </head>
  <body>
   
    <!-- Start menu section -->
<header class="header">
	<div class="container">
		<div class="row">
					    <button type="button" class="navbar-toggle menu-button" data-toggle="collapse" data-target="#myNavbar">
					        <span class="glyphicon glyphicon-align-justify"></span>
					    </button>
				<nav class="collapse navbar-collapse" id="myNavbar" role="navigation">
					<ul class="nav navbar-nav navbar-right menu">
					<li><a href="membre.php?page=video&lang=<?php echo $_GET['lang']?>"><?php echo NAV_BARRE_1_membre; ?></a></li> 
					<li><a href="membre.php?page=application&lang=<?php echo $_GET['lang']?>"><?php echo NAV_BARRE_2_membre; ?></a></li> 
					<li><a href="membre.php?page=forum&lang=<?php echo $_GET['lang']?>"><?php echo NAV_BARRE_3_membre; ?></a></li> 	
					<li><a href="../php/disconnect.php?lang=<?php echo $_GET['lang']?>"><?php echo NAV_BARRE_4_membre; ?></a></li> 					
					</ul>
				</nav>

		</div>
	</div>
</header>
  <!-- End menu section -->
  
  
  
  <?php include ("$pageName.php"); ?>
  
  <!-- initialize jQuery Library --> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="../assets/js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="../assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="../assets/js/waypoints.js"></script>
  <script type="text/javascript" src="../assets/js/jquery.counterup.js"></script>
  <!-- mixit slider -->
  <script type="text/javascript" src="../assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="../assets/js/jquery.fancybox.pack.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="../assets/js/wow.js"></script> 

  <!-- Custom js -->
  <script type="text/javascript" src=../"assets/js/custom.js"></script>
  
    <script src="../assets/js/soon/plugins.js"></script>
    <script src="../assets/js/soon/jquery.themepunch.revolution.min.js"></script>
    <script src="../assets/js/soon/custom.js"></scrip
  

    
  </body>
</html>