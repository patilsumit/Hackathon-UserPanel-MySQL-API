<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Bingo One page parallax responsive HTML Template ">
  
  <meta name="author" content="Themefisher.com">

  <title>Home Page</title>

<!-- Mobile Specific Meta
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
  
  <!-- CSS
  ================================================== -->
  <!-- RS5.0 Main Stylesheet -->
  <link rel="stylesheet" type="text/css" href="plugins/revo-slider/css/settings.css">
  <!-- RS5.0 Layers and Navigation Styles -->
  <link rel="stylesheet" type="text/css" href="plugins/revo-slider/css/layers.css">
  <link rel="stylesheet" type="text/css" href="plugins/revo-slider/css/navigation.css">
  <!-- REVOLUTION STYLE SHEETS -->
  <link rel="stylesheet" type="text/css" href="plugins/revo-slider/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
  <link rel="stylesheet" type="text/css" href="plugins/revo-slider/fonts/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="plugins/revo-slider/css/settings.css">
  <link rel="stylesheet" type="text/css" href="plugins/revo-slider/css/layers.css">
  <link rel="stylesheet" type="text/css" href="plugins/revo-slider/css/navigation.css"> 
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Lightbox.min css -->
  <link rel="stylesheet" href="plugins/lightbox2/dist/css/lightbox.min.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">


  <!-- Colors -->
  <link rel="stylesheet" type="text/css" href="css/colors/green.css" title="green">
  <link rel="stylesheet" type="text/css" href="css/colors/red.css" title="light-red">
  <link rel="stylesheet" type="text/css" href="css/colors/blue.css" title="blue">
  <link rel="stylesheet" type="text/css" href="css/colors/light-blue.css" title="light-blue">
  <link rel="stylesheet" type="text/css" href="css/colors/yellow.css" title="yellow">
  <link rel="stylesheet" type="text/css" href="css/colors/light-green.css" title="light-green">
  
  <?php

                $servername = "localhost";
                $username = "id4996493_sumit";
                $password = "sumit";
                $dbname = "id4996493_womendb";

            // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);

            }
            ?>
  

</head>

<body id="body">

 <!--
  Start Preloader
  ==================================== -->
  <div id="preloader">
    <div class='preloader'>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div> 
  <!--
  End Preloader
  ==================================== -->


  

<!--
Fixed Navigation
==================================== -->
<header class="navigation navbar navbar-fixed-top">
   <div class="container">
      <div class="navbar-header">
         <!-- responsive nav button -->
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         </button>
         <!-- /responsive nav button -->
         <!-- logo -->
         <a class="navbar-brand logo" href="index.html">
            <img class="logo-default" src="images/logo.png" alt="logo" />
            <img class="logo-white" src="images/logo-white.png" alt="logo" />
         </a>
         <!-- /logo -->
      </div>
      <!-- main nav -->
      <nav class="collapse navbar-collapse navbar-right">
         <ul id="nav" class="nav navbar-nav menu">
           <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Homepage <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                     <li><a href="index.html">Homepage</a></li>
                     <li><a href="index-text.html">Homepage 2</a></li>
                     <li><a href="onepage-slider.html">Onepage</a></li>
                     <li><a href="onepage-text.html">Onepage 2</a></li> 
                  </ul>
               </li> -->
			   <li><a href="index.php">Homepage</a></li>
               <li><a href="about.php">About Us</a></li>
			   <li><a href="registration.php">Registration</a></li>
          <!-- <li><a href="service.html">Services</a></li>
               <li><a href="portfolio.html">Portfolio</a></li>
               <li><a href="team.html">Team</a></li>
               <li><a href="pricing.html">Pricing</a></li>   -->
               <li><a href="contact.php">Contact</a></li>
          <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                     <li><a href="404.html">404 Page</a></li>
                     <li><a href="blog.html">Blog Page</a></li>
                  </ul>
               </li> -->
            </li>
         </ul>
      </nav>
      <!-- /main nav -->
   </div>
</header>
<!--
End Fixed Navigation
==================================== -->




	 <!--
