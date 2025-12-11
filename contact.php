<?php
session_start();
$show_popup = false;

if(isset($_SESSION['form_success'])){
    $show_popup = true;
    unset($_SESSION['form_success']);
}
?>


<?php include('layout/header.php'); ?>
<?php include('layout/navbar.php'); ?>
<body>
	

<div class="page-wrapper">
	
	
	
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
				<h2 style="text-align:center;">Contact</h2>

<!-- 				
					<div class="d-flex justify-content-between align-items-center flex-wrap">
						<ul class="bread-crumb clearfix">
							<li><a href="index.html">Home</a></li>
							<li>Contact</li>
						</ul>
						
					</div> -->
				</div>
			</section>
			<!-- End Page Title -->
			
			<!-- Contact One -->
	<div id="page-wrapper">
    <section class="contact-one">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="image wow fadeInLeft" data-wow-delay="300ms">
                    <img src="assets/images/gallery/14.jpg" alt="" />
                    <div class="overlay-box">
                        <h4>Leading the Way in Borewell & Water Solutions!</h4>
                        <div class="text">We support homes, farms, and businesses with reliable borewell drilling, accurate groundwater surveys, and complete pump installation services delivered with trust and care!</div>
                    </div>
                </div>
            </div>

            <!-- Form Column -->
            <div class="form-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInRight" data-wow-delay="300ms">

                    <div class="title-box">
                        <h3>Request A Quote</h3>
                        <div class="text">Get quick and clear guidance for your borewell or water system needs. Share your details, and our team will connect with you shortly with the best solution.</div>
                    </div>

                    <div class="default-form">
                        <form method="post" action="sendmail.php" id="contact-form">
                            <div class="row clearfix">

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <input type="text" name="username" id="username" placeholder="Full Name" required>
                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <input type="email" name="email" id="email" placeholder="Email Address" required>
                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" name="phone" id="phone" placeholder="Phone" required>
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <textarea name="message" id="message" placeholder="Your Message" required></textarea>
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="theme-btn btn-style-two">
                                        <span class="btn-wrap">
                                            <span class="text-one">Get in touch <i class="fa-classic fa-solid fa-arrow-right"></i></span>
                                            <span class="text-two">Get in touch <i class="fa-classic fa-solid fa-arrow-right"></i></span>
                                        </span>
                                    </button>
                                </div>

                            </div>
                        </form>
 					 </div>

                </div>
            </div>

        </div>
    </div>
</section>
</div>
<!-- POPUP OUTSIDE — stays clear -->
<div id="success-popup" class="popup-box">
    <div class="popup-card">
        <h2>Thank you for contacting us!</h2>
        <p>Our borewell expert will call you soon with the details.</p>
        <button onclick="closePopup()">OK</button>
    </div>
</div>

			<!-- End Contact One -->
		
			
			<!-- Map One -->
			<section class="map-one">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s" allowfullscreen=""></iframe>
			</section>
			<!-- End Map One -->
			
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
			
		<?php
			include('layout/footer.php');?>

<style>			
/* Blur background ONLY */
.blur-bg {
    filter: blur(7px);
    pointer-events: none;
}

/* Popup background overlay */
.popup-box {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 99999;
}

/* Show popup */
.popup-box.show {
    display: flex;
}

/* Blue popup card — CLEAR, NEVER BLURRED */
/* Blue popup card — CLEAR */
.popup-card {
    background: #14176C;
    color: rgb(255,162,0);   /* <-- Updated text color */
    padding: 35px;
    width: 360px;
    border-radius: 18px;
    text-align: center;
    z-index: 100000;
    transform: scale(0.8);
    animation: pop .25s ease-out forwards;
}

.popup-card h2 {
    color: rgb(255,162,0);
    font-size: 22px;
    margin-bottom: 10px;
    white-space: nowrap;   /* <-- Forces one line */
}
.popup-card {
    width: 420px;   /* increased from 360px */
}

.popup-card p {
    color: rgb(255,162,0);   /* Paragraph color */
    font-size: 15px;
    opacity: 0.9;
}


.popup-card button {
    margin-top: 18px;
    padding: 10px 20px;
    background: #fff;
    color: #14176C;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 600;
}

/* Popup animation */
@keyframes pop {
    from { transform: scale(0.8); opacity: 0; }
    to { transform: scale(1); opacity: 1; }
}
</style>
	<!-- Search Popup -->
	<!-- <div class="search-popup">
		<div class="color-layer"></div>
		<button class="close-search"><span class="fa-xmark"></span></button>
		<form method="post" action="https://themecraze.net/html/qonstruct/blog.html">
			<div class="form-group">
				<input type="search" name="search-field" value="" placeholder="Search Here" required="">
				<button class="fa fa-solid fa-magnifying-glass fa-fw" type="submit"></button>
			</div>
		</form>
	</div> -->
	<!-- End Search Popup -->
	
	<!-- Color Palate / Color Switcher -->
	
<!-- End PageWrapper -->

<div class="progress-wrap">
	<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
	</svg>
</div>

<!-- <script>
// Form Validation + AJAX Submission + Popup
document.getElementById("contact-form").addEventListener("submit", function(e){
    e.preventDefault();

    let name = document.getElementById("username").value.trim();
    let email = document.getElementById("email").value.trim();
    let phone = document.getElementById("phone").value.trim();
    let message = document.getElementById("message").value.trim();

    // Basic validation
    if(!name || !email || !phone || !message){
        alert("Please fill all fields.");
        return;
    }

    let formData = new FormData(this);

    fetch("sendmail.php", {
        method: "POST",
        body: formData
    })
    .then(res => res.text())
    .then(response => {
        if(response.trim() === "success"){

            // Show popup
            document.getElementById("success-popup").classList.add("show");

            // Blur the contact section
            document.querySelector(".contact-section").classList.add("blur-bg");
        }
    });
});

// Close popup
function closePopup(){
    document.getElementById("success-popup").classList.remove("show");
    document.querySelector(".contact-section").classList.remove("blur-bg");
}
</script> -->


<script>
window.onload = function(){
    <?php if($show_popup): ?>
        document.getElementById("success-popup").classList.add("show");
        document.getElementById("page-wrapper").classList.add("blur-bg");
    <?php endif; ?>
};

function closePopup(){
    document.getElementById("success-popup").classList.remove("show");
    document.getElementById("page-wrapper").classList.remove("blur-bg");
}

</script>



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

<!-- Mirrored from themecraze.net/html/qonstruct/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Dec 2025 07:13:48 GMT -->
</html>