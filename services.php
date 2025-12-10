
<?php include('layout/header.php'); ?>
<?php include('layout/navbar.php'); ?>
<body>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
	/* MAIN HEADER ROW */
.header-lower .inner-container > .d-flex {
  display: flex;
  align-items: center;
}

/* LOGO — lock left */
.logo-box {
  flex: 0 0 auto;
}

/* NAV OUTER — absolute center */
.nav-outer {
  flex: 1;                          /* takes middle space */
  display: flex;
  justify-content: center;          /* centers menu */
  align-items: center;
}

/* MENU LIST — horizontal & clean */
.main-menu .navigation {
  display: flex;
  align-items: center;
  gap: 28px;
  margin: 0;
}

/* Remove legacy floats */
.main-menu .navigation li {
  float: none;
}

/* BUTTON AREA — force right end */
.outer-box {
  flex: 0 0 auto;
  display: flex;
  align-items: center;
  gap: 16px;
  margin-left: auto;                /* 🔑 hard-right alignment */
}
.header-lower .inner-container {
  max-width: 1200px;
  margin: 0 auto;
}

.nav-outer {
  flex: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: nowrap;   /* 🔥 THIS IS THE KEY */
}
.main-menu {
  display: flex;
  align-items: center;
}

.main-menu .navigation {
  display: flex;
  align-items: center;
  gap: 24px;
  margin: 0;
  padding: 0;
}

.main-menu .navigation li {
  float: none;
}
.outer-box {
  display: flex;
  align-items: center;
  gap: 14px;
  margin-left: auto;   /* ✅ pushes to right end */
  flex-wrap: nowrap;
}
.header-lower .inner-container > .d-flex {
  display: flex;
  align-items: center;
  flex-wrap: nowrap;   /* 🔥 prevent second row */
}


