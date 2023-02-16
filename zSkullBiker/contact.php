<?php
// Free Bootstrap Themes : https://www.Zerotheme.com

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['name']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to = "youremail@gmail.com";
	$subject = "Zerotheme - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Zerotheme.com";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes Designed by Zerotheme.com" />
    <meta name="author" content="https://www.Zerotheme.com" />

    <title>Skull Biker</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<!-- /////////////////////////////////////////Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Skull Biker</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#news">News</a>
                    </li>
					<li>
                        <a class="page-scroll" href="index.html#pricing">Pricing</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<!-- Navigation -->

	<!-- /////////////////////////////////////////Header -->
	<header id="page-top">
		<div class="wrap-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<img src="images/logo.png" alt="">
						<div class="intro-text">
							<div class="intro-lead-in">Welcome To Our Studio!</div>
							<div class="intro-heading">It's Nice To Meet You</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </header>
	<!-- Header -->

	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="single-page">
		<div class="container">
			<div class="row">
				<div id="main-content" class="col-md-12">
					<div class="message">
						<div class="wrap">
							<!--Warning-->
							<center><?php echo $text;?></center>
							<!---->
							<div class="back"><a href="index.html#contact" type="button" class="btn btn-primary"><<< Back to HomePage</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- /////////////////////////////////////////Footer -->
	<footer>
		<div class="wrap-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-footer footer-1">
							<a href="#"><img src="images/logo.png" alt=""></a>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed euismod tincidunt ut laoreet
							dolore magna aliquam erat volutpat. Ut wisi enim ad. Lorem ipsum dolor sit amet, consectetuer 
							</p>
						
					</div>
					<div class="col-md-3 col-footer footer-2">
						<div class="heading"><h4>Partners</h4></div>
						<div class="content">
							<div class="row">
								<div class="col-md-6">
									<a href="#"><img src="images/15.jpg" /></a>
								</div>
								<div class="col-md-6">
									<a href="#"><img src="images/16.jpg" /></a>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<a href="#"><img src="images/17.jpg" /></a>
								</div>
								<div class="col-md-6">
									<a href="#"><img src="images/18.jpg" /></a>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<a href="#"><img src="images/19.jpg" /></a>
								</div>
								<div class="col-md-6">
									<a href="#"><img src="images/20.jpg" /></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-footer footer-3">
						<div class="heading"><h4>About Us</h4></div>
						<div class="content">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad</p>
						</div>
					</div>
					<div class="col-md-3 col-footer footer-4">
						<div class="heading"><h4>Tags</h4></div>
						<div class="content">
							<ul>
								<li><a href="#">Lorem</a></li>
								<li><a href="#">Ipsum</a></li>
								<li><a href="#">Euismod</a></li>
								<li><a href="#">Laoreet</a></li>
								<li><a href="#">Dolore</a></li>
								<li><a href="#">Dasdas</a></li>
								<li><a href="#">Consectetuer</a></li>
								<li><a href="#">Aasdasls</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">Copyright &copy; Your Website - Designed by <a href="https://www.Zerotheme.com" target="_blank">Zerotheme</a></div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer -->
<!-- jQuery -->
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/agency.js"></script>

<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>

</body>
</html>