Welcome Slider
==================================== -->

<section class="hero-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block">
					<h1 class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s" >We are Women Rescue <br> Support System </h1>
					<!--<p class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, ad rerum repellat. Sequi, labore, illo. Ducimus voluptates quidem obcaecati, ad.</p>-->
					<ul class="list-inline wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".7s">
						<li>
							<a data-scroll href="about.php" class="btn btn-main">Learn More</a>		
						</li>
					<!--	<li>
							<a data-scroll href="#team" class="btn btn-transparent">Learn More</a>			
						</li> -->
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>	


<!--
Start About Section
==================================== -->
<section class="service-2 section">
  <div class="container">
    <div class="row">

      <!-- section title -->
      <div class="title text-center"  >
        <h2>What Do We Offer</h2>
        <p> It is all about a safe rescue system for women in need. </p>
        <div class="border"></div>
      </div>
      <!-- /section title -->

      <div class="col-md-4 text-center">
        <img src="images/about/member.jpg" class="inline-block" alt="">
      </div>
      <div class="col-md-8">
        <div class="row text-center">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="tf-ion-ios-alarm-outline"></i>
              <h4>Faster Rescue</h4>
              <p>No human interface is required to system after triggering the system till recieving the help.</p>
            </div>
          </div><!-- END COL -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="tf-ion-ios-briefcase-outline"></i>
              <h4>Traced Location</h4>
              <p>Direct location cordinates are obtained whenever system is triggered with just a button press.</p>
            </div>
          </div><!-- END COL -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="tf-ion-ios-email-outline"></i>
              <h4>Message Support</h4>
              <p>Automatic messages are generated and sent to guardians when women needs help in distressed condition.</p>
            </div>
          </div><!-- END COL -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="tf-ion-ios-locked-outline"></i>
              <h4>Reliable System</h4>
              <p>Complete reliable system due to fast response and all properly registered and authorised rescue teams.</p>
            </div>
          </div><!-- END COL -->
        </div>
      </div>
    </div>    <!-- End row -->
  </div>    <!-- End container -->
</section>   <!-- End section -->

<!--
Start About Section
==================================== -->
<section class="about-2 section" id="about">
	<div class="container">
		<div class="row">
		
			<!-- section title -->
			<div class="title text-center"  >
				<h2>We Are IWSafe</h2>
				<div class="border"></div>
			</div>
			<!-- /section title -->

			<div class="col-md-6">
				<img src="images/about/about-2.png" class="img-responsive" alt="">
			</div>
			<div class="col-md-6">
				<ul class="checklist">
                    <li>We offer an instant rescue support system for a women in distressed situation.</li>
                    <li>We activate nearest rescue agency to the victim for prompt response.</li>
                    <li>We don't need any verbal description of a woman about her situation.</li>
                    <li>Women need not to call or message to trigger system instead just a button press.</li>
                    <li>Whenever a button is pressed GPS cordinates are retrrived automatically.</li>
                    <li>When system is tiggered GPS location are automatically sent to registered guardians with message support.</li>
                    <li>We offer a trustworthy system as there are proper registered rescue teams</li>
                    
                </ul>
				<!-- <a href="#" class="btn btn-main mt-20">Learn More</a> -->
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->

<!--	
Start Call To Action
==================================== -->
<section class="call-to-action section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Let's Evolve Together</h2>
				<p>Let us together be a part of evolution towards a Safe India.<br>We solely invite you to be a part of Safe India by being a part of our flagship IWSafe.  </p>
				<a href="" class="btn btn-main">Contact Us</a>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->

