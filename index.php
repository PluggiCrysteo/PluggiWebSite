<!DOCTYPE html>

<?php
 	 require("decide-lang.php");
 ?>
	 
	 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pluggi</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/icon/crysteo.ico"/>
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome1.css" rel="stylesheet">
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
    <link href="style2.css" rel="stylesheet">

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
	<link type="text/css" rel="stylesheet" href="assets/css/styleFenetre1.css" />
	
  </head>
  <body>

  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->  
  <header id="header">
    <div class="header-inner">
      <!-- Header image -->
      <img src="assets/images/header.jpg" alt="img">
      <div class="header-overlay">
        <div class="header-content">
        <!-- Start header content slider -->
        <h2 class="header-slide"><?php echo header_1; ?>
          <span><?php echo header_21; ?></span>
          <span><?php echo header_22; ?></span>
          <span><?php echo header_23; ?></span>
          <?php echo header_3; ?></h2>
        <!-- End header content slider -->  
        <!-- Header btn area -->
        <div class="header-btn-area">
          <a class="knowmore-btn" href="http://crysteo.xyz/fr_FR/" target="_blank"><?php echo header_4; ?></a>
        </div>
      </div>
      </div>      
    </div>
  </header>
  <!-- End header section -->

  <!-- Start menu section -->
  <section id="menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->                                               
           <a class="navbar-brand logo" href="index.html"><img src=<?php echo NAV_BARRE_LANG; ?> alt="logo"></a>                      
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
		    <li><a href="#testimonial"><?php echo NAV_BARRE_3; ?></a></li> 
			<li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href=""><?php echo NAV_BARRE_1; ?><b class="caret"></b></a>
                <ul class="dropdown-menu">             
					<li><a href="#pluggi"><?php echo NAV_BARRE_11; ?></a></li>
                    <li><a href="#why"><?php echo NAV_BARRE_12; ?></a></li>
                    <li><a href="#buy_pluggi"><?php echo NAV_BARRE_13; ?></a></li>
                 </ul>
            </li>                 
            <li><a href="#parternship"><?php echo NAV_BARRE_4; ?></a></li> 	
			<li><a href="#team"><?php echo NAV_BARRE_2; ?></a></li>  			
            <li><a href="#contact"><?php echo NAV_BARRE_5; ?></a></li>
			<li><a href="#from-blog"><?php echo NAV_BARRE_6; ?></a></li> 
          </ul>                            
        </div><!--/.nav-collapse -->
       
      </div>          
    </nav> 
  </section>
  <!-- End menu section -->
  
    
    <!-- Start Testimonial section -->
  <section id="testimonial">
    <img src="assets/images/section/news.jpg" alt="img">
    <div class="counter-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Start Testimonial area -->
            <div class="testimonial-area">
              <div class="title-area">
                <h2 class="tittle"><?php echo TXT_6_TITRE; ?></h2>
                <span class="tittle-line"></span>              
              </div>
              <div class="testimonial-conten">
                <!-- Start testimonial slider -->
                <div class="testimonial-slider">
                  <!-- single slide -->
                  <div class="single-slide">
                    <h2 class="tittle"><?php echo TXT_6_DIV1; ?></h2>
                    <div class="single-testimonial">
                      <img class="testimonial-thumb" src="assets/images/pluggi/pluggireduit.jpg" alt="img">
                      <p></p>
                      <span></span>
                    </div>
                  </div>
                  <!-- single slide -->
                  <div class="single-slide">
                    <h2 class="tittle"><?php echo TXT_6_DIV2; ?></h2>
                    <div class="single-testimonial">
                      <img class="testimonial-thumb" src="assets/images/salon/maker.jpg" alt="img">
                      <p>Maker Fair Rhur in dortmund</p>
                      <span>Allemagne</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </section>
  <!-- End Testimonial section -->
  
  <!-- Start pluggi section -->
  <section id="pluggi">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Start welcome area -->
          <div class="welcome-area">
            <div class="title-area">
              <h2 class="tittle"><?php echo TXT_11_TITREP1; ?><span><?php echo TXT_11_TITREP2; ?></span><?php echo TXT_11_TITREP3; ?></h2>
              <span class="tittle-line"></span>
              <p><?php echo TXT_11_TITRE2; ?></p>
            </div>
            <div class="welcome-content">
              <ul class="wc-table">
				<li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-gears wc-icon"></span>
                    <h4 class="wc-tittle"><?php echo TXT_11_DIV1_TITRE; ?></h4>
                    <p><?php echo TXT_11_DIV1; ?></p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-video-camera wc-icon"></span>
                    <h4 class="wc-tittle"><?php echo TXT_11_DIV2_TITRE; ?></h4>
                    <p><?php echo TXT_11_DIV2; ?></p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-android wc-icon"></span>
                    <h4 class="wc-tittle"><?php echo TXT_11_DIV3_TITRE; ?></h4>
                    <p><?php echo TXT_11_DIV3; ?></p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-user-times wc-icon"></span>
                    <h4 class="wc-tittle"><?php echo TXT_11_DIV3_TITRE; ?></h4>
                    <p><?php echo TXT_11_DIV3; ?></p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
	 </section>
	  
	<section id="why">  
      <div class="title-area">
              <h2 class="tittle"><?php echo TXT_12_TITREP1; ?><span><?php echo TXT_12_TITREP2; ?></span><?php echo TXT_12_TITREP3; ?></h2>
              <span class="tittle-line"></span>
              <p><?php echo TXT_12_EXP; ?></p>
      </div>
	  
	  
	
						<!-- Start counter area -->
						<div class="counter-area">
						 <center>
							<div class="single-counter">
							  <div class="counter-count">
							  <span class="fa fa-users"></span>
							  </br>
								<span class="counter">1096</span>
								</br>
								<?php echo TXT_12_counter; ?>
							  </div>
							</div>
						  </div>    
					

  </section> 
  <!-- End about section -->
  
    <section id="buy_pluggi">
	
             <div class="title-area">
              <h2 class="tittle"><?php echo TXT_13_TITREP1; ?><span><?php echo TXT_13_TITREP2; ?></span><?php echo TXT_13_TITREP3; ?></h2>
              <span class="tittle-line"></span>
              <p><?php echo TXT_13_counter; ?></p>
            </div>
  
              <!-- START TIMER -->
            <div id="timer" data-animated="FadeIn">
               
                <div id="days" class="timer_box"></div>
                <div id="hours" class="timer_box"></div>
                <div id="minutes" class="timer_box"></div>
                <div id="seconds" class="timer_box"></div>
            </div>
            <!-- END TIMER -->
			
  <section>
  
  

  <!-- Start parternship action -->
  <section id="parternship">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="team-area">
            <div class="title-area">
              <h2 class="tittle"><?php echo TXT_4_TITRE; ?></h2>
              <span class="tittle-line"></span>
              <p></p>
            </div>
            <!-- Start team content -->
            <div class="team-content">
               <ul class="team-grid">
                <li>
                  <div class="team-item team-img-1 wow fadeInUp">
                    <div class="team-info">
                      <p><?php echo TXT_4_DIV1; ?></p>
                      <a href="http://3dprint.fr/" target="_blank"><span class="fa fa-rss"></span></a>
                    </div>
                  </div>
                  <div class="team-address">
                    <p><?php echo TXT_4_DIV1_TITRE; ?></p>
                  </div>
                </li>
                <li>
                  <div class="team-item team-img-2 wow fadeInUp">
                    <div class="team-info">
                      <p><?php echo TXT_4_DIV2; ?></p>
                      <a href="http://www.humanicite.fr/fiche-membre/348/Les-Ateliers-Humanicite" target="_blank"><span class="fa fa-rss"></span></a>
                    </div>
                  </div>
                  <div class="team-address">
                    <p><?php echo TXT_4_DIV2_TITRE; ?></p>               
                  </div>
                </li>
                <li>
                  <div class="team-item team-img-3 wow fadeInUp">
                    <div class="team-info">
                      <p><?php echo TXT_4_DIV3; ?></a></p>
                      <a href="https://www.facebook.com/Bde-WapitIsen-1646656258914826/?fref=ts" target="_blank"><span class="fa fa-facebook"></span></a>
                      <a href="https://twitter.com/wapitisen" target="_blank"><span class="fa fa-twitter"></span></a>
                    </div>
                  </div>
                  <div class="team-address">
                    <p><?php echo TXT_4_DIV3_TITRE; ?></p>
                  </div>
                </li>
                  <li>
                  <div class="team-item team-img-4 wow fadeInUp">
                    <div class="team-info">
                      <p><?php echo TXT_4_DIV3; ?></p>
                      <a href="https://www.facebook.com/ISEN.Lille/?fref=ts" target="_blank"><span class="fa fa-facebook"></span></a>
                      <a href="https://twitter.com/isenlille?lang=fr" target="_blank"><span class="fa fa-twitter"></span></a>
                      <a href="http://www.isen.fr/lille/" target="_blank"><span class="fa fa-rss"></span></a>
                    </div>
                  </div>
                  <div class="team-address">
                    <p>Isen Lille</p>
                  </div>
                </li>
              </ul>
            </div>
            <!-- End team content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Start parternship action -->

  <!-- Start team section -->
  <section id="team">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="portfolio-area">
            <div class="title-area">
              <h2 class="tittle"><?php echo TXT_4_DIV3; ?></h2>
              <span class="tittle-line"></span>
              <p><?php echo TXT_4_DIV3; ?></p>
            </div>
            <!-- Portfolio content -->
            <div class="portfolio-content">
                <!-- portfolio menu -->
               <div class="portfolio-menu">
                 <ul>
                   <li class="filter" data-filter="all"><?php echo TXT_5_DIV1; ?></li>
				   <li class="filter" data-filter=".managment"><?php echo TXT_5_DIV2; ?></li>
                   <li class="filter" data-filter=".hardware"><?php echo TXT_5_DIV3; ?></li>
                   <li class="filter" data-filter=".software"><?php echo TXT_5_DIV4; ?></li>
                   <li class="filter" data-filter=".robotic"><?php echo TXT_5_DIV5; ?></li>
                 </ul>
               </div>
               <!-- Portfolio container -->
               <div id="mixit-container" class="portfolio-container">
			   <div class="single-portfolio mix managment">
                   <div class="single-item">
                     <img src="assets/images/galerie/photo1.jpg" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/galerie/photo1.jpg"><i class="fa fa-eye"></i></a>
                          <a class="link-btn" href="https://www.linkedin.com/in/benoit-piriou-7448aa109?authType=NAME_SEARCH&authToken=cqQk&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A459071908%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1457463645901%2Ctas%3Abenoit" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Benoit Piriou</h4>
                          <span><?php echo TXT_5_POLE1; ?></span>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio mix hardware">
                   <div class="single-item">
                     <img src="assets/images/galerie/photo4.jpg" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/galerie/photo4.jpg"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Maximilien Saunier</h4>
                          <span><?php echo TXT_5_POLE2; ?></span>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio mix hardware">
                   <div class="single-item">
                     <img src="assets/images/galerie/photo7.jpg" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/galerie/photo7.jpg"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Yong Pan</h4>
                          <span><?php echo TXT_5_POLE3; ?><span>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio mix software">
                   <div class="single-item">
                     <img src="assets/images/galerie/photo5.jpg" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/galerie/photo5.jpg"><i class="fa fa-eye"></i></a>
                          <a class="link-btn" href="https://www.linkedin.com/in/paul-lesur-538759b3?authType=NAME_SEARCH&authToken=5S6m&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A404969660%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1457463174299%2Ctas%3APaul%20le" target="_blank"><i class="fa fa-linkedin"></i></a>
						  <a class="link-btn" href="http://plesur.fr/?lang=fr_FR&page_id=2" target="_blank"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Paul Lesur</h4>
                          <span><?php echo TXT_5_POLE4; ?></span>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio mix software">
                   <div class="single-item">
                     <img src="assets/images/galerie/photo3.jpg" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/galerie/photo3.jpg"><i class="fa fa-eye"></i></a>
                          <a class="link-btn" href="https://www.linkedin.com/in/h%C3%A9l%C3%A8ne-mazars-332166115?trk=nav_responsive_tab_profile_pic" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Hélène Mazars</h4>
                          <span><?php echo TXT_5_POLE5; ?></span>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio mix robotic">
                   <div class="single-item">
                     <img src="assets/images/galerie/photo2.jpg" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/galerie/photo2.jpg"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Clara Cussaguet</h4>
                          <span><?php echo TXT_5_POLE6; ?></span>
                        </div>
                     </div>
                   </div>
                 </div>
				 <div class="single-portfolio mix robotic">
                   <div class="single-item">
                     <img src="assets/images/galerie/photo6.jpg" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/galerie/photo6.jpg"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Trisan Avelis</h4>
                          <span><?php echo TXT_5_POLE7; ?></span>
                        </div>
                     </div>
                   </div>
                 </div>
               </div>      
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End team section -->
  
  <!-- Start Login section -->
  <a id="modal_trigger" href="#login" class="button button-default"><?php echo TXT_8_LOGIN; ?></a>

	<div id="login" class="popupContainer" style="display:none;">
		<header class="popupHeader">
			<span class="header_title"><?php echo TXT_8_LOGIN_TITRE; ?></span>
			<span class="modal_close"><i class="fa fa-times"></i></span>
		</header>
		
		<section class="popupBody">
		<!-- Username & Password Login form -->
			<div class="social_login">
				<form action = "membre.php" method="POST">
					<label><?php echo TXT_8_LOGIN_1; ?></label>
					<input type="text" name="email"/>
					<br />
					<label><?php echo TXT_8_LOGIN_2; ?></label>
					<input type="password" name="password"/>
					<br />
					<div class="action_btns">
						<div class="one_half"><a href="#" class="btn newUser"></i><?php echo TXT_8_CHOIX_1; ?></a></div>
						<button type="submit" class="btn btn-default"><?php echo TXT_8_CHOIX_2; ?></button>
					</div>
				</form>
				<a href="#" class="forgot_password"><?php echo TXT_8_CHOIX_3; ?></a>
			</div>
			<!-- Register Form -->
			<div class="user_register">
				<form action = "php/addUser.php" method="POST">
					<label><?php echo TXT_8_NEW_1; ?></label>
					<input type="text" name="name"/>
					<br />

					<label><?php echo TXT_8_NEW_2; ?></label>
					<input type="text" name="first_name" />
					<br />

					<label><?php echo TXT_8_NEW_3; ?></label>
					<input type="email" name="email" />
					<br />
										
					<label><?php echo TXT_8_NEW_4; ?></label>
					<input type="text" name="number" />
					<br / >
										
					<label><?php echo TXT_8_NEW_5; ?></label>
					<input type="password" name="password" />
					<br />
					<div class="action_btns">
						<div class="one_half"><a href="#" class="btn User"></i> <?php echo TXT_8_CHOIX_4; ?></a></div>
						<button type="submit" class="btn btn-default"><?php echo TXT_8_CHOIX_5; ?></button>
					</div>
				</form>
			</div>
		</section>
		
