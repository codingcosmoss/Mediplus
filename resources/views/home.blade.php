<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
        <title>Mediplus - Free Medical and Doctor Directory HTML Template.</title>
		
		<!-- Favicon -->
        <link rel="icon" href="img/favicon.png">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('')}}asset/css/bootstrap.min.css">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="{{asset('')}}asset/css/nice-select.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{asset('')}}asset/css/font-awesome.min.css">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="{{asset('')}}asset/css/icofont.css">
		<!-- Slicknav -->
		<link rel="stylesheet" href="{{asset('')}}asset/css/slicknav.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{asset('')}}asset/css/owl-carousel.css">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="{{asset('')}}asset/css/datepicker.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="{{asset('')}}asset/css/animate.min.css">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{asset('')}}asset/css/magnific-popup.css">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="{{asset('')}}asset/css/normalize.css">
        <link rel="stylesheet" href="{{asset('')}}asset/style.css">
        <link rel="stylesheet" href="{{asset('')}}asset/css/responsive.css">
		
    </head>
    <body>
	
		<!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator"> 
                    <svg width="16px" height="12px">
                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <!-- End Preloader -->
		
		<!-- Get Pro Button -->
		<ul class="pro-features">
			<a class="get-pro" href="#">Get Pro</a>
			<li class="big-title">Pro Version Available on Themeforest</li>
			<li class="title">Pro Version Features</li>
			<li>2+ premade home pages</li>
			<li>20+ html pages</li>
			<li>Color Plate With 12+ Colors</li>
			<li>Sticky Header / Sticky Filters</li>
			<li>Working Contact Form With Google Map</li>
			<div class="button">
				<a href="http://preview.themeforest.net/item/mediplus-medical-and-doctor-html-template/full_screen_preview/26665910?_ga=2.145092285.888558928.1591971968-344530658.1588061879" target="_blank" class="btn">Pro Version Demo</a>
				<a href="https://themeforest.net/item/mediplus-medical-and-doctor-html-template/26665910" target="_blank" class="btn">Buy Pro Version</a>
			</div>
		</ul>
	
		<!-- Header Area -->
		<header class="header" >
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-5 col-12">
							<!-- Contact -->
							<ul class="top-link">
								<li><a href="#">About</a></li>
								<li><a href="#">Doctors</a></li>
								<li><a href="#">Contact</a></li>
								<li><a href="#">FAQ</a></li>
							</ul>
							<!-- End Contact -->
						</div>
						<div class="col-lg-6 col-md-7 col-12">
							<!-- Top Contact -->
							<ul class="top-contact">
								<li><i class="fa fa-phone"></i>+880 1234 56789</li>
								<li><i class="fa fa-envelope"></i><a href="mailto:support@yourmail.com">support@yourmail.com</a></li>
							</ul>
							<!-- End Top Contact -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="index.html"><img src="{{asset('')}}asset/img/logo.png" alt="#"></a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<li class="active"><a href="#">Home <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="index.html">Home Page 1</a></li>
												</ul>
											</li>


											<li><a href="#">Doctos </a></li>
											<li><a href="#">Services </a></li>
											<li><a href="#">Pages <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="404.html">404 Error</a></li>
												</ul>
											</li>
											<li><a href="{{route('blogs')}}">Blogs <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="{{route('blogs')}}">Blog Details</a></li>
												</ul>
											</li>
											<li><a href="contact.html">Contact Us</a></li>
										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
							<div class="col-lg-2 col-12">
								<div class="get-quote">
									<a href="appointment.html" class="btn">Book Appointment</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->
		
		<!-- Slider Area -->
		<section class="slider">
			<div class="hero-slider">
				<!-- Start Single Slider -->
				@foreach ($homeItemsWithLists as $item)
				<div class="single-slider" style="background-image:url('{{asset('')}}storage/{{$item->image}}')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
								<h1>{{$item->title}}</h1>
									<!-- <h1><span>Medical</span> Services That You Can <span>Trust!</span></h1> -->
									<p>{{$item->text}}</p>
									<div class="button">
									@foreach ($item->lists as $list)
    <a href="{{ $list->link }}" class="btn primary">{{ $list->title }}</a>
