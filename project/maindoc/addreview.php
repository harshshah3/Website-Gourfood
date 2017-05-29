<?php
   include('session.php');

$db=mysqli_connect("localhost", "root", "", "project");
if(isset($_GET['InputMessage']))
{
$text=$_GET['InputMessage'];
//echo $text;
$text1= mysqli_real_escape_string($db, $text);
$sql="INSERT INTO reviews VALUES ('$text')";
mysqli_query($db, $sql);
}

   mysqli_close($db);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <title>GourFood - Restaurant Add Review</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

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
    <!--[if IE 9] -->
        <script src="js/PIE_IE9.js"></script>
    <!--[endif]
    [if lt IE 9]>-->
        <script src="js/PIE_IE678.js"></script>
    <!--[endif]

    [if lt IE 9]-->
        <script src="js/html5shiv.js"></script>
    <!--[endif]-->
</head>
<body>
<nav class="navbar-default" role="navigation" style="position: fixed;max-height: 62px;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Gourfood</a>
        </div>

        <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
            <ul class="nav navbar-nav">

                <li class="menuItem"><a href="index.php">Home</a></li>
                <li class="menuItem"><a href="reviews.php">Reviews</a></li>
                <li class="menuItem"><a href="index.php#screen">Best in Town</a></li>
                <li class="menuItem"><a href="#"><?php echo $login_session;?></a></li>
                <li class="menuItem"><a href="Logout.php" >Logout</a></li>
            </ul>
        </div>

    </div>
</nav>
<!--Review-->
<div class="content-section-b">
    <div class="container">
        <form method="get" action="addreview.php">
        <div class="form-group">
            <h2>Add Review</h2>
            <div class="input-group">
                <textarea name="InputMessage" id="InputMessage" class="form-control" rows="6" required></textarea>
                <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
            </div>
        </div>

        <input type="submit" name="submit" id="submit" value="Submit" class="btn wow tada btn-embossed btn-primary">
        </form>
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


</body>
</html>