<script type="text/javascript">
	$("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
		// Going to New User
		$(".newUser").click(function(){
			$(".social_login").hide();
			$(".user_register").show();
			return false;
		});

		// Going to User
		$(".User").click(function(){
			$(".social_login").show();
			$(".user_register").hide();
			return false;
		});
	})
</script>
	</div>

  
  <!-- End Login section -->
  
  <!-- Start Contact section -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="contact-left wow fadeInLeft">
            <h2><?php echo TXT_7_TITRE1; ?></h2>
            <address class="single-address">
              <h4><?php echo TXT_7_TITRE_ADRESSE; ?></h4>
              <p><?php echo TXT_7_ADRESSE; ?></p>
            </address>
             <address class="single-address">
              <h4><?php echo TXT_7_TITRE_TELEPHONE; ?></h4>
              <p><?php echo TXT_7_TELEPHONE; ?></p>
            </address>
             <address class="single-address">
              <h4><?php echo TXT_7_TITRE_MAIL; ?></h4>
              <p>crysteo@isen-lille.fr</p>
            </address>
          </div>
        </div>
        <div class="col-md-8 col-sm-6 col-xs-12">
          <div class="contact-right wow fadeInRight">
            <h2><?php echo TXT_7_TITRE2; ?></h2>
            <form action="contact-us-send.php" method="post" class="contact-form">
              <div class="form-group">                
                <input type="text" class="form-control" placeholder=<?php echo TXT_7_NAME; ?> id="name" name="name">
              </div>
              <div class="form-group">                
                <input type="email" class="form-control" placeholder=<?php echo TXT_7_ADRESSE_MAIL; ?> id="email" name="email">
              </div>              
              <div class="form-group">
                <textarea class="form-control" placeholder=<?php echo TXT_7_MESSAGE; ?> id="comment" name="comment"></textarea>
              </div>
              <button type="submit" name="submit" data-text=<?php echo TXT_7_SEND1; ?> class="button button-default"><span><?php echo TXT_7_SEND2; ?></span></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact section -->
  <!-- Start Google Map -->
  <section id="google-map">
  <center>
	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:440px;width:100%;'><div id='gmap_canvas' style='height:440px;width:100%;'></div><div><small><a href="http://embedgooglemaps.com">									google maps carte							</a></small></div><div><small><a href="https://youtubeembedcode.com">youtubeembedcode.com</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(50.6340629,3.0488749999999527),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(50.6340629,3.0488749999999527)});infowindow = new google.maps.InfoWindow({content:'<strong>Pluggi</strong><br>41 boulvard vauban<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
  </center>
  </section> 
	
  <!-- End Google Map -->

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
  

    <script src="assets/js/soon/plugins.js"></script>
    <script src="assets/js/soon/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/js/soon/custom.js"></script>
    
  </body>
</html>