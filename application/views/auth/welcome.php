<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Landing Page </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pedagogy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?= base_url() ;?>assets/welcome/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?= base_url() ;?>assets/welcome/css/swipebox.css">
<link href="<?= base_url() ;?>assets/welcome/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->

<script type="text/javascript" src="<?= base_url() ;?>assets/welcome/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!--animate-->
<link href="<?= base_url() ;?>assets/welcome/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="<?= base_url() ;?>assets/welcome/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<link href='//fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?= base_url() ;?>assets/welcome/js/move-top.js"></script>
<script type="text/javascript" src="<?= base_url() ;?>assets/welcome/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?= base_url() ;?>assets/welcome/js/numscroller-1.0.js"></script>
</head>
<body>
<!-- header -->
<div id="home" class="banner w3l">
	<div class="container">
		<nav class="navbar navbar-default  wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.3s">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header logo">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<h1>
									<a class="navbar-brand" href="index.html">E-learning SDN Cibeber 2</a>
								</h1>
								
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
								<nav class="cl-effect-1">
									<ul class="nav navbar-nav ">
										<li><a class="hvr-bounce-to-bottom" href="<?= base_url() ;?>/auth/login">MASUK</a></li>
										<li><a class="hvr-bounce-to-bottom" href="auth/registration">DAFTAR</a></li>
									</ul>
								</nav>
							</div><!-- /navbar-collapse -->
		</nav>
		<div class="banner-info wow bounceInDown" data-wow-duration="1s" data-wow-delay="0s">
			<script src="<?= base_url() ;?>assets/welcome/js/responsiveslides.min.js"></script>
			<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									 // Slideshow 4
									$("#slider3").responsiveSlides({
										auto: true,
										pager: false,
										nav: true,
										speed: 500,
										namespace: "callbacks",
										before: function () {
									$('.events').append("<li>before event fired.</li>");
									},
									after: function () {
										$('.events').append("<li>after event fired.</li>");
										}
										});
										});
			</script>
			<div  class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-text">
							<h3>FLEKSIBILITAS</h3>
							<p>fleksibilitas dalam memilih waktu dan tempat untuk mengakses pelajaran dilakukan dari mana saja.</p>
						</div>
					</li>
					<li>
						<div class="banner-text">
							<h3>REAL TIME</h3>
							<p> interaksi pembelajaran dari mana dan kapan saja.</p>
						</div>
					</li>
				</ul>
			</div>	
		</div>
		<div class="more-button text-center">
			<a href="#about" class="scroll"><img src="<?= base_url() ;?>assets/welcome/images/icon.png" alt=" "/></a>
		</div>
	</div>
</div>
<!-- //header -->


<!-- about -->
<div id="about" class="about all_pad agile">
	<div class="container">
		<h3 class="title">TENTANG</h3>
		<p class="para">E- Learning di buat dengan tujuan memudahkan guru dan murid SDN Cibeber 2
			berinteraksi tidak hanya di sekolah namun dimana saja dan menjadi alternatif media pembelajaran
			yang mengikuti perkembangan era digital.
		</p>
		<div class="abt-grids wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
			<div class="col-md-3 abt-grd text-center">
				<img src="<?= base_url() ;?>assets/welcome/images/icon1.png" alt=" "/>
				<h4>Materi Online</h4>
			</div>
			<div class="col-md-3 abt-grd text-center">
				<img src="<?= base_url() ;?>assets/welcome/images/icon2.png" alt=" "/>
				<h4>Interaksi dimana saja kapan saja</h4>
			</div>
			<div class="col-md-3 abt-grd text-center">
				<img src="<?= base_url() ;?>assets/welcome/images/icon3.png" alt=" "/>
				<h4>Memperkenalkan media pembelajaran baru</h4>
			</div>
			<div class="col-md-3 abt-grd text-center">
				<img src="<?= base_url() ;?>assets/welcome/images/icon4.png" alt=" "/>
				<h4>Melatih siswa untuk kreatif dan aktif </h4>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //about -->

<div class="copy-right">
	<div class="container">
		<p>&copy; 2019 Rektor . All rights reserved </p>
	</div>
</div>
<!-- smooth scrolling -->
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
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="<?= base_url() ;?>assets/welcome/js/bootstrap-3.1.1.min.js"></script>
</body>
</html>