</style>
<div class="page-wrapper">
	
	<!-- Cursor -->
	<div class="cursor"></div>
	<div class="cursor-follower"></div>
	<!-- Cursor End -->
 
	
	<!-- About Sidebar -->
	<div class="about-sidebar">
		<div class="gradient-layer"></div>
		<!-- Close Button -->
		<div class="close-sidebar-widget close-button">
			<span class="fa-solid fa-xmark fa-fw"></span>
		</div>
		<div class="sidebar-inner">
			<div class="upper-box">
				<div class="image">
					<img src="assets/images/resource/about.jpg" alt="" />
				</div>
				<div class="content-box">
					<h3>About <span>Qonstruct</span></h3>
					<div class="text">our clients, oue employees, and our community through our commitmrnt to leadership, excellence in craft, and attention to detail.</div>
					<ul class="about-sidebar_list">
						<li>Testimonials</li>
						<li>Outsourcing</li>
						<li>Privacy Policy</li>
						<li>HR Training</li>
						<li>Careers</li>
					</ul>
				</div>
			</div>
			<!-- Social Box -->
			<div class="social-box">
				<a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
				<a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
				<a href="https://twitter.com/"><i class="fa-brands fa-x-twitter"></i></a>
				<a href="https://linkedin.com/"><i class="fab fa-linkedin"></i></a>
			</div>
		</div>
	</div>
	<!-- End About Sidebar -->
	
	<div id="smooth-wrapper">
      <div id="smooth-content">
	
			<!-- Page Title -->
			<section class="page-title" style="background-image:url(assets/images/background/2.jpg)">
				<div class="auto-container">
					
					<h2 style="text-align:center;">Services</h2>

					<div class="d-flex justify-content-between align-items-center flex-wrap">
						<ul class="bread-crumb clearfix">
							<li><a href="index.html">Home</a></li>
							<li>Services</li>
						</ul>
					
					</div>
				</div>
			</section>
			<!-- End Page Title -->
			
			<!-- Service Four -->
			<section class="service-four">
				<div class="auto-container">
					<div class="row clearfix">
						
						<!-- Service Block Two -->
						<div class="service-block_two style-two col-lg-4 col-md-6 col-sm-12">
							<div class="service-block_two-inner wow fadeInUp" data-wow-delay="150ms">
							  <div class="service-block_two-image overlay-anim">
								<a href="service-details.html"><img class="trans-500" src="assets/images/resource/service-1.jpg" alt="" /></a>
							  </div>
							  <div class="service-block_two-content">
								<div class="service-block_two-icon trans-500 flaticon-factory"></div>
								<h4 class="service-block_two-title"><a href="service-details.html">Industrial Construction</a></h4>
								<div class="service-block_two-text">Questions explained agreeable preferred strangers too him her son. There are many variations of passages.</div>
							  </div>
							</div>
						</div>
						
						<!-- Service Block Two -->
						<div class="service-block_two style-two col-lg-4 col-md-6 col-sm-12">
							<div class="service-block_two-inner wow fadeInUp" data-wow-delay="300ms">
							  <div class="service-block_two-image overlay-anim">
								<a href="service-details.html"><img class="trans-500" src="assets/images/resource/service-2.jpg" alt="" /></a>
							  </div>
							  <div class="service-block_two-content">
								<div class="service-block_two-icon trans-500 flaticon-construction"></div>
								<h4 class="service-block_two-title"><a href="service-details.html">Mechanical Works</a></h4>
								<div class="service-block_two-text">Questions explained agreeable preferred strangers too him her son. There are many variations of passages.</div>
							  </div>
							</div>
						</div>
						
						<!-- Service Block Two -->
						<div class="service-block_two style-two col-lg-4 col-md-6 col-sm-12">
							<div class="service-block_two-inner wow fadeInUp" data-wow-delay="450ms">
							  <div class="service-block_two-image overlay-anim">
								<a href="service-details.html"><img class="trans-500" src="assets/images/resource/service-3.jpg" alt="" /></a>
							  </div>
							  <div class="service-block_two-content">
								<div class="service-block_two-icon trans-500 flaticon-oil-pump"></div>
								<h4 class="service-block_two-title"><a href="service-details.html">Bridge Construction</a></h4>
								<div class="service-block_two-text">Questions explained agreeable preferred strangers too him her son. There are many variations of passages.</div>
							  </div>
							</div>
						</div>
						
						<!-- Service Block Two -->
						<div class="service-block_two style-two col-lg-4 col-md-6 col-sm-12">
							<div class="service-block_two-inner wow fadeInUp" data-wow-delay="600ms">
							  <div class="service-block_two-image overlay-anim">
								<a href="service-details.html"><img class="trans-500" src="assets/images/resource/service-4.jpg" alt="" /></a>
							  </div>
							  <div class="service-block_two-content">
								<div class="service-block_two-icon trans-500 flaticon-golden-gate-bridge"></div>
								<h4 class="service-block_two-title"><a href="service-details.html">Oil Gas & Power Plant</a></h4>
								<div class="service-block_two-text">Questions explained agreeable preferred strangers too him her son. There are many variations of passages.</div>
							  </div>
							</div>
						</div>
						
						<!-- Service Block Two -->
						<div class="service-block_two style-two col-lg-4 col-md-6 col-sm-12">
							<div class="service-block_two-inner wow fadeInUp" data-wow-delay="750ms">
							  <div class="service-block_two-image overlay-anim">
								<a href="service-details.html"><img class="trans-500" src="assets/images/resource/service-5.jpg" alt="" /></a>
							  </div>
							  <div class="service-block_two-content">
								<div class="service-block_two-icon trans-500 flaticon-construction-1"></div>
								<h4 class="service-block_two-title"><a href="service-details.html">Mechanical Works</a></h4>
								<div class="service-block_two-text">Questions explained agreeable preferred strangers too him her son. There are many variations of passages.</div>
							  </div>
							</div>
						</div>
						
						<!-- Service Block Two -->
						<div class="service-block_two style-two col-lg-4 col-md-6 col-sm-12">
							<div class="service-block_two-inner wow fadeInUp" data-wow-delay="150ms">
							  <div class="service-block_two-image overlay-anim">
								<a href="service-details.html"><img class="trans-500" src="assets/images/resource/service-6.jpg" alt="" /></a>
							  </div>
							  <div class="service-block_two-content">
								<div class="service-block_two-icon trans-500 flaticon-factory"></div>
								<h4 class="service-block_two-title"><a href="service-details.html">Industrial Construction</a></h4>
								<div class="service-block_two-text">Questions explained agreeable preferred strangers too him her son. There are many variations of passages.</div>
							  </div>
							</div>
						</div>
						
					</div>
					
					<!-- Styled Pagination -->
					<ul class="styled-pagination text-center">
						<li class="prev"><a href="#"><i class="fa-classic fa-solid fa-angles-left"></i></a></li>
						<li><a href="#" class="active">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li class="next"><a href="#"><i class="fa-classic fa-solid fa-angles-right"></i></a></li>
					</ul>
					<!-- End Styled Pagination -->
					
				</div>
			</section>
			<!-- End Service Four -->
			
			<!-- Clients Two -->
			<section class="clients-two">
				<div class="auto-container">
					<div class="inner-container">
						<div class="case-one__slider-inner">
							<div class="swiper clients_swiper">
							  <div class="swiper-wrapper">
									
									<!-- Slide -->
									<div class="swiper-slide">
										<div class="client-image">
											<a href="#"><img src="assets/images/clients/1.html" alt="" /></a>
										</div>
									</div>
									<!-- Slide -->
									<div class="swiper-slide">
										<div class="client-image">
											<a href="#"><img src="assets/images/clients/2.html" alt="" /></a>
										</div>
									</div>
									<!-- Slide -->
									<div class="swiper-slide">
										<div class="client-image">
											<a href="#"><img src="assets/images/clients/3.html" alt="" /></a>
										</div>
									</div>
									<!-- Slide -->
									<div class="swiper-slide">
										<div class="client-image">
											<a href="#"><img src="assets/images/clients/4.html" alt="" /></a>
										</div>
									</div>
									<!-- Slide -->
									<div class="swiper-slide">
										<div class="client-image">
											<a href="#"><img src="assets/images/clients/5.html" alt="" /></a>
										</div>
									</div>
									<!-- Slide -->
									<div class="swiper-slide">
										<div class="client-image">
											<a href="#"><img src="assets/images/clients/3.html" alt="" /></a>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Clients Two -->
			
			<!-- Main Footer -->
			<?php
			include('layout/footer.php');?>
	
	<!-- Search Popup -->
	<div class="search-popup">
		<div class="color-layer"></div>
		<button class="close-search"><span class="fa-xmark"></span></button>
		<form method="post" action="https://themecraze.net/html/qonstruct/blog.html">
			<div class="form-group">
				<input type="search" name="search-field" value="" placeholder="Search Here" required="">
				<button class="fa fa-solid fa-magnifying-glass fa-fw" type="submit"></button>
			</div>
		</form>
	</div>
	<!-- End Search Popup -->
	
	<!-- Color Palate / Color Switcher -->

<!-- End PageWrapper -->

<div class="progress-wrap">
	<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
	</svg>
</div>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/parallax.min.js"></script>
<script src="assets/js/tilt.jquery.min.js"></script>
<script src="assets/js/jquery.paroller.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/backtotop.js"></script>
<script src="assets/js/odometer.js"></script>
<script src="assets/js/parallax-scroll.js"></script>

<script src="assets/js/gsap.min.js"></script>
<script src="assets/js/SplitText.min.js"></script>
<script src="assets/js/ScrollTrigger.min.js"></script>
<script src="assets/js/ScrollToPlugin.min.js"></script>
<script src="assets/js/ScrollSmoother.min.js"></script>

<script src="assets/js/isotope.js"></script>
<script src="assets/js/jquery.marquee.min.js"></script>
<script src="assets/js/validate.js"></script>
<script src="assets/js/typeit.js"></script>
<script src="assets/js/jquery.marquee.min.js"></script>
<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/nav-tool.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/element-in-view.js"></script>
<script src="assets/js/color-settings.js"></script>
<script src="assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

<!-- Mirrored from themecraze.net/html/qonstruct/services-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Dec 2025 07:13:47 GMT -->
</html>