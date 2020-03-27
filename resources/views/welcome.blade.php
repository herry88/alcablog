<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>AlcaSoft</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Precedence Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<!-- Bootstrap Core CSS -->
	<link href="{{URL::asset('assets/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="{{URL::asset('assets/css/style.css')}}" rel='stylesheet' type='text/css' />
	<!-- font-awesome icons -->
	<link href="{{URL::asset('assets/css/fontawesome-all.min.css')}}" rel="stylesheet">
	<!-- //Custom Theme files -->
	<!--webfonts-->
	<link href="//fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
	<!--//webfonts-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	<div id="home">
		<!-- header -->
		<section class="main-header">
			<div class="header-top text-md-left text-center">
				<div class="container">
					<div class="d-md-flex justify-content-between">
						<p class="text-capitalize">if you have any question? Call Us +62896-6786-7330 </p>
						<ul class="social-iconsv2 agileinfo mt-md-0 mt-2">
							<li class="ml-lg-5">
								<a href="#">
									<i class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-google-plus-g"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-linkedin-in"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /header-top-->
			<header class="main-header">
				<nav class="navbar second navbar-expand-lg navbar-light bg-light pagescrollfix">
					<div class="container">
						<h1>
							<a class="navbar-brand" href="index.html">
								AlcaSoft
								<span>improving lives</span>
							</a>
						</h1>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-toggle" aria-controls="navbarNavAltMarkup1"
						    aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						@include('frontend.header.menu')
					</div>
				</nav>
			</header>
		</section>
		<!-- //header -->
		<!-- banner -->
		@include('frontend.banner.banner')
		<!-- //banner -->
		<!-- banner bottom -->
		
		<!-- //banner-bottom -->
		<!-- about-->
		<section class="wthree-row py-sm-5" id="about">
			<div class="container py-md-5">
				<div class="row abbot-main py-lg-5 py-4">
					<div class="col-lg-6 abbot-right">
						<span></span>
						<img src="{{URL::asset('assets/images/slide.png')}}" class="img-fluid" alt="" />
					</div>
					<div class="col-lg-6 about-text-grid">
						<h3 class="stat-title">about us
						</h3>
						<p class="mt-md-5 mt-3">Donec mi nulla, auctor nec sem a, ornare auctor mi. Sed mi tortor, commodo a felis in, fringilla tincidunt nulla. Vestibulum
							volutpat non eros ut vulpuuctor nec sem a, ornare auctor mi. Sed mi tortor, commodo a felis in, fringilla tincidunt
							nulla. Vestibulum volutpat non eros uttate.</p>
						<p class="my-4">
							Vestibulum volutpat non eros ut vulputate. Nunc id risus accumsan Donec mi nulla, auctor nec sem a, ornare auctor mi. Sed
							mi tortor, commodo a felis in, fringilla tincidunt nulla.</p>

						<a href="#services" class="text-capitalize serv_link btn bg-theme scroll">explore now</a>
					</div>
				</div>
			</div>
		</section>
		<!-- //about -->
		<!-- services -->
		<section class="services-w3sec py-5" id="services">
			<div class="container">
				<div class="agileabt-w3 py-lg-5">
					<div class="w3l-head text-center  pb-5">
						<h3 class="stat-title">services
						</h3>
						<p class="sec-title text-capitalize">
							a driving force in your business Providing precedenceing business services</p>
					</div>
					<div class="row py-lg-5">
						<!-- Table #1  -->
						<div class="col-lg-4 my-lg-0 my-5">
							<div class="w3ls-pricing card">
								<div class="card-header">
									<h4 class="serv-title">
										service1
									</h4>
								</div>
								<div class="card-block">
									<p class="card-title price-title">
										Pellentesque in ipsum id orci porta dapibus. Nulla quis lorem ut libero malesuada feugiat praesent sapien massa.
									</p>
									<a href="#explore" class="text-capitalize price_link btn scroll">read more</a>
								</div>
								<i class="service-icon fas fa-database">
								</i>
							</div>
						</div>
						<!-- Table #1  -->
						<div class="col-lg-4 my-lg-0 my-5">
							<div class="w3ls-pricing card service-active">
								<div class="card-header">
									<h4 class="serv-title">
										service2
									</h4>
								</div>
								<div class="card-block">
									<p class="card-title price-title">
										Pellentesque in ipsum id orci porta dapibus. Nulla quis lorem ut libero malesuada feugiat praesent sapien massa.
									</p>
									<a href="#explore" class="text-capitalize price_link btn scroll">read more</a>
								</div>
								<i class="service-icon far fa-lightbulb">
								</i>
							</div>
						</div>
						<!-- Table #1  -->
						<div class="col-lg-4 mb-lg-0 mb-5">
							<div class="w3ls-pricing card">
								<div class="card-header">
									<h4 class="serv-title">
										service3
									</h4>
								</div>
								<div class="card-block">
									<p class="card-title price-title">
										Pellentesque in ipsum id orci porta dapibus. Nulla quis lorem ut libero malesuada feugiat praesent sapien massa.
									</p>
									<a href="#explore" class="text-capitalize price_link btn scroll">read more</a>
								</div>
								<i class="service-icon fas fa-bullhorn">
								</i>
							</div>
						</div>
					</div>
					<div class="text-center">
						<a href="#sub-services" class="text-capitalize serv_link btn bg-theme scroll">explore now</a>
					</div>
				</div>
			</div>
		</section>
		<!-- //services -->
		<!-- sub services -->
		<section class="py-md-5" id="sub-services">
			<div class="container">
				<div class="agileabt-w3">
					<div class="row py-5">
						<div class="col-lg-8">
							<h3 class="stat-title"> 30+ years of experiences</h3>
							<ul class="list-group mt-3">
								<li class="list-group-item border-0">
									<i class="fas fa-check mr-3"></i>Cras justo odio</li>
								<li class="list-group-item border-0">
									<i class="fas fa-check mr-3"></i>Dapibus ac facilisis in</li>
								<li class="list-group-item border-0">
									<i class="fas fa-check mr-3"></i>Morbi leo risus</li>
								<li class="list-group-item border-0">
									<i class="fas fa-check mr-3"></i>Porta ac consectetur ac</li>
								<li class="list-group-item border-0">
									<i class="fas fa-check mr-3"></i>Vestibulum at eros</li>
								<li class="list-group-item border-0">
									<i class="fas fa-check mr-3"></i>Cras justo odio</li>
								<li class="list-group-item border-0">
									<i class="fas fa-check mr-3"></i>Dapibus ac facilisis in</li>
							</ul>
						</div>
						<div class="col-lg-4 grad_video my-lg-auto mt-5">
							<img src="{{URL::asset('assets/images/i1.png')}}" class="img-fluid" alt="" />
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- //sub services -->
		<!-- testimonials-->
		
		<!-- //testimonials -->
		<!-- branches -->
		<section class="py-5 branches position-relative" id="explore">
			<div class="container py-md-5">
				<h3 class="stat-title text-center pb-lg-5">our capabilities
				</h3>
				<div class="row text-center py-sm-5 pb-2 pt-5">
					<div class="col-md-3 col-6">
						<div class="services-box">
							<span class="icon">
								<i class="fas fa-pencil-alt"></i>
							</span>
							<h4>heading 1</h4>
						</div>
					</div>
					<div class="col-md-3 col-6">
						<div class="services-box">
							<span class="icon">
								<i class="fas fa-rocket"></i>
							</span>
							<h4>heading 2</h4>
						</div>
					</div>
					<!-- .Services-box ends here -->
					<div class="col-md-3 col-6 mt-md-0 mt-5">
						<div class="services-box">
							<span class="icon">
								<i class="fa fa-laptop"></i>
							</span>
							<h4>heading 3</h4>
						</div>
					</div>
					<div class="col-md-3 col-6 mt-md-0 mt-5">
						<div class="services-box">
							<span class="icon">
								<i class="fas fa-code"></i>
							</span>
							<h4>heading 4</h4>
						</div>
					</div>
				</div>
				<hr>
				<div class="branches">
					<div class="row py-lg-5 pt-sm-5">
						<div class="col-lg-4">
							<!-- team-img -->
							<div class="team-block">
								<h5>loremipsum dummy text</h5>
								<p>Some text here</p>
								<div class="team-img">
									<img src="{{URL::asset('assets/images/b1.png')}}" alt="" class="img-fluid">
									<div class="team-content">
										<h4 class="text-white">pretium ut lacinia in</h4>
									</div>
									<div class="overlay">
										<div class="text text-center">
											<p class="text-white">
												Quisque velit nisi, pretium ut lacinia in, elementum id porttitor lectus nibh onec sollicitudin molestie malesuada.enim.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /.team-img -->
						<div class="col-lg-4 my-lg-0 my-5">
							<!-- team-img -->
							<div class="team-block">
								<h5>loremipsum dummy text</h5>
								<p>Some text here</p>
								<div class="team-img">
									<img src="{{URL::asset('assets/images/b3.png')}}" alt="" class="img-fluid">
									<div class="team-content">
										<h4 class="text-white">pretium ut lacinia in</h4>
									</div>
									<div class="overlay">
										<div class="text text-center">
											<p class="text-white">
												Quisque velit nisi, pretium ut lacinia in, elementum id porttitor lectus nibh onec sollicitudin molestie malesuada.enim.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /.team-img -->
						<div class="col-lg-4">
							<!-- team-img -->
							<div class="team-block">
								<h5>loremipsum dummy text</h5>
								<p>Some text here</p>
								<div class="team-img">
									<img src="{{URL::asset('assets/images/b2.png')}}" alt="" class="img-fluid">
									<div class="team-content">
										<h4 class="text-white">pretium ut lacinia in</h4>
									</div>
									<div class="overlay">
										<div class="text text-center">
											<p class="text-white">
												Quisque velit nisi, pretium ut lacinia in, elementum id porttitor lectus nibh onec sollicitudin molestie malesuada.enim.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- //branches -->
		<!-- contact top -->
		<div class="contact-top text-center">
			<div class="content-contact-top">
				<h3 class="stat-title text-white">for more information</h3>
				<a href="#contact" class="text-capitalize serv_link btn my-sm-5 my-3 scroll">stay in touch</a>
				<p class="text-white w-75 mx-auto">Donec mi nullDonec mi nulla, auctor nec sem a, ornare auctor mi. Sed mi tortor, commodo a felis in, fringilla tincidunt
					nulla. Vestibulum volutpat non eros ut vulpuuctor nec sem a, a auctor nec sem a ornare auctor mi.
				</p>
			</div>
		</div>
		<!-- //contact top -->
		<!-- blog -->
		<section class="section-events py-5" id="blog">
			<div class="container py-md-5">
				<h3 class="stat-title text-center pb-sm-5">our articles
				</h3>
				<div class="sub-sec-grid position-relative my-5">
					<div class="row">
						<div class="col-lg-4">
							<a href="#">
								<img class="card-img-bottom" src="{{URL::asset('assets/images/g2.jpg')}}" alt="Card image cap">
							</a>
						</div>
						<div class="col-lg-8 date-grid-agile-right">
							<div class="card-body">
								<h5 class="blog-title card-title font-weight-bold">
									Blog Title
								</h5>
								<p class="card-text  mb-5">Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Pellentesque
									in ipsum id orci porta sed magna dictum dapibus.</p>
								<div class="text-right">
									<a href="#" class="price_link btn">Read more</a>
								</div>
							</div>
						</div>
						<div class="pos-date">
							<div class="pos-date__inner">
								<h2 class="pos-date__title">12</h2>
								<p class="pos-date__subtitle">june</p>
							</div>
						</div>
					</div>
				</div>
				<div class="sub-sec-grid position-relative">
					<div class="row">
						<div class="col-lg-8 date-grid-agile-left">
							<div class="card-body">
								<h5 class="blog-title card-title font-weight-bold">
									Blog Title
								</h5>
								<p class="card-text  mb-5">Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Pellentesque
									in ipsum id orci porta sed magna dictum dapibus.</p>
								<div class="text-right">
									<a href="#" class="price_link btn">Read more</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<a href="#">
								<img class="card-img-bottom" src="images/g1.jpg" alt="Card image cap">
							</a>
						</div>
						<div class="pos-date-even">
							<div class="pos-date__inner">
								<h2 class="pos-date__title">16</h2>
								<p class="pos-date__subtitle">june</p>
							</div>
						</div>
					</div>
				</div>
				<div class="sub-sec-grid position-relative my-5">
					<div class="row">
						<div class="col-lg-4">
							<a href="#">
								<img class="card-img-bottom" src="{{URL::asset('assets/images/g3.jpg')}}" alt="Card image cap">
							</a>
						</div>
						<div class="col-lg-8 date-grid-agile-right">
							<div class="card-body">
								<h5 class="blog-title card-title font-weight-bold">
									Blog Title
								</h5>
								<p class="card-text  mb-5">Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Pellentesque
									in ipsum id orci porta sed magna dictum dapibus.</p>
								<div class="text-right">
									<a href="#" class="price_link btn">Read more</a>
								</div>
							</div>
						</div>
						<div class="pos-date">
							<div class="pos-date__inner">
								<h2 class="pos-date__title">20</h2>
								<p class="pos-date__subtitle">july</p>
							</div>
						</div>
					</div>
				</div>
				<div class="sub-sec-grid position-relative">
					<div class="row">
						<div class="col-lg-8 date-grid-agile-left">
							<div class="card-body">
								<h5 class="blog-title card-title font-weight-bold">
									Blog Title
								</h5>
								<p class="card-text  mb-5">Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Pellentesque
									in ipsum id orci porta sed magna dictum dapibus.</p>
								<div class="text-right">
									<a href="#" class="price_link btn">Read more</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<a href="#">
								<img class="card-img-bottom" src="{{asset('assets/images/g4.jpg')}}" alt="Card image cap">
							</a>
						</div>
						<div class="pos-date-even">
							<div class="pos-date__inner">
								<h2 class="pos-date__title">30</h2>
								<p class="pos-date__subtitle">july</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- //blog -->
		<!-- contact -->
		<div class="w3-contact py-5" id="contact">
			<div class="container py-lg-5">
				<h3 class="stat-title text-center pb-5">contact us
				</h3>
				<div class="row contact-form pt-lg-5">
					<!-- contact details -->
					<div class="col-lg-6 contact-bottom d-flex flex-column contact-right-w3ls">
						<h5>get in touch</h5>
						<div class="fv3-contact">
							<div class="row">
								<div class="col-2">
									<span class="fas fa-envelope-open"></span>
								</div>
								<div class="col-10 contact-add">
									<h6>email</h6>
									<p>
										<a href="mailto:example@email.com" class="text-dark">info@example.com</a>
									</p>
								</div>
							</div>
						</div>
						<div class="fv3-contact my-4">
							<div class="row">
								<div class="col-2">
									<span class="fas fa-phone-volume"></span>
								</div>
								<div class="col-10 contact-add">
									<h6>phone</h6>
									<p>+456 123 7890</p>
								</div>
							</div>
						</div>
						<div class="fv3-contact">
							<div class="row">
								<div class="col-2">
									<span class="fas fa-home"></span>
								</div>
								<div class="col-10 contact-add">
									<h6>address</h6>
									<p>+90 nsequursu dsdesdc, Street State 34789.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 wthree-form-left my-lg-0 mt-5">
						<h5>send us a mail</h5>
						<!-- contact form grid -->
						<div class="contact-top1">
							<form action="#" method="get" class="contact-wthree">
								<div class="form-group d-flex">
									<label>
										Name
									</label>
									<input class="form-control" type="text" placeholder="Johnson" name="email" required="">
								</div>
								<div class="form-group d-flex">
									<label>
										Email
									</label>
									<input class="form-control" type="email" placeholder="example@email.com" name="email" required="">
								</div>
								<div class="form-group d-flex">
									<label>
										Phone
									</label>
									<input class="form-control" type="text" placeholder="XXXX XXXX XX" name="email" required="">
								</div>
								<div class="form-group d-flex">
									<label>
										Message
									</label>
									<textarea class="form-control" rows="5" id="contactcomment" placeholder="Your message" required></textarea>
								</div>
								<div class="d-flex justify-content-end">
									<button type="submit" class="btn btn-agile btn-block w-25">Send</button>
								</div>
							</form>
						</div>
						<!--  //contact form grid ends here -->
					</div>

				</div>
				<!-- //contact details container -->
			</div>
		</div>
		<!-- //contact -->
		<!-- Footer -->
		<footer id="footer" class="py-5">
			<div class="container">
				<div class="row  py-lg-5">
					<div class="col-lg-3 col-sm-6 footer-logo">
						<h5>about us</h5>
						<h2>
							<a href="index.html">
								AlcaSoft
								<span>improving lives</span>
							</a>
						</h2>
						<p class="mt-3"></p>
					</div>
					<div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
						<h5>Quick links</h5>
						<ul class="list-unstyled quick-links">
							<li>
								<a href="#">
									<i class="fa fa-angle-double-right"></i>Home</a>
							</li>
							<li>
								<a href="#about" class="scroll">
									<i class="fa fa-angle-double-right"></i>About</a>
							</li>
							<li>
								<a href="#services" class="scroll">
									<i class="fa fa-angle-double-right"></i>Services</a>
							</li>
							<li>
								<a href="#blog" class="scroll">
									<i class="fa fa-angle-double-right"></i>Articles</a>
							</li>
							<li>
								<a href="#contact" class="scroll">
									<i class="fa fa-angle-double-right"></i>Contact</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
						<h5>Working hours</h5>
						<ul class="list-unstyled quick-links">
							<li>
								{{ $working[0]->name }}
								<br>
								<span>{{ $working[0]->hour }}</span>
							</li>
							<li>
								{{ $working[1]->name }}
								<br>
								<span> {{ $working[1]->hour }} </span>
							</li>
							<li>
								{{ $working[2]->name }}
								<br>
								<span> {{ $working[2]->hour }} </span>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-sm-6 footer_grid1 mt-lg-0 mt-4">
						<h5>Address</h5>
						<div class="fv3-contact">
							<span class="fas fa-envelope-open mr-2"></span>
							<p>
								<a href="mailto:example@email.com">info@example.com</a>
							</p>
						</div>
						<div class="fv3-contact my-2">
							<span class="fas fa-phone-volume mr-2"></span>
							<p>+456 123 7890</p>
						</div>
						<div class="fv3-contact">
							<span class="fas fa-home mr-2"></span>
							<p>+90 nsequursu dsdesdc,
								<br>xxx Street State 34789.</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<div class="cpy-right text-center py-4">
			<p>© @php
				echo date('Y');
			@endphp AlcaSoft. All rights reserved | Design by
				<a href="http://w3layouts.com"> W3layouts.</a>
			</p>
		</div>
	</div>
	<!-- /Footer -->
	<!-- js-->
	<script src="{{URL::asset('assets/js/jquery-2.2.3.min.js')}}"></script>
	<!-- js-->
	<!-- Scrolling Nav JavaScript -->
	<script src="{{URL::asset('assets/js/scrolling-nav.js')}}"></script>
	<!-- //fixed-scroll-nav-js -->
	<script>
		$(window).scroll(function () {
			if ($(document).scrollTop() > 70) {
				$('nav.pagescrollfix,nav.RWDpagescrollfix').addClass('shrink');
			} else {
				$('nav.pagescrollfix,nav.RWDpagescrollfix').removeClass('shrink');
			}
		});
	</script>
	<!-- Banner text Responsiveslides -->
	<script src="{{URL::asset('assets/js/responsiveslides.min.js')}}"></script>
	<script>
		// You can also use"$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider3").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
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
	<!-- //Banner text  Responsiveslides adfafadsfdsafa-->
	<!-- start-smooth-scrolling -->
	<script src="{{ URL::asset('assets/js/move-top.js') }}"></script>
	<script src="{{ URL::asset('assets/js/easing.js') }}"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			 var defaults = {
				 containerID: 'toTop', // fading element id
				 containerHoverID: 'toTopHover', // fading element hover id
				 scrollSpeed: 1200,
				 easingType: 'linear' 
			 };
			 */

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<script src="{{ URL::asset('assets/js/SmoothScroll.min.js') }}"></script>
	<!-- //smooth-scrolling-of-move-up -->
	<!-- Bootstrap Core JavaScript -->
	<script src="{{URL::asset('assets/js/bootstrap.js')}}">
	</script>
	<!-- //Bootstrap Core JavaScript -->
</body>

</html>