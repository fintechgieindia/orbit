	<!-- Main Header -->
	<header class="main-header header-style-two">
		
		<!-- Header Top -->
<div class="header-top">
    <div class="auto-container">
        <div class="inner-container">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                
                <!-- Left Side: Email & Phone -->
                <ul class="header-info_list d-flex align-items-center mb-0">
                    <li>
                        <span>Email : </span>
                        <a href="mailto:orbitforagesarl@gmail.com">orbitforagesarl@gmail.com</a>
                    </li>
                    <li class="ms-3">
                        <span>Call : </span>
                        <a href="tel:+919442896237">+91 94428 96237</a>
                    </li>
                </ul>

                <!-- Right Side: Social Media Icons -->
                <ul class="header-social d-flex align-items-center mb-0">
                    <li>
                        <a href="#" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="ms-3">
                        <a href="#" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="ms-3">
                        <a href="#" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>
<!-- End Header Top -->

		
		<!-- Header Lower -->
		<div class="header-lower">
			<div class="auto-container">
				<div class="inner-container">
					<div class="d-flex justify-content-between align-items-center">
						
						<!-- Logo Box -->
						<div class="logo-box">
							<div class="logo"><a href="index"><img src="assets/images/orbit logo.svg" alt="" title="Qonstruct"></a></div>
						</div>
						
						<div class="nav-outer d-flex flex-wrap">
							<!-- Main Menu -->
							<nav class="main-menu navbar-expand-md">
								<div class="navbar-header">
									<!-- Toggle Button -->    	
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								
								<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
									<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<ul class="navigation clearfix">
    <li class="<?= ($currentPage == 'index') ? 'active' : '' ?>">
        <a href="index">Home</a>
    </li>

    <li class="<?= ($currentPage == 'about') ? 'active' : '' ?>">
        <a href="about">About</a>
    </li>

    <li class="<?= ($currentPage == 'services') ? 'active' : '' ?>">
        <a href="services">Services</a>
    </li>

    <li class="<?= ($currentPage == 'gallery') ? 'active' : '' ?>">
        <a href="gallery">Gallery</a>
    </li>

    <li class="<?= ($currentPage == 'contact') ? 'active' : '' ?>">
        <a href="contact">Contact</a>
    </li>
</ul>

								</div>
							</nav>
						</div>

						<!-- Main Menu End-->
						<div class="outer-box d-flex align-items-center flex-wrap">

							
							<!-- About Widget -->
							<span class="about-widget">
								<span class="hamburger">
									<span class="top-bun"></span>
									<span class="meat"></span>
									<span class="bottom-bun"></span>
								</span>
							</span>
							
							<!-- Button Box -->
							<div class="main-header_button">
								<a href="contact" class="theme-btn btn-style-one">
									<span class="btn-wrap">
										<span class="text-one">Schedule Site Visit<i class="fa-classic fa-solid fa-arrow-right"></i></span>
										<span class="text-two">Schedule Site Visit<i class="fa-classic fa-solid fa-arrow-right"></i></span>
									</span>
								</a>
							</div>
							
							<!-- Mobile Navigation Toggler -->
							<div class="mobile-nav-toggler"><span class="icon fa-classic fa-solid fa-bars fa-fw"></span></div>

						</div>
						
					</div>
				</div>
			</div>
		</div>
		<!--End Header Lower-->
		
		<!-- Mobile Menu  -->
		<div class="mobile-menu">
			<div class="menu-backdrop"></div>
			<div class="close-btn"><span class="icon fa-xmark"></span></div>
			
			<nav class="menu-box">
				<div class="nav-logo"><a href="index"><img src="assets/images/orbit logo.svg" alt="" title=""></a></div>
				<div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
			</nav>
		</div>
		<!-- End Mobile Menu -->
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
					<img src="assets/images/about.png" alt="" />
				</div>
				<div class="content-box">
					<h4>About <span>Orbit Forage SARL</span></h4>
					<div class="text">Orbit Forage Sarl provides reliable water solutions through honest, long-lasting work.</div>
					<ul class="about-sidebar_list">
						<li>Borewell Drilling</li>
						<li>Borewell Cleaning</li>
						<li>Borewell Maintenance</li>
						<li>Borewell Flushing</li>
						<li>Pump Installation</li>
					</ul>
				</div>
			</div>
			<!-- Social Box -->
			<div class="social-box">
				<a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
				<a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
				<a href="https://twitter.com/"><i class="fa-brands fa-x-twitter"></i></a>
			
			</div>
		</div>
	</div>
	<!-- End About Sidebar -->
	</header>
	<style>

.main-header .main-menu .navigation > li > a,
.main-header .main-menu .navigation > li > a:hover,
.main-header .main-menu .navigation > li > a:focus,
.main-header .main-menu .navigation > li.active > a {
    text-decoration: none !important;
    border-bottom: none !important;
    box-shadow: none !important;
}

.main-header .main-menu .navigation > li > a::before,
.main-header .main-menu .navigation > li > a::after {
    content: none !important;
    display: none !important;
}
.header-social li a {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background-color: #ffffff;
    border: 1px solid #ffffff;
    text-decoration: none;   /* 🔥 remove underline */
    transition: all 0.3s ease;
}

.header-social li a i {
    color: #14176c;
    font-size: 16px;
}

/* Hover */
.header-social li a:hover {
    background-color: #ffc107;
    border-color: #ffc107;
    text-decoration: none;   /* extra safety */
}

.header-social li a:hover i {
    color: #ffffff;
}

.header-info_list li a {
    text-decoration: none !important;
}

/* FORCE navbar menu font size */
.main-header .main-menu .navigation > li > a {
    font-size: 19px !important;
}


@media (max-width: 768px) {
  .main-menu .navigation > li > a {
      font-size: 16px;
  }
}

/* Reduce button size */
.btn-style-one {
    padding: 7px 10px;   /* top-bottom | left-right */
    font-size: 16px;
    line-height: 7px;
}
.about-sidebar .content-box h4 {
    font-size: 18px;
}

.about-sidebar .content-box .text {
    font-size: 13px;
    line-height: 18px;
}

.about-sidebar_list li {
    font-size: 13px;
    line-height: 18px;
}


</style>
	<!-- End Main Header -->
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