@endforeach


									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				<!-- End Single Slider -->
			</div>
		</section>
		<!--/ End Slider Area -->
		
		<!-- Start Schedule Area -->
		<section class="schedule">
			<div class="container">
				<div class="schedule-inner">
					<div class="row">
				@foreach ($hoursItemsWithLists as $item)
						<div class="col-lg-4 col-md-6 col-12 ">
							<!-- single-schedule -->
							<div class="single-schedule first">
								<div class="inner">
									<div class="icon">
										<i class="fa fa-ambulance"></i>
									</div>
									<div class="single-content">
										<span>{{$item->text}}</span>
										<h4>{{$item->title}}</h4>
										<p>{{$item->description}}</p>

										<!-- {{$hours->lists}} -->
										@foreach ($item->lists as $list)
										<a href="{{ $list->link }}">{{$list->title}}<i class="fa fa-long-arrow-right"></i></a>
										@endforeach
									</div>
								</div>
							</div>
						</div>
						@endforeach
				
					</div>
				</div>
			</div>
		</section>
		<!--/End Start schedule Area -->

		<!-- Start Feautes -->
		<section class="Feautes section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>{{$helper['title']}}</h2>
							<img src="{{asset('')}}asset/img/section-img.png" alt="#">
							<p>{{$helper['text']}}</p>
						</div>
					</div>
				</div>
				<div class="row">
				@foreach ($helperItemsWithLists as $item)
    <div class="col-lg-4 col-12">
        <div class="single-features">
            <div class="signle-icon">
                <i class="icofont icofont-ambulance-cross"></i>
            </div>
            <h3>{{ $item->title }}</h3>
            <p>{{$item->text}}</p>
        </div>
    </div>
@endforeach

					
				</div>
			</div>
		</section>
		<!--/ End Feautes -->
		
		<!-- Start Fun-facts -->
		<div id="fun-facts" class="fun-facts section overlay">
			<div class="container">
				<div class="row">
				@foreach ($numbersItemsWithList as $item)
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-home"></i>
							<div class="content">
								<span class="counter">{{$item->title}}</span>
								<p>{{$item->text}}</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
