<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<!-- SITE TITLE -->
		<title>Ecoenv</title>			
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">	
		<!-- Google Font -->
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome.min.css')}}">
		<!--- owl carousel Css-->
		<link rel="stylesheet" type="text/css" href="{{asset('owlcarousel/css/owl.carousel.css')}}">

		<link rel="stylesheet" type="text/css" href="{{asset('owlcarousel/css/owl.theme.css')}}">			
		<!-- venobox CSS -->		
		<link rel="stylesheet" type="text/css" href="{{asset('css/venobox.css')}}">			
		<!-- animate CSS -->		
		<link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">		
		<!-- Style CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
		<!-- CSS FOR COLOR SWITCHER -->
		<link rel="stylesheet" type="text/css" href="{{asset('css/switcher/switcher.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/switcher/style1.css')}}" id="colors">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	
    <body data-spy="scroll" data-offset="80">

		<!-- START PRELOADER -->
		<div class="preloader">
			<div class="status">
				<div class="status-mes"><h4>Ecoenv</h4></div>
			</div>
		</div>
		<!-- END PRELOADER -->
		
		<!-- START NAVBAR -->
		<div class="navbar navbar-default navbar-fixed-top menu-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<a href="index.html" class="navbar-brand"><img src="{{asset('img/logo.png')}}" alt="logo"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <nav>
						<ul class="nav navbar-nav navbar-right">
							<li><a class="page-scroll" href="#home">Home</a></li>
							<li><a class="page-scroll" href="#about">About</a></li>
							<li><a class="page-scroll" href="#service">Service</a></li>
							<li><a class="page-scroll" href="#portfolio">Work</a></li>
							<!-- <li><a class="page-scroll" href="#team">Team</a></li>	
							<li><a class="page-scroll" href="#blog">Blog</a></li>						 -->	
							<li><a class="page-scroll" href="#pricing">Supporters</a></li>
							<li><a class="page-scroll" href="#contact">Contact</a></li>
							
								@if (Route::has('login'))
								<li>
					                    @auth
					                        <a class="btn btn-detault btn-light-bg" href="{{ url('/home') }}">Home</a>
					                    @else
					                        <a class="btn btn-detault btn-light-bg" href="{{ route('login') }}">Login</a>

					                        @if (Route::has('register'))
					                        <li>
					                            <a class="btn btn-detault btn-light-bg" href="{{ route('register') }}">Register</a>
					                        </li>
					                        @endif
					                    @endauth
					                    </li>
					            @endif
							
						</ul>
					</nav>
                </div> 
            </div><!--- END CONTAINER -->
        </div> 
		<!-- END NAVBAR -->	
		
		<!-- START HOME DESIGN -->
	
		<!-- START HOME -->
		<section id="home" class="welcome-area">
			<div class="welcome-slider-area">
				<div id="welcome-slide-carousel" class="carousel slide carousel-fade" data-ride="carousel">
		
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="single-slide-item slide-1">
								<div class="single-slide-item-table">
									<div class="single-slide-item-tablecell">
										<div class="container">
											<div class="row">
												<div class="col-md-12">
													<h2>we are connecting the Trust near you</h2>
													<p>we will communicate with them to donate your excess things without tax</p>
													<a class="btn btn-default btn-home-bg page-scroll" href="#video">Donate Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="single-slide-item slide-2">
								<div class="single-slide-item-table">
									<div class="single-slide-item-tablecell">
										<div class="container">
											<div class="row">
												<div class="col-md-12">
													<h2>Live with nature</h2>
													<p>We have the plan,workers and material to use natural resources and get profit</p>
													<a class="btn btn-default btn-home-bg page-scroll" href="#video">Search now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="single-slide-item slide-3">
								<div class="single-slide-item-table">
									<div class="single-slide-item-tablecell">
										<div class="container">
											<div class="row">
												<div class="col-md-12">
													<h2>Education guide</h2>
													<p>We have AI to guide rural or uneducated urban people children education</p>
													<a class="btn btn-default btn-home-bg page-scroll" href="#video">Guide me</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="single-slide-item slide-4">
								<div class="single-slide-item-table">
									<div class="single-slide-item-tablecell">
										<div class="container">
											<div class="row">
												<div class="col-md-12">
													<h2>Home remedies and recepies</h2>
													<p>People can share your home remedies or recepies.we will reward them through money based on like and share</p>
													<a class="btn btn-default btn-home-bg page-scroll" href="#video">Post Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="single-slide-item slide-5">
								<div class="single-slide-item-table">
									<div class="single-slide-item-tablecell">
										<div class="container">
											<div class="row">
												<div class="col-md-12">
													<h2>Healthy & Cheap Ecommerce</h2>
													<p>We have a best deal with all farmers to give cheap and healthy products</p>
													<a class="btn btn-default btn-home-bg page-scroll" href="#video">Buy Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				 <!-- Controls -->
				  <a class="left carousel-control" href="#welcome-slide-carousel" role="button" data-slide="prev">
					<i class="fa fa-angle-left" aria-hidden="true"></i>
				  </a>
				  <a class="right carousel-control" href="#welcome-slide-carousel" role="button" data-slide="next">
					<i class="fa fa-angle-right" aria-hidden="true"></i>
				  </a>
  
				</div>
			</div>
		</section>
		<!-- END  HOME DESIGN -->	

		<!-- START FEATURE-->
		<section id="about" class="feature">
			<div class="container-fluid">
				<div class="row text-center">
					<div class="col-md-3 col-sm-6 col-xs-12 single_about wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<i class="fa fa-tablet"></i>
						<h4>Professional</h4>
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>						
					</div><!--- END COL -->
					<div class="col-md-3 col-sm-6 col-xs-12 single_about wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">	
						<i class="fa fa-life-ring"></i>
						<h4>Passion</h4>
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
					</div><!--- END COL -->
					<div class="col-md-3 col-sm-6 col-xs-12 single_about wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">		
						<i class="fa fa-paper-plane-o"></i>
						<h4>Transport</h4>
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
					</div><!--- END COL -->
					<div class="col-md-3 col-sm-6 col-xs-12 single_about wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<i class="fa fa-file-text-o"></i>
						<h4>Well Documented</h4>
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
					</div><!--- END COL -->						
				</div><!--- END ROW -->								
			</div><!--- END CONTAINER -->
		</section>
		<!-- END FEATURE -->		

		<!-- START ABOUT US -->
		<section class="about_us section-padding">
			<div class="container">
				<div class="row">
					<div class="section-title text-center wow zoomIn">
						<h2>Who we <span>are</span></h2>
						<div></div>
					</div>					
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="single_about_content">
							<h4>A little brief about us</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pulvinar lacus ut eros euismod, sit amet convallis lorem sagittis. In felis dolor, fringilla at mollis ac, blandit a magna. Pellentesque vehicula felis ex, id maximus.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pulvinar lacus ut eros euismod, sit amet convallis lorem sagittis. In felis dolor, fringilla at mollis.</p>
							<a class="btn-light-bg page-scroll" href="#video">More About</a>
						</div>
					</div><!--- END COL -->					
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="skills">
							<div class="progress-bar-linear">
								<p class="progress-bar-text">Education,Health and wealth</p>
								<div class="progress-bar">
									<span data-percent="95"></span>
								</div>
							</div>	
							<div class="progress-bar-linear">
								<p class="progress-bar-text">Profit from Natural resource </p>
								<div class="progress-bar">
									<span data-percent="90"></span>
								</div>
							</div>	
							<div class="progress-bar-linear">
								<p class="progress-bar-text">Farmer benefits</p>
								<div class="progress-bar">
									<span data-percent="75"></span>
								</div>
							</div>	
							<div class="progress-bar-linear">
								<p class="progress-bar-text">Trust benefits</p>
								<div class="progress-bar">
									<span data-percent="75"></span>
								</div>
							</div>
						</div>	
					</div><!--- END COL -->
				</div><!--- END ROW -->		
			</div><!--- END CONTAINER -->
		</section>
		<!-- END ABOUT US -->

		<!-- START WHY CHOOSE US -->
		<section class="why_choose_us section-padding">
			<div class="container">
				<div class="row">
					<div class="section-title text-center wow zoomIn">
						<h2>Why <span>choose</span> us</h2>
						<div></div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div id="why_choose" class="carousel slide" data-ride="carousel" data-interval="9999999">
							<ol class="carousel-indicators">
							  <li data-target="#why_choose" data-slide-to="0" class="active"></li>
							  <li data-target="#why_choose" data-slide-to="1"></li>
							  <li data-target="#why_choose" data-slide-to="2"></li>
							  <li data-target="#why_choose" data-slide-to="3"></li>
							</ol>
							<!-- Wrapper for slides -->
							<div class="carousel-inner text-center">								
								<div class="item active">
									<div class="single_feature">
										<i class="fa fa-pencil-square-o"></i>
										<h3>unique Ideas</h3>
										<span></span>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras interdum ante vel aliquet euismod. Curabitur accumsan vitae augue vitae eleifend. Nam nisl massa, malesuada id imperdiet ac.</p>	
									</div>
								</div><!-- END ITEM ACTIVE -->							
								<div class="item">
									<div class="single_feature">
										<i class="fa fa-magic"></i>
										<h3>Timely delivery</h3>
										<span></span>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras interdum ante vel aliquet euismod. Curabitur accumsan vitae augue vitae eleifend. Nam nisl massa, malesuada id imperdiet ac.</p>	
									</div>
								</div><!-- END ITEM 2 -->						
								<div class="item">
									<div class="single_feature">
										<i class="fa fa-html5"></i>
										<h3>Cost effectiveness</h3>
										<span></span>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras interdum ante vel aliquet euismod. Curabitur accumsan vitae augue vitae eleifend. Nam nisl massa, malesuada id imperdiet ac.</p>
									</div>
								</div><!-- END ITEM 3 -->						
								<div class="item">
									<div class="single_feature">
										<i class="fa fa-heart-o"></i>
										<h3>Modern & Simple</h3>
										<span></span>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras interdum ante vel aliquet euismod. Curabitur accumsan vitae augue vitae eleifend. Nam nisl massa, malesuada id imperdiet ac.</p>
									</div>
								</div><!-- END ITEM 4 -->
							</div><!-- END CAROUSEL INNER -->
						</div><!-- END CAROUSEL SLIDE -->				
					</div><!--- END COL -->
					<div class="col-md-6 col-sm-6 col-xs-12"> 
						<div class="feature_img">
							<img src="{{ asset('img/women-laptop.png') }}" class="img-responsive" alt="" />
						</div>
					</div><!--- END COL -->						
				</div><!--- END ROW -->			
			</div><!--- END CONTAINER -->		
		</section>
		<!-- END WHY CHOOSE US -->
		
		<!-- START SERVICE  -->
		<section id="service" class="our_service section-padding">
			<div class="container">
				<div class="row text-center">
					<div class="section-title wow zoomIn">
						<h2>our <span>service</span></h2>
						<div></div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 no-padding wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single_service">
							<i class="fa fa-circle-o-notch"></i>
							<h4>Consultancy</h4>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
						</div>
					</div><!--END COL -->
					<div class="col-md-4 col-sm-4 col-xs-12 no-padding wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single_service">
							<i class="fa fa-keyboard-o"></i>
							<h4>Finance</h4>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
						</div>
					</div><!--END COL -->
					<div class="col-md-4 col-sm-4 col-xs-12 no-padding wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single_service">
							<i class="fa fa-bullhorn"></i>
							<h4>Marketing</h4>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
						</div>
					</div><!--END COL -->
					<div class="col-md-4 col-sm-4 col-xs-12 no-padding wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single_service">
							<i class="fa fa-life-bouy"></i>
							<h4>Planning</h4>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
						</div>
					</div><!--END COL -->
					<div class="col-md-4 col-sm-4 col-xs-12 no-padding wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single_service">
							<i class="fa fa-briefcase"></i>
							<h4>Online Support</h4>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
						</div>
					</div><!--END COL -->
					<div class="col-md-4 col-sm-4 col-xs-12 no-padding wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single_service">
							<i class="fa fa-camera-retro"></i>
							<h4>Super Ideas</h4>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
						</div>
					</div><!--END COL -->
				</div><!--END  ROW -->
			</div><!-- END CONTAINER -->
		</section>
		<!-- END SERVICE-->	
		
		<!-- START PORTFOLIO -->	
		<section id="portfolio" class="works_area section-padding">	
			<div class="container">
				<div class="row text-center">
					<div class="section-title wow zoomIn">
						<h2>Latest <span>works</span></h2>
						<div></div>
					</div>
					<div class="col-md-12">
						<div class="our_work_menu">
							<ul>
								<li class="filter wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".25s" data-filter="all">All</li>
								<li class="filter" data-filter=".branding">Branding</li>
								<li class="filter" data-filter=".web">Web</li>
								<li class="filter" data-filter=".package">Package</li>
								<li class="filter" data-filter=".video">Video</li>
							</ul>
						</div>				
					</div>
					
					<div class="work_all_item">
						<div class="grid-item col-md-4 col-sm-6 col-xs-12 mix all branding package">
							<div class="single_our_work">
								<div class="sing_work_photo">
									<figure>								
										<img src="{{asset('img/portfolio/1.jpg')}}" alt="img">
										<div class="sing_work_text_link">
											<div class="sing_work_content_wrap">
												<div class="sing_work_content">												
													<p>Branding</p>
													<h4>Portfolio Title</h4>
													<div class="sing_link_img">
														<a href="{{asset('img/portfolio/1.jpg')}}" class="lightbox search" data-gall="gall-work"><i class="fa fa-eye"></i></a>
														<a href="single_project.html" class="link"><i class="fa fa-link"></i></a>
													</div>	
												</div>
											</div>
										</div>	
									</figure>
								</div>				
							</div>
						</div>
						
						<div class="grid-item col-md-4 col-sm-6 col-xs-12 mix all web">
							<div class="single_our_work">
								<div class="sing_work_photo">
									<figure>
										<img src="{{asset('img/portfolio/2.jpg')}}" alt="img">
										<div class="sing_work_text_link">
											<div class="sing_work_content_wrap">
												<div class="sing_work_content">
													<p>Webdesign</p>
													<h4>Portfolio Title</h4>
													<div class="sing_link_img">
														<a href="{{asset('img/portfolio/2.jpg')}}" class="lightbox search" data-gall="gall-work"><i class="fa fa-eye"></i></a>
														<a href="single_project.html" class="link"><i class="fa fa-link"></i></a>
													</div>	
												</div>
											</div>											
										</div>	
									</figure>
								</div>				
							</div>
						</div>
						
						<div class="grid-item col-md-4 col-sm-6 col-xs-12 all package branding">
							<div class="single_our_work">
								<div class="sing_work_photo">
									<figure>
										<img src="{{asset('img/portfolio/3.jpg')}}" alt="img">
										<div class="sing_work_text_link">
											<div class="sing_work_content_wrap">
												<div class="sing_work_content">
													<p>Package</p>
													<h4>Portfolio Title</h4>
													<div class="sing_link_img">
														<a href="{{asset('img/portfolio/3.jpg')}}" class="lightbox search" data-gall="gall-work"><i class="fa fa-eye"></i></a>
														<a href="single_project.html" class="link"><i class="fa fa-link"></i></a>
													</div>	
												</div>
											</div>										
										</div>								
									</figure>
								</div>				
							</div>
						</div>
						
						<div class="grid-item col-md-4 col-sm-6 col-xs-12 mix all branding package video">
							<div class="single_our_work">
								<div class="sing_work_photo">
									<figure>
										<img src="{{asset('img/portfolio/4.jpg')}}" alt="img">
										<div class="sing_work_text_link">
											<div class="sing_work_content_wrap">
												<div class="sing_work_content">	
													<p>Video</p>
													<h4>Portfolio Title</h4>
													<div class="sing_link_img">
														<a href="{{asset('img/portfolio/4.jpg')}}" class="lightbox search" data-gall="gall-work"><i class="fa fa-eye"></i></a>
														<a href="single_project.html" class="link"><i class="fa fa-link"></i></a>
													</div>	
												</div>
											</div>										
										</div>								
									</figure>
								</div>				
							</div>
						</div>					
						
						<div class="grid-item col-md-4 col-sm-6 col-xs-12 mix all branding package">
							<div class="single_our_work">
								<div class="sing_work_photo">
									<figure>
										<img src="{{asset('img/portfolio/5.jpg')}}" alt="img">
										<div class="sing_work_text_link">
											<div class="sing_work_content_wrap">
												<div class="sing_work_content">
													<p>Package</p>
													<h4>Portfolio Title</h4>
													<div class="sing_link_img">
														<a href="{{asset('img/portfolio/5.jpg')}}" class="lightbox search" data-gall="gall-work"><i class="fa fa-eye"></i></a>
														<a href="single_project.html" class="link"><i class="fa fa-link"></i></a>
													</div>	
												</div>
											</div>										
										</div>								
									</figure>
								</div>				
							</div>
						</div>					
						
						<div class="grid-item col-md-4 col-sm-6 col-xs-12 mix all branding video">
							<div class="single_our_work">
								<div class="sing_work_photo">
									<figure>
										<img src="{{asset('img/portfolio/6.jpg')}}" alt="img">
										<div class="sing_work_text_link">
											<div class="sing_work_content_wrap">
												<div class="sing_work_content">
													<p>Branding</p>
													<h4>Portfolio Title</h4>
													<div class="sing_link_img">
														<a href="{{asset('img/portfolio/6.jpg')}}" class="lightbox search" data-gall="gall-work"><i class="fa fa-eye"></i></a>
														<a href="single_project.html" class="link"><i class="fa fa-link"></i></a>
													</div>	
												</div>
											</div>										
										</div>																	
									</figure>
								</div>			
							</div>
						</div>											
					</div>				
				</div>
				<div class="portfolio_btn text-center">
					<a href="#" class="btn-light-bg">See More Work</a>
				</div>				
			</div>			
		</section>		
		<!-- END PORTFOLIO -->	

		<!-- START COUNDOWN --> 
		<section class="counter_feature">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="counter">
							<i class="fa fa-check"></i>
							<h2 class="timer"> 2500</h2>  
							<h5>Projects Finished</h5>
						</div>
					</div> <!--- END COL -->   
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="counter">
							<i class="fa fa-check"></i>
							<h2 class="timer">28256 </h2>  
							<h5>Educated children</h5>
						</div>
					</div><!--- END COL -->   
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
						<div class="counter">
							<i class="fa fa-check"></i>
							<h2 class="timer"> 1296</h2>							
							<h5>Award Won</h5>
						</div>
					</div> <!--- END COL --> 
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="0">
						<div class="counter">
							<i class="fa fa-check"></i>
							<h2 class="timer">2000</h2> 
							<h5>Satisfied Clients</h5>
						</div>
					</div> <!--- END COL -->                
			  </div><!--- END ROW -->
		   </div><!--- END CONTAINER -->
		</section>
		<!-- END COUNDOWN -->
		
		<!-- START ABOUT US -->
		<section data-stellar-background-ratio="0.3" id="video" class="about_video section-padding" style="background-image: url({{ asset('img/bg/download-bg.jpg') }}); background-size:cover; background-position: center center;">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 text-center">
						<div class="video-container">                  
							<h3>Check out the video!</h3>
							<a data-toggle="modal" data-target="#video-modal" data-backdrop="true">
							<span class="play-video"><span class="fa fa-play"></span></span></a>
						</div>
						<!-- VIDEO POPUP -->
						<div class="modal fade video-modal" id="video-modal" role="dialog">
							<div class="modal-content">
								<iframe width="712" height="400" src="https://www.youtube.com/embed/46zPW2BgMOA"></iframe>
							</div>
						</div>
						<!-- END VIDEO POPUP -->	
					</div><!--- END COL -->					
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->	
		</section>
		<!-- END ABOUT US -->
			

		<!-- START OUR TEAM -->
		<!-- <section id="team" class="our_team section-padding">
			<div class="container">		
				<div class="row text-center">
					<div class="section-title wow zoomIn">
						<h2>Our <span>Experts</span></h2>
						<div></div>
					</div>				
					<div class="col-md-3 col-sm-6">
						<div class="single_team">
							<div class="img_wrap">
								<img src="{{ asset('img/team/1.jpg') }}" class="img-responsive" alt="" />
								<div class="social_link">
									<div class="social_table">
										<ul class="list-inline">
											<li><a href=""><i class="fa fa-facebook"></i></a></li>
											<li><a href=""><i class="fa fa-twitter"></i></a></li>
											<li><a href=""><i class="fa fa-linkedin"></i></a></li>
											<li><a href=""><i class="fa fa-google-plus"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<h3>Joe S. Sloat</h3>
							<p>Co Founder</p>
						</div>
					</div> 		
					<div class="col-md-3 col-sm-6">
						<div class="single_team">
							<div class="img_wrap">
								<img src="{{ asset('img/team/2.jpg') }}" class="img-responsive" alt="" />
								<div class="social_link">
									<div class="social_table">
										<ul class="list-inline">
											<li><a href=""><i class="fa fa-facebook"></i></a></li>
											<li><a href=""><i class="fa fa-twitter"></i></a></li>
											<li><a href=""><i class="fa fa-linkedin"></i></a></li>
											<li><a href=""><i class="fa fa-google-plus"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<h3>Myron J. Baxter</h3>
							<p>CEO</p>
						</div>
					</div> 			
					<div class="col-md-3 col-sm-6">
						<div class="single_team">
							<div class="img_wrap">
								<img src="{{ asset('img/team/3.jpg') }}" class="img-responsive" alt="" />
								<div class="social_link">
									<div class="social_table">
										<ul class="list-inline">
											<li><a href=""><i class="fa fa-facebook"></i></a></li>
											<li><a href=""><i class="fa fa-twitter"></i></a></li>
											<li><a href=""><i class="fa fa-linkedin"></i></a></li>
											<li><a href=""><i class="fa fa-google-plus"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<h3>Keith W. Nelson</h3>
							<p>Designer</p>						
						</div>
					</div> 
					<div class="col-md-3 col-sm-6">
						<div class="single_team">
							<div class="img_wrap">
								<img src="{{ asset('img/team/4.jpg') }}" class="img-responsive" alt="" />
								<div class="social_link">
									<div class="social_table">
										<ul class="list-inline">
											<li><a href=""><i class="fa fa-facebook"></i></a></li>
											<li><a href=""><i class="fa fa-twitter"></i></a></li>
											<li><a href=""><i class="fa fa-linkedin"></i></a></li>
											<li><a href=""><i class="fa fa-google-plus"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<h3>Ruth A. Neilsen</h3>
							<p>Markater</p>						
						</div>
					</div> 
				</div>
			</div>
		</section> -->
		<!-- END TEAM -->		
		
		<!-- START NEWSLETTER -->
		<section class="newsletter" style="background-image: url({{ asset('img/bg/newsletter-bg.jpg') }});  background-size:cover; background-position: center center;background-attachment:fixed;">
			<div class="newsletter_overlay section-padding">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 text-center">
							<div class="signup_form">
								<h3>Subscribe to get the latest news, update and offer information. Don't worry, we won't send spam!</h3>
								<!-- Replace the form action in the line below with your MailChimp embed action! -->
								<form action="http://site90.us11.list-manage.com/subscribe/post?u=599a2153f4b86cb2f92d4af3a&amp;id=26d7c26287" method="post" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
									<input type="email" name="EMAIL" class="form-control" id="mce-email" placeholder="Enter Email">
									<span><button type="submit" name="subscribe" class="btn btn-detault btn-light-bg">Subscribe</button></span>
									<div id="mce-responses">
										<div class="response" id="mce-error-response" style="display:none"></div>
										<div class="response" id="mce-success-response" style="display:none"></div>
									</div>
								</form>
							</div>
						</div><!-- END COL  -->
					</div><!-- END ROW  -->
				</div><!-- END CONTAINER -->
			</div><!-- END NEWSLERTTER OVERLAY -->
		</section>
		<!-- END NEWSLETTER -->

		<!-- START PRICING -->
		<section id="pricing" class="pricing_table section-padding">
			<div class="container">
				<div class="row text-center">
					<div class="section-title wow zoomIn">
						<h2>Ecoenv <span>Supporters</span></h2>
						<div>
							
						</div>
					</div>		
					</div>

		<!-- START COMPANY PARTNER LOGO  -->
		<div class="partner-logo section-padding">
			<div class="partner_overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="partner wow fadeInRight">
						    	<a href="#" target="_blank"><img src="{{ asset('img/partner/1.png') }}" alt="image"></a>
						    	<a href="#" target="_blank"><img src="{{ asset('img/partner/2.png') }}" alt="image"></a>
						    	<a href="#" target="_blank"><img src="{{ asset('img/partner/3.png') }}" alt="image"></a>
						    	<a href="#" target="_blank"><img src="{{ asset('img/partner/4.png') }}" alt="image"></a>
						    	<a href="#" target="_blank"><img src="{{ asset('img/partner/5.png') }}" alt="image"></a>
						    	<a href="#" target="_blank"><img src="{{ asset('img/partner/6.png') }}" alt="image"></a>
						    	<a href="#" target="_blank"><img src="{{ asset('img/partner/1.png') }}" alt="image"></a>
						    	<a href="#" target="_blank"><img src="{{ asset('img/partner/2.png') }}" alt="image"></a>
						    	<a href="#" target="_blank"><img src="{{ asset('img/partner/3.png') }}" alt="image"></a>
						    	<a href="#" target="_blank"><img src="{{ asset('img/partner/4.png') }}" alt="image"></a>
							</div>
						</div><!-- END COL  -->
					</div><!--END  ROW  -->
				</div><!-- END CONTAINER  -->
			</div><!-- END OVERLAY -->
		</div>
		<!-- END COMPANY PARTNER LOGO -->
			</div>
		</section>
		<!-- END PRICING -->

		<!-- Start testimonials -->
		<section class="testimonials_area" style="background-image: url({{ asset('img/bg/testimonial-bg.jpg') }});  background-size:cover; background-position: center center;background-attachment:fixed;">
			<div class="testimonial_overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
							<div class="testimonials_carousel text-center">
								<div class="single_testimonial">	
									<div class="avatar">
										<img src="{{ asset('img/testimonial/1.jpg') }}" alt="" />
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
										labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
									</p>
									<h5>Frank A. Brown</h5>
								</div>			
								
								<div class="single_testimonial">
									<div class="avatar">
										<img src="{{ asset('img/testimonial/2.jpg') }}" alt="" />
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
										labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
									</p>
									<h5>Frank A. Brown</h5>
								</div>		

								<div class="single_testimonial">
									<div class="avatar">
										<img src="{{ asset('img/testimonial/3.jpg') }}" alt="" />
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
										labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
									</p>
									<h5>Frank A. Brown</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End testimonials -->	
		

		<!-- START HOME BLOG -->
		<!-- <section id="blog" class="home_blog section-padding">
			<div class="container">
				<div class="row">
					<div class="section-title text-center wow zoomIn">
						<h2>Latest <span>blog</span></h2>
						<div></div>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="home_single_blog">
							<img class="blog-photo" alt="" src="{{ asset('img/blog/blog-1.jpg') }}"/>
							<div class="home_blog_text text-center wow fadeInLeft">
								 <span><i class="fa fa-eye"></i> Admin</span><span><i class="fa fa-calendar"></i> Sep 05 2016</span>
								 <h4>What is creative design</h4>
								 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed elit tortor. Quisque bibendum mauris velit.</p>
								<a class="btn-light-bg" href="#">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="home_single_blog">
							<img class="blog-photo" alt="" src="{{ asset('img/blog/blog-2.jpg') }}"/>
							<div class="home_blog_text text-center wow fadeInLeft">
								 <span><i class="fa fa-eye"></i> Admin</span><span><i class="fa fa-calendar"></i> Sep 05 2016</span>
								 <h4>what is material design</h4>
								 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed elit tortor. Quisque bibendum mauris velit.</p>
								<a class="btn-light-bg" href="#">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!-- END HOME BLOG -->
		
		<!-- PROMOTION -->
		<section class="buy_now">
			<div class="container text-center">
				<h3 class="buy_now_title">Are you ready for your next step?<a href="#" class="btn btn-default btn-promotion-bg">Login Now</a> </h3>
			</div><!--- END CONTAINER -->
		</section>
		<!-- END PROMOTION -->
		
		<!-- START CONTACT FORM-->
		<section id="contact" class="contact_area section-padding">
			<div class="container">
				<div class="row">		
					<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp">
						<div class="contact_address">
							<h3>Contact Us</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras interdum ante vel aliquet euismod. Curabitur accumsan vitae augue vitae.</p>						
							<ul>
								<li><i class="fa fa-rocket"></i>2369 Robinson Lane Jackson,OH 45640</li>
								<li><i class="fa fa-phone"></i>(+1) 740-395-3829</li>
								<li><i class="fa fa-envelope"></i>Info@Ecoenv.com</li>
								<li><i class="fa fa-clock-o"></i>Mon - Fri: 08.00 - 16.00</li>
							</ul>
						</div>
					</div><!-- END COL -->						
					<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight">
						<div class="contact">
							<form id="contact-form" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="form-group col-md-12">
										<input type="text" name="name" class="form-control" id="first-name" placeholder="Name" required="required">
									</div>
									<div class="form-group col-md-12">
										<input type="email" name="email" class="form-control" id="email" placeholder="Email" required="required">
									</div>
									<div class="form-group col-md-12">
										<textarea rows="6" name="message" class="form-control" id="description" placeholder="Your Message" required="required"></textarea>
									</div>
									<div class="col-md-12">
										<div class="actions">
											<input type="submit" value="Send message" name="submit" id="submitButton" class="btn btn-lg btn-contact-bg" title="Submit Your Message!" />
										</div>
									</div>
								</div>
							</form>
						</div>
					</div><!-- END COL -->
				</div><!--- END ROW -->				
			</div><!--- END CONTAINER -->	
		</section>
		<!-- END CONTACT FORM -->
		
		<!-- START MAP -->
		<!-- map js -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU"></script>
		<script>
			function initialize() {
			  var mapOptions = {
				zoom: 15,
				scrollwheel: false,
				center: new google.maps.LatLng(40.7127837, -74.00594130000002)
			  };
			  var map = new google.maps.Map(document.getElementById('map'),
				  mapOptions);
			  var marker = new google.maps.Marker({
				position: map.getCenter(),
				icon: '{{ asset("img/map_pin.png") }}',
				map: map
			  });
			}
			google.maps.event.addDomListener(window, 'load', initialize);				
		</script>
		<div id="map"></div>
		<!-- END MAP -->
		
		<!-- START FOOTER -->
		<footer class="footer section-padding">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center wow zoomIn">
						<div class="footer_content">
							<a href="index.html"><img src="{{ asset('img/logo.png') }}" alt="" /></a>
							<div class="footer_social">
								<ul>
									<li><a class="f_facebook  wow bounceInDown" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="f_twitter wow bounceInDown" data-wow-delay=".1s" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="f_google wow bounceInDown" data-wow-delay=".2s" href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a class="f_linkedin wow bounceInDown" data-wow-delay=".3s" href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a class="f_youtube wow bounceInDown" data-wow-delay=".4s" href="#"><i class="fa fa-youtube"></i></a></li>
									<li><a class="f_skype wow bounceInDown" data-wow-delay=".5s" href="#"><i class="fa fa-skype"></i></a></li>
								</ul>
							</div>	
							<p>Ecoenv &copy; 2019 All Rights Reserved.</p>
						</div>
												
					</div><!--- END COL -->
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->	
		</footer>
		<!-- END FOOTER -->						 

		<!-- STYLE SWITCHER -->
		<!--  <div id="style-switcher">
			<h2>Choose Color<a href="#"><i class="fa fa-cog fa-spin"></i></a></h2>
			<div>
			  <ul class="colors" id="color1">
				<li><a href="#" class="style1"></a></li>
				<li><a href="#" class="style2"></a></li>
				<li><a href="#" class="style3"></a></li>
				<li><a href="#" class="style4"></a></li>
				<li><a href="#" class="style5"></a></li>
				<li><a href="#" class="style6"></a></li>
				<li><a href="#" class="style7"></a></li>
				<li><a href="#" class="style8"></a></li>
			  </ul>
			</div>
		 </div>   -->
		 <!-- END OF STYLE SWITCHER -->	
		 
		<!-- Latest jQuery -->
			<script type="text/javascript" src="{{ asset('js/jquery-1.12.4.min.js')}}"></script>
		<!-- Latest compiled and minified Bootstrap -->
			<script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>

		<!-- modernizr JS -->		
			<script type="text/javascript" src="{{ asset('js/modernizr-2.8.3.min.js')}}"></script>

		<!-- stellar js -->
			<script type="text/javascript" src="{{ asset('js/jquery.stellar.min.js')}}"></script>

		<!-- countTo js -->
			<script type="text/javascript" src="{{ asset('js/jquery.inview.min.js')}}"></script>
	
		<!-- owl-carousel min js  -->
			<script type="text/javascript" src="{{ asset('owlcarousel/js/owl.carousel.min.js')}}"></script>

		<!-- jquery mixitup min js -->
			<script type="text/javascript" src="{{ asset('js/jquery.mixitup.js')}}"></script>

		<!-- jquery venobox min js -->
			<script type="text/javascript" src="{{ asset('js/venobox.min.js')}}"></script>

		<!-- scrolltopcontrol js -->
			<script type="text/javascript" src="{{ asset('js/scrolltopcontrol.js')}}"></script>

		<!-- form-contact js -->
			<script type="text/javascript" src="{{ asset('js/form-contact.js')}}"></script>

		<!-- jquery appear js -->				
			<script type="text/javascript" src="{{ asset('js/jquery.appear.js')}}"></script>

		<!-- WOW - Reveal Animations When You Scroll -->
			<script type="text/javascript" src="{{ asset('js/wow.min.js')}}"></script>

		<!-- switcher js -->
			<script type="text/javascript" src="{{ asset('js/switcher.js')}}"></script>

		<!-- scripts js -->
			<script type="text/javascript" src="{{ asset('js/scripts.js')}}"></script>

    </body>
</html>