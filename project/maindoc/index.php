<?php
   include('session.php');
?>

<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<title>GourFood - Restaurant Review</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Custom Google Web Font -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
	
    <!-- Custom CSS-->
    <link href="css/general.css" rel="stylesheet">
	
	 <!-- Owl-Carousel -->
    <link href="css/custom.css" rel="stylesheet">
	<link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	
	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- FOOTER-->
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">

	<script src="js/modernizr-2.8.3.min.js"></script>  <!-- Modernizr /-->
	<!--[if IE 9]-->
		<script src="js/PIE_IE9.js"></script>
	<!--[endif]
	[if lt IE 9]-->
		<script src="js/PIE_IE678.js"></script>
	<!--[endif]

	[if lt IE 9]-->
		<script src="js/html5shiv.js"></script>
	<!--[endif]-->
</head>

<body id="home">

	<!-- Preloader -->
	<div id="preloader">
		<div id="status"></div>
	</div>
	
	<!-- FullScreen -->
    <div class="intro-header">
		<div class="col-xs-12 text-center abcen1">
			<h1 class="h1_home wow fadeIn" data-wow-delay="0.4s">Gourfood</h1>
			<h3 class="h3_home wow fadeIn" data-wow-delay="0.6s">Your Reviews. Our Rating.</h3>
		</div>    
        <!-- /.container -->
		<div class="col-xs-12 text-center abcen wow fadeIn">
			<div class="button_down "> 
				<a class="imgcircle wow bounceInUp" data-wow-duration="1.5s"  href="#stick"> <img class="img_scroll" src="img/icon/circle.png" alt=""> </a>
			</div>
		</div>
    </div>
	
	<!-- NavBar-->
	<nav class="navbar-default stuckMenu isStuck" role="navigation" id="stick">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#home">Gourfood</a>
			</div>

			<div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					
					<li class="menuItem"><a href="index.html">Home</a></li>
					<li class="menuItem"><a href="reviews.php">Reviews</a></li>
					<li class="menuItem"><a href="#screen">Best in Town</a></li>
					<li class="menuItem"><a href="#"><?php echo $login_session;?></a></li>
				</ul>
			</div>
		   
		</div>
	</nav> 
	
	<!-- What is -->
	<div id="whatis" class="content-section-b" style="border-top: 0">
		<div class="container">

			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>What is?</h2>
				<p class="lead" style="margin-top:0">"OPINION MINING"</p>
				
			</div>
			
			<div class="row">

				<div class="col-sm-4 wow fadeInDown text-center">
				  <img class="rotate" src="img/icon/laptop.svg" alt="Generic placeholder image">
				  <h3>Write Review</h3>
				  <p class="lead">Select your restaurant and share your precious review.</p>

				  <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->

				<div class="col-sm-4 wow fadeInDown text-center">
				  <img  class="rotate" src="img/icon/opinion.png" alt="Generic placeholder image">
				   <h3>Rating</h3>
				   <p class="lead">Our System through sentiment analysis algorithm will rate the restaurant and show a rating bar which indicates the positive/negative response of reviewer.</p>
				   <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->

				<div class="col-sm-4 wow fadeInDown text-center">
				  <img  class="rotate" src="img/icon/retina.svg" alt="Generic placeholder image">
				   <h3>Find</h3>
					<p class="lead">See reviews posted by others and find the best restaurant in town at hand.</p>
				  <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->

			</div><!-- /.row -->
				

				
			</div><!-- /.row -->
		</div>
	</div>
	<!-- best restaurants -->
	<div id="screen" class="content-section-b">
        <div class="container">
          <div class="row" >
			 <div class="col-md-6 col-md-offset-3 text-center wrap_title ">
				<h2>Today's top restaurants in town</h2>
				<p class="lead" style="margin-top:0">A special thanks to Gourmets.</p>
			 </div>
		  </div>
		    <div class="row wow bounceInUp" >
              <div id="owl-demo" class="owl-carousel">
				
				<a href="img/momscafe.main.jpg" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="img/momscafe.main.jpg" alt="Owl Image">
					</div>
				</a>
				
               <a href="img/carausel1.jpg" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="img/carausel1.jpg" alt="Owl Image">
					</div>
				</a>
				
				<a href="img/carausel2.jpg" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="img/carausel2.jpg" alt="Owl Image">
					</div>
				</a>
				
				<a href="img/carausel3.jpg" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="img/carausel3.jpg" alt="Owl Image">
					</div>
				</a>
				
               <a href="img/carausel4.jpg" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="img/carausel4.jpg" alt="Owl Image">
					</div>
				</a>
				
				<a href="img/carausel5.jpg" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="img/carausel5.jpg" alt="Owl Image">
					</div>
				</a>
              </div>       
          </div>
        </div>


	</div>
	<!--footer-->
	<footer class="footer-distributed">
		<div class="footer-left">

			<h3 class="footerhead" style="font-family: Arvo">Gour<span>food</span></h3>

			<p class="footer-links">
				<a href="#">Home</a>
				·
				<a href="#">Reviews</a>
				·
				<a href="#">Best in Town</a>
				·
				<a href="#">About us</a>
			</p>

			<p class="footer-company-name">Gourfood &copy; 2017</p><br>
			<p>Original theme : Flatfy Theme by Andrea Galanti</p>
		</div>

		<div class="footer-center">

			<div>
				<i class="fa fa-map-marker"></i>
				<p><span>BVM engg college</span>Vallabh Vidyanagar, Anand, Gujarat</p>
			</div>

			<div>
				<i class="fa fa-phone"></i>
				<p>+91 9999999999</p>
			</div>

			<div>
				<i class="fa fa-envelope"></i>
				<p><a href="mailto:support@company.com">support@gourfood.com</a></p>
			</div>

		</div>

		<div class="footer-right">

			<p class="footer-company-about">
				<span>About the Gourfood</span>
				A project based on opinion mining for the purpose of restaurant review system which includes HTML,CSS,JAVASCRIPT,PHP concepts.
			</p>

			<div class="footer-icons">

				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>

			</div>

		</div>
		</div>
	</footer>

	<!-- JavaScript -->
	<script src="js/jquery-1.10.2.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/script.js"></script>
	<!-- StikyMenu -->
	<script src="js/stickUp.min.js"></script>
	<script type="text/javascript">
        jQuery(function($) {
            $(document).ready( function() {
                $('.navbar-default').stickUp();

            });
        });

	</script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="js/jquery.corner.js"></script>
	<script src="js/wow.min.js"></script>
	<script>
        new WOW().init();
	</script>
	<script src="js/classie.js"></script>
	<script src="js/uiMorphingButton_inflow.js"></script>
	<!-- Magnific Popup core JS file -->
	<script src="js/jquery.magnific-popup.js"></script>
</body>

</html>