@endforeach

				
				</div>
			</div>
		</div>
		<!--/ End Fun-facts -->
		
		<!-- Start Why choose -->
		<section class="why-choose section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>{{$health['title']}}</h2>
							<img src="{{asset('')}}asset/img/section-img.png" alt="#">
							<p>{{$health['text']}}</p>
						</div>
					</div>
				</div>
				<div class="row">
				@foreach ($healthItemsWithList as $item)
					<div class="col-lg-6 col-12">
						<!-- Start Choose Left -->
						<div class="choose-left">
							<h3>{{$item->title}}</h3>
							<p>{{$item->text}}</p>
							<p>{{$item->description}}</p>
							<div class="row">
						
								<div class="col-lg-6">
									<ul class="list">
									@foreach ($item->lists as $list)
									<li><i class="fa fa-caret-right"></i>{{$list->title}}</li>
									@endforeach
									</ul>
								</div>
							</div>
						</div>
						<!-- End Choose Left -->
					</div>
				@endforeach	
					<div class="col-lg-6 col-12">
						<!-- Start Choose Rights -->
						<div class="choose-right">
							<div class="video-image">
								<!-- Video Animation -->
								<div class="promo-video">
									<div class="waves-block">
										<div class="waves wave-1"></div>
										<div class="waves wave-2"></div>
										<div class="waves wave-3"></div>
									</div>
								</div>
								<!--/ End Video Animation -->
								<a href="https://www.youtube.com/watch?v=RFVXy6CRVR4" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
							</div>
						</div>
						<!-- End Choose Rights -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Why choose -->
		
		<!-- Start Call to action -->
		<section class="call-action overlay" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						@foreach ($callItemsWithList as $item)
						<div class="content">
							<h2>{{$item->title}}</h2>
							<p>{{$item->text}}</p>
							<div class="button">
							@foreach ($item->lists as $list)
								<a href="{{ $list->link }}" class="btn">{{$list->title}}</a>
								<!-- <a href="#" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a> -->
								@endforeach
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>
		<!--/ End Call to action -->
		
		<!-- Start portfolio -->
		<section class="portfolio section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>{{$images['title']}}</h2>
							<img src="{{asset('')}}asset/img/section-img.png" alt="#">
							<p>{{$images['text']}}</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-12">
						<div class="owl-carousel portfolio-slider">
						@foreach ($imagesItemsWithList as $item)

							<div class="single-pf">
								<img src="{{asset('')}}storage/{{$item->image}}" alt="Rasm yo'q">
								<a href="{{ $item->link }}" class="btn">View Details</a>
							</div>
						@endforeach
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End portfolio -->
		
		<!-- Start service -->
		<section class="services section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>{{$differentServices['title']}}</h2>
							<img src="{{asset('')}}asset/img/section-img.png" alt="#">
							<p>{{$differentServices['text']}}</p>
						</div>
					</div>
				</div>
				<div class="row">
				@foreach ($differentServicesItemsWithList as $item)
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-prescription"></i>
							<h4><a href="service-details.html">{{$item->title}}</a></h4>
							<p>{{$item->description}}</p>	
						</div>
						<!-- End Single Service -->
					</div>
					@endforeach
				</div>
			</div>
		</section>
		<!--/ End service -->
		
		<!-- Pricing Table -->
		<section class="pricing-table section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>{{$prices['title']}}</h2>
							<img src="{{asset('')}}asset/img/section-img.png" alt="#">
							<p>{{$prices['text']}}</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Single Table -->
				@foreach ($pricesItemsWithList as $item)
					<div class="col-lg-4 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
									<i class="icofont icofont-ui-cut"></i>
								</div>
								<h4 class="title">{{$item->title}}</h4>
								<div class="price">
									<p class="amount">{{$item->text}}<span>/ Per Visit</span></p>
								</div>	
							</div>
							<!-- Table List -->
							<ul class="table-list">
							@foreach ($item->lists as $list)
								<li><i class="icofont icofont-ui-check"></i>{{$list->title}}</li>
								@endforeach
							</ul>
							<div class="table-bottom">
								<a class="btn" href="#">Book Now</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					@endforeach
					<!-- End Single Table-->
				</div>	
			</div>	
		</section>	
		<!--/ End Pricing Table -->
		
		
		
		<!-- Start Blog Area -->
		<section class="blog section" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>{{$medicalNews['title']}}</h2>
							<img src="{{asset('')}}asset/img/section-img.png" alt="#">
							<p>{{$medicalNews['text']}}</p>
						</div>
					</div>
				</div>
				<div class="row">
				@foreach ($medicalNewsItems as $item)
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<img src="{{asset('')}}storage/{{$item->image}}" alt="Rasm yo'q">
							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="date">{{$item->updated_at}}</div>
									<h2><a href="blog-single.html">We have annnocuced our new product.</a></h2>
									<p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
				@endforeach
				</div>
			</div>
		</section>
		<!-- End Blog Area -->
		
		<!-- Start clients -->
		<div class="clients overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="owl-carousel clients-slider">
							<div class="single-clients">
								<img src="{{asset('')}}asset/img/client1.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{asset('')}}asset/img/client2.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{asset('')}}asset/img/client3.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{asset('')}}asset/img/client4.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{asset('')}}asset/img/client5.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{asset('')}}asset/img/client1.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{asset('')}}asset/img/client2.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{asset('')}}asset/img/client3.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{asset('')}}asset/img/client4.png" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Ens clients -->
		
		<!-- Start Appointment -->
		<section class="appointment">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Are Always Ready to Help You. Book An Appointment</h2>
							<img src="{{asset('')}}asset/img/section-img.png" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-12 col-12">
						<form class="form" action="#">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="name" type="text" placeholder="Name">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="email" type="email" placeholder="Email">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="phone" type="text" placeholder="Phone">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<div class="nice-select form-control wide" tabindex="0"><span class="current">Department</span>
											<ul class="list">
												<li data-value="1" class="option selected ">Department</li>
												<li data-value="2" class="option">Cardiac Clinic</li>
												<li data-value="3" class="option">Neurology</li>
												<li data-value="4" class="option">Dentistry</li>
												<li data-value="5" class="option">Gastroenterology</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<div class="nice-select form-control wide" tabindex="0"><span class="current">Doctor</span>
											<ul class="list">
												<li data-value="1" class="option selected ">Doctor</li>
												<li data-value="2" class="option">Dr. Akther Hossain</li>
												<li data-value="3" class="option">Dr. Dery Alex</li>
												<li data-value="4" class="option">Dr. Jovis Karon</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input type="text" placeholder="Date" id="datepicker">
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-12">
									<div class="form-group">
										<textarea name="message" placeholder="Write Your Message Here....."></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-5 col-md-4 col-12">
									<div class="form-group">
										<div class="button">
											<button type="submit" class="btn">Book An Appointment</button>
										</div>
									</div>
								</div>
								<div class="col-lg-7 col-md-8 col-12">
									<p>( We will be confirm by an Text Message )</p>
								</div>
							</div>
						</form>
					</div>
					<div class="col-lg-6 col-md-12 ">
						<div class="appointment-image">
							<img src="{{asset('')}}asset/img/contact-img.png" alt="#">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Appointment -->
		
		<!-- Start Newsletter Area -->
		<section class="newsletter section">
			<div class="container">
				<div class="row ">
					<div class="col-lg-6  col-12">
						<!-- Start Newsletter Form -->
						<div class="subscribe-text ">
							<h6>Sign up for newsletter</h6>
							<p class="">Cu qui soleat partiendo urbanitas. Eum aperiri indoctum eu,<br> homero alterum.</p>
						</div>
						<!-- End Newsletter Form -->
					</div>
					<div class="col-lg-6  col-12">
						<!-- Start Newsletter Form -->
						<div class="subscribe-form ">
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Your email address" class="common-input" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Your email address'" required="" type="email">
								<button class="btn">Subscribe</button>
							</form>
						</div>
						<!-- End Newsletter Form -->
					</div>
				</div>
			</div>
		</section>
		<!-- /End Newsletter Area -->
		
		<!-- Footer Area -->
		<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>About Us</h2>
								<p>Lorem ipsum dolor sit am consectetur adipisicing elit do eiusmod tempor incididunt ut labore dolore magna.</p>
								<!-- Social -->
								<ul class="social">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-google-plus"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-vimeo"></i></a></li>
									<li><a href="#"><i class="icofont-pinterest"></i></a></li>
								</ul>
								<!-- End Social -->
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Quick Links</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Services</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Our Cases</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Other Links</a></li>	
										</ul>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Consuling</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Finance</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Testimonials</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>FAQ</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a></li>	
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Open Hours</h2>
								<p>Lorem ipsum dolor sit ame consectetur adipisicing elit do eiusmod tempor incididunt.</p>
								<ul class="time-sidual">
									<li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
									<li class="day">Saturday <span>9.00-18.30</span></li>
									<li class="day">Monday - Thusday <span>9.00-15.00</span></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Newsletter</h2>
								<p>subscribe to our newsletter to get allour news in your inbox.. Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
								<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
									<input name="email" placeholder="Email Address" class="common-input" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Your email address'" required="" type="email">
									<button class="button"><i class="icofont icofont-paper-plane"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>© Copyright 2018  |  All Rights Reserved by <a href="https://www.wpthemesgrid.com" target="_blank">wpthemesgrid.com</a> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->
		
		<!-- jquery Min JS -->
        <script src="{{asset('')}}asset/js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="{{asset('')}}asset/js/jquery-migrate-3.0.0.js"></script>
		<!-- jquery Ui JS -->
		<script src="{{asset('')}}asset/js/jquery-ui.min.js"></script>
		<!-- Easing JS -->
        <script src="{{asset('')}}asset/js/easing.js"></script>
		<!-- Color JS -->
		<script src="{{asset('')}}asset/js/colors.js"></script>
		<!-- Popper JS -->
		<script src="{{asset('')}}asset/js/popper.min.js"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="{{asset('')}}asset/js/bootstrap-datepicker.js"></script>
		<!-- Jquery Nav JS -->
        <script src="{{asset('')}}asset/js/jquery.nav.js"></script>
		<!-- Slicknav JS -->
		<script src="{{asset('')}}asset/js/slicknav.min.js"></script>
		<!-- ScrollUp JS -->
        <script src="{{asset('')}}asset/js/jquery.scrollUp.min.js"></script>
		<!-- Niceselect JS -->
		<script src="{{asset('')}}asset/js/niceselect.js"></script>
		<!-- Tilt Jquery JS -->
		<script src="{{asset('')}}asset/js/tilt.jquery.min.js"></script>
		<!-- Owl Carousel JS -->
        <script src="{{asset('')}}asset/js/owl-carousel.js"></script>
		<!-- counterup JS -->
		<script src="{{asset('')}}asset/js/jquery.counterup.min.js"></script>
		<!-- Steller JS -->
		<script src="{{asset('')}}asset/js/steller.js"></script>
		<!-- Wow JS -->
		<script src="{{asset('')}}asset/js/wow.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="{{asset('')}}asset/js/jquery.magnific-popup.min.js"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="{{asset('')}}asset/js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="{{asset('')}}asset/js/main.js"></script>
    </body>
</html>