<!--
		Start Counter Section
		==================================== -->
		
		<section  class="counter-wrapper section-sm" >
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="title">
							<h2>Current Statistics</h2>
							<!-- <p>Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu. Sed condimentum iaculis ex, in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a risus luctus dignissim.</p> -->
						</div>
					</div>
					<!-- first count item -->
					<div class="col-md-3 col-sm-6 col-xs-6 text-center " >
						<div class="counters-item">
							<i class="tf-ion-ios-alarm-outline"></i>
							<div>
							    <?php
                                    $sq2 = "SELECT COUNT(wid) FROM women where status='YES'";
                                    $res1 = mysqli_query($conn,$sq2);
                                    $ro1 = mysqli_fetch_row($res1);
                                    $r2=$ro1[0];
                                ?>
							    <span class="counter" data-count="150"><?php echo $r2 ?></span>
							</div>
							<h3>Registered Women Succesfully</h3>
						</div>
					</div>
					<!-- end first count item -->
				
					<!-- second count item -->
					<div class="col-md-3 col-sm-6 col-xs-6 text-center " >
						<div class="counters-item">
							<i class="tf-ion-ios-analytics-outline"></i>
							<div>
							    <?php
                                    $sql = "SELECT COUNT(wid) FROM women where status='NO'";
                                    $result = mysqli_query($conn,$sql);
                                    $rows = mysqli_fetch_row($result);
                                    $r1=$rows[0];
                                ?>
							    <span class="counter" data-count="130"><?php echo $r1 ?></span>
							</div>
							<h3>Woman Request Pending</h3>
						</div>
					</div>
					<!-- end second count item -->
				
					<!-- third count item -->
					<div class="col-md-3 col-sm-6 col-xs-6 text-center "  >
						<div class="counters-item">
							<i class="tf-ion-ios-compose-outline"></i>
							<div>
							    <?php
                                    $sq3 = "SELECT COUNT(wid) FROM women";
                                    $res2 = mysqli_query($conn,$sq3);
                                    $ro2 = mysqli_fetch_row($res2);
                                    $r3=$ro2[0];
                                ?>
							    
							    <span class="counter" data-count="99"><?php echo $r3 ?></span>
							</div>
				            <h3>Total Woman Registration</h3>
							
						</div>
					</div>
					<!-- end third count item -->
					
					<!-- fourth count item -->
					<div class="col-md-3 col-sm-6 col-xs-6 text-center ">
						<div class="counters-item kill-border">
							<i class="tf-ion-ios-bolt-outline"></i>
							<div>
							    <?php
                                        $sq4 = "SELECT COUNT(rid) FROM rescue";
                                        $res3 = mysqli_query($conn,$sq4);
                                        $ro3 = mysqli_fetch_row($res3);
                                        $r4=$ro3[0];
                                 ?>
							    <span class="counter" data-count="250"><?php echo $r4 ?></span>
							</div>
							<h3>Rescue Teams</h3>
						</div>
					</div>
					<!-- end fourth count item -->
				</div> 		<!-- end row -->
			</div>   	<!-- end container -->
		</section>   <!-- end section -->

<!-- Start Testimonial
=========================================== -->
		
	<section class="testimonial section" id="testimonial">
		<div class="container">
			<div class="row">				
				<div class="col-lg-12">
					<!-- testimonial wrapper -->
					<div class="testimonial-slider">
						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
								<p> " Nation is always empowered by its women. It is she who nurtures a citizen as a mother, as a sister in his childhood, and later in the life as a wife. These empowered citizens eventually make an empowered country."</p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img src="images/client-logo/pm.jpg" class="img-responsive" alt="">
							</div>
							<div class="client-meta">
								<h3>Mr. Narendra Modi</h3>
								<span>Hon. Prime Minister , India</span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->
				
						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
								<p>" All women to turn towards digital revolution along with changing times. These application is given to the women with a view so they may contribute most in developmental journey through maximum usage of modern technology." </p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img src="images/client-logo/cm.jpg" class="img-responsive" alt="">
							</div>
							<div class="client-meta">
								<h3>Mr. Vijay Rupani</h3>
								<span>Hon. Chief Minister , Gujarat</span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->
					
						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
								<p>"Just like charity begins at home , we have to start making change from our home and society.We need to work together to make this world a better place for women. "</p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img src="images/client-logo/si.jpg" class="img-responsive" alt="">
							</div>
							<div class="client-meta">
								<h3>Mrs. Smriti Irani</h3>
								<span>Hon.Minister of Information and Broadcasting , India</span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->
					</div>
				</div> 		<!-- end col lg 12 -->
			</div>	    <!-- End row -->
		</div>       <!-- End container -->
	</section>    <!-- End Section -->


