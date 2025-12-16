
<?php
$page_title = "Borewell Drilling Services | Contact Us ";
$meta_description ="Contact Orbit Forage SARL for professional borewell drilling, cleaning and pump installation services.";
$meta_keywords = "borewell cost,borewell motor,borewell machine,contact orbit forage sarl, borewell drilling contact, water drilling services.">
$url = "https://orbitforage.com/";
$image ="assets/images/orbit logo.svg";
include 'layout/header.php' ?>
<?php include('layout/navbar.php'); ?>

<div id="smooth-wrapper">
      <div id="smooth-content">
	
			<!-- Page Title -->
			<section class="page-title" style="background-image:url(assets/images/background/2.jpg)">
				<div class="auto-container">
			<h2 style="text-align: center;">Contact</h2>
					</div>
			</section>
			<!-- End Page Title -->
			
			<!-- Contact One -->
        <section class="contact-one" id="contact" style="
      padding-top: 80px;
      padding-bottom: 70px;">
    <div class="auto-container">
      <div class="row clearfix">
		

      <!-- Left Column -->
      <div class="contact-one_title-column col-lg-4 col-md-12 col-sm-12">
        <div class="contact-one_title-outer">
          <div class="sec-title">
            <div class="sec-title_title">Get info Now</div>
            <h3 class="sec-title_heading tx-split-text split-in-right">Contact Info</h3>
            <div class="sec-title_text">All types of borewell drilling, flushing, cleaning & motor fitting.Reliable service at reasonable rates.</div>
          </div>
          <ul class="contact-one_info-list">
            <li style="
    padding-left: 60px;">
              <span class="icon"><i class="fa-solid fa-location-dot"></i></span>
              Address
              <strong>Burnika Faso, West Africa</strong>
            </li>
            <li style="
    padding-left: 60px;">
              <span class="icon"><i class="fa-regular fa-envelope"></i></span>
              Write email 
              <strong>orbitforagesarl@gmail.com</strong>
            </li>
            <li style="
    padding-left: 60px;">
              <span class="icon"><i class="fa-solid fa-phone"></i>
</span>
              Have any question?
              <strong>+91 94428 96237</strong>
            </li>
          </ul>
        </div>
      </div>

      <!-- Right Column (Form) -->
      <div class="contact-one_form-column col-lg-8 col-md-12 col-sm-12">
        <div class="contact-one_form-outer">
          <div class="sec-title">
            <div class="sec-title_title">Have Questions?</div>
            <h3 class="sec-title_heading tx-split-text split-in-right">Send us a Message</h3>
          </div>

          <div class="contact-form">
            <form id="contact-form" method="post" action="sendmail.php">


              <div class="row clearfix">

                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                  <input type="text" name="username" id="username" placeholder="First Name" required>
                </div>

                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                  <input type="tel" name="phone" id="phone" placeholder="Phone Number" required>
                </div>

                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                  <input type="email" name="email" id="email" placeholder="Email address" required>
                </div>

                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                  <input type="text" name="services" id="services" placeholder="Services" required>
                </div>

                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                  <textarea name="message" id="message" placeholder="Your Message" required></textarea>
                </div>

                <div class="form-group col-lg-12">
                  <button type="submit" class="theme-btn btn-style-two">
                    <span class="btn-wrap">
                      <span class="text-one">Submit Now<i class="fa-classic fa-solid fa-arrow-right"></i></span>
                      <span class="text-two">Submit Now<i class="fa-classic fa-solid fa-arrow-right"></i></span>
                    </span>
                  </button>
                </div>

                <div class="form-group col-lg-12">
                  <div id="form-msg"></div>
                </div>

              </div>
            </form>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>
			<!-- End Contact One -->
			
			<!-- Map One -->
			<section class="map-one">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s" allowfullscreen=""></iframe>
			</section>
			<!-- End Map One -->
			
			
			
		<?php include('layout/footer.php'); ?>
			
		</div>
	</div>
	

	
</div>
<!-- End PageWrapper -->

<div class="progress-wrap">
	<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
	</svg>
</div>
<script>
document.getElementById("contact-form").addEventListener("submit", function(e){
  e.preventDefault();

  const msgBox = document.getElementById("form-msg");
  msgBox.innerHTML = "";

  const form = this;
  const formData = new FormData(form);

  const phone = document.getElementById("phone").value.trim();
  const email = document.getElementById("email").value.trim();

  // Basic validation
  if (![...formData.values()].every(v => v.trim() !== "")) {
    msgBox.innerHTML = "<span style='color:red;'>❌ All fields are required.</span>";
    return;
  }

  // Phone: allow 10–13 digits (+91 allowed)
  if (!/^\+?\d{10,13}$/.test(phone)) {
    msgBox.innerHTML = "<span style='color:red;'>❌ Enter a valid phone number.</span>";
    return;
  }

  // Email validation
  if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
    msgBox.innerHTML = "<span style='color:red;'>❌ Enter a valid email.</span>";
    return;
  }

  fetch("/orbit/sendmail.php", {
    method: "POST",
    body: formData
  })
  .then(response => response.text())
  .then(text => {
   if (text.trim() === "success") {
  Swal.fire({
    icon: "success",
    title: "Message Sent!",
    text: "Thank you for contacting us. We’ll get back to you shortly.",
    confirmButtonColor: "#f6a600"
  });
  form.reset();
}
 else {
      msgBox.innerHTML = "<span style='color:red;'>❌ Failed to send message. Try again.</span>";
    }
  })
  .catch(() => {
    msgBox.innerHTML = "<span style='color:red;'>❌ Network error. Please try later.</span>";
  });
});
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

<!-- Mirrored from themecraze.net/html/qonstruct/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Dec 2025 07:13:48 GMT -->
</html>