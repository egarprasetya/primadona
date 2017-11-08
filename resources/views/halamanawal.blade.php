<!DOCTYPE html>
<html lang="en">
<head>
<title>PRIMADONA</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Learn Kids Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">   
<link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->
<!-- //Custom Theme files --> 
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>  
<!-- //js -->
<!-- web-fonts -->  
<link href="//fonts.googleapis.com/css?family=Limelight" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body> 
	<!-- header -->
	<div class="header-w3layoutstop">
		<div class="container">

			<div class="hdr-w3left navbar-left">
				<p><span class="glyphicon glyphicon-earphone"></span> +01 999 888 7777 </p> 
			</div>
			<div class="w3ls-bnr-icons social-icon navbar-right">
			 <div class="flex-center position-ref full-height">
			 @if (Auth::guest())
            	<a href="{{ url('/login') }}">Login</a>
                    <!--<li><a href="{{ url('/register') }}">Register</a></li>-->
                @else
                    <a href="{{ url(config('laraadmin.adminRoute')) }}">{{ Auth::user()->name }}</a>
                @endif

				<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
				<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
				<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
				<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a> 
			</div> 
		</div>
	</div>
	<!-- //header -->
	<!-- banner -->
	<div class="agileits-banner">
		<div class="bnr-agileinfo"> 
			<!-- navigation -->
			<div class="top-nav w3-agiletop">
				<div class="container">
					<div class="navbar-header w3llogo">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>  
						
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<div class="w3menu navbar-right">
							<ul class="nav navbar">
								<li><a href="index.html" class="active">Home</a></li>
								<li><a href="about.html">About</a></li> 
								<li><a href="gallery.html">Gallery</a></li>
							</ul>
						</div> 

					</div>
				</div>	
			</div>	
			<!-- //navigation -->
			<div class="banner-w3text w3layouts">
				<div class="container">
					<h2>PRIMADONA</h2>
					<div class="w3lsmore">
						<a class="w3-agilebtn" href="about.html"><span>More About</span></a>
					</div> 
				</div> 
			</div> 
		</div>
	</div>
	<!-- //banner --> 
	<!-- about -->
	<div class="about">
		<div class="container">
			<div class="about-agileinfo">
				<h3 class="w3ls-title">Welcome</h3>
				<p>
					UD. PRIMADONA merupakan toko oleh-oleh khas jember terlengkap dan pertamakali ada di jember yang berdiri sejak tahun 1982. Kami menyediakan semua makanan khas jember mulai dari prol tape, suwar suwir, tape dan masih banyak lagi. Makan yang kami sediakan dijamin khalal dan terjamin higenis dan selalu baru. Silahkan berkunjung ketoko kami kenyamanan pengunjung selalu kami utamakan
				</p>
			</div>	
		</div>	
	</div>
	<!-- //about -->

	<div align="center">
		<img src="images/produk4.jpg" height="135" height="90">
		<img src="images/produk5.jpg" height="135" height="90">
		<img src="images/produk6.jpg" height="135" height="90">
		<img src="images/produk7.jpg" height="135" height="90">
		<img src="images/produk8.jpg" height="135" height="90">
	</div>

	<!-- features -->
	<div class="features about">
		<div class="container">   
			<div class="wthree-features-row">
				<div class="col-md-4 features-w3grid">
					<div class="col-xs-3 features-w3lleft">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<div class="col-xs-9 features-w3lright"> 
						<h4>CONTACT</h4>
						<p>+01 111 222 3333</p>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="col-md-4 features-w3grid">
					<div class="col-xs-3 features-w3lleft">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
					<div class="col-xs-9 features-w3lright"> 
						<h4>LOCATION</h4>
						<p>Broome St, New York, NY 10002</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 features-w3grid">
					<div class="col-xs-3 features-w3lleft">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</div>
					<div class="col-xs-9 features-w3lright"> 
						<h4>EMAIL</h4>
						<p><a href="mailto:info@example.com"> mail@example.com</a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //features -->

	<!-- modal-about -->
	<div class="modal bnr-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body modal-spa">
					<img src="images/img2.jpg" class="img-responsive" alt=""/>
					<h4>Cras rutrum iaculis enim</h4>
					<p>
						UD. PRIMADONA merupakan toko oleh-oleh khas jember terlengkap dan pertamakali ada di jember yang berdiri sejak tahun 1982. Kami menyediakan semua makanan khas jember mulai dari prol tape, suwar suwir, tape dan masih banyak lagi. Makan yang kami sediakan dijamin khalal dan terjamin higenis dan selalu baru. Silahkan berkunjung ketoko kami kenyamanan pengunjung selalu kami utamakan
					</p>
				</div> 
			</div>
		</div>
	</div>
	<!-- //modal-about -->

	<!-- start-smooth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script> 
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->   
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>