<!--
<footer id="footer" class="bg-one">
  <div class="top-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3">
          <h3>about</h3>
          <p>Integer posuere erat a ante venenati dapibus posuere velit aliquet. Fusce dapibus, tellus cursus commodo, tortor mauris sed posuere.</p>
        </div>
        <!-- End of .col-sm-3 --

        <div class="col-sm-3 col-md-3 col-lg-3">
          <ul>
            <li><h3>Our Services</h3></li>
            <li><a href="#">Graphic Design</a></li>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 --

        <div class="col-sm-3 col-md-3 col-lg-3">
          <ul>
            <li><h3>Quick Links</h3></li>
            <li><a href="#">Partners</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">FAQ’s</a></li>
            <li><a href="#">Badges</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 --

        <div class="col-sm-3 col-md-3 col-lg-3">
          <ul>
            <li><h3>Connect with us Socially</h3></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Youtube</a></li>
            <li><a href="#">Pinterest</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 --

      </div>
    </div> <!-- end container --
  </div> -->
  
    <div class="footer-bottom">
    <h5>Copyright 2018. All rights reserved.</h5>
    <h6>Design and Developed by <a href="">IWSAFE</a></h6>
  </div>
</footer> <!-- end footer --> 


    <!-- end Footer Area
    ========================================== -->
    
    <!-- 
    Essential Scripts
    =====================================-->
    
  <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Parallax -->
    <script src="plugins/parallax/jquery.parallax-1.1.3.js"></script>
    <!-- lightbox -->
    <script src="plugins/lightbox2/dist/js/lightbox.min.js"></script>
    <!-- slick Carousel -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Portfolio Filtering -->
    <script src="plugins/mixitup/dist/mixitup.min.js"></script>
    <!-- Smooth Scroll js -->
    <script src="plugins/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    <script type="text/javascript" src="plugins/revo-slider/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="plugins/revo-slider/js/jquery.themepunch.revolution.min.js"></script>
    <!-- Custom js -->
    <script src="js/script.js"></script>

      <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
    (Load Extensions only on Local File Systems ! 
    The following part can be removed on Server for On Demand Loading) --> 
    <script type="text/javascript" src="plugins/revo-slider/js/extensions/revolution.extension.actions.min.js"></script> 
    <script type="text/javascript" src="plugins/revo-slider/js/extensions/revolution.extension.carousel.min.js"></script> 
    <script type="text/javascript" src="plugins/revo-slider/js/extensions/revolution.extension.kenburn.min.js"></script> 
    <script type="text/javascript" src="plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js"></script> 
    <script type="text/javascript" src="plugins/revo-slider/js/extensions/revolution.extension.migration.min.js"></script> 
    <script type="text/javascript" src="plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js"></script> 
    <script type="text/javascript" src="plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js"></script> 
    <script type="text/javascript" src="plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js"></script> 
    <script type="text/javascript" src="plugins/revo-slider/js/extensions/revolution.extension.video.min.js"></script> 
   
<script>
  
    /* https://learn.jquery.com/using-jquery-core/document-ready/ */
    jQuery(document).ready(function() {
 
        /* initialize the slider based on the Slider's ID attribute */
        jQuery('#rev_slider_1').show().revolution({
 
            /* options are 'auto', 'fullwidth' or 'fullscreen' */
            sliderLayout: 'fullscreen',
 
            /* basic navigation arrows and bullets */
            navigation: {
 
                arrows: {
                    style:"zeus",
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                    left: {
                      h_align:"left",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    },
                    right: {
                      h_align:"right",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    }
                  }
                  ,
                  bullets: {
                    enable:false,
                    hide_onmobile:true,
                    hide_under:600,
                    style:"metis",
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    direction:"horizontal",
                    h_align:"center",
                    v_align:"bottom",
                    h_offset:0,
                    v_offset:30,
                    space:5,
                    tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
                  }
            }
        });
    });
</script>

</body>
</html>
