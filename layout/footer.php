<footer class="main-footer style-three">
  <!-- Footer Pattern -->
  <div class="footer_pattern" style="background-image: url(assets/images/background/pattern-5.html)"></div>

  <div class="auto-container">
    <div class="inner-container">

      <!-- Widgets Section -->
      <div class="widgets-section">
        <div class="row clearfix">

          <!-- Column 1: Logo & About -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="footer-widget footer-two_logo-widget">
              <div class="footer-logo">
                <a href="index.php"><img src="assets/images/orbit logo.svg" alt="" title=""></a>
              </div>
              <div class="footer-text">
                Our company specializes in electrical wiring and repair. We carry out any projects with our hearts and are not afraid of difficulties!
              </div>
              <!-- Social Box -->
              <div class="footer-social_box">
                <strong>Follow Us</strong>
                <a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/"><i class="fa-brands fa-x-twitter"></i></a>
       </div>
            </div>
          </div>

          <!-- Column 2: Quick Links -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="footer-widget links-widget">
              <h4 class="footer-title">Quick Links</h4>
              <ul class="footer-list">
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </div>
          </div>

          <!-- Column 3: Services -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="footer-widget links-widget">
              <h4 class="footer-title">Services</h4>
              <ul class="footer-list">
                <li><a href="services.php">Borewell Drilling</a></li>
                <li><a href="services.php">Borewell Cleaning</a></li>
                <li><a href="services.php">Borewell Maintenance</a></li>
                <li><a href="services.php">Borewell Flushing</a></li>
                  <li><a href="services.php">Groundwater Survey</a></li>
              </ul>
            </div>
          </div>

          <!-- Column 4: Contact Us -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="footer-widget footer-subscription">
              <h4 class="footer-title">Contact Us</h4>
              <ul class="list-unstyled mb-0">
                <!-- Address -->
                <li class="d-flex align-items-start gap-2 mb-2">
                  <span class="contact-icon location-icon" style="margin-top: 3px;">
                    <svg width="20" height="20"><use xlink:href="#location-icon"></use></svg>
                  </span>
                  <span style="color:#fff">Burnica Feso</span>
                </li>
                <!-- Email -->
                <li class="d-flex align-items-center gap-3 mb-2">
                  <span class="contact-icon mail-icon">
                    <svg width="20" height="20"><use xlink:href="#mail-icon"></use></svg>
                  </span>
                  <a href="mailto:Orbitforagesarl@gmail.com">Orbitforagesarl@gmail.com</a>
                </li>
                <!-- Phone -->
                <li class="d-flex align-items-center gap-3">
                  <span class="contact-icon phone-icon">
                    <svg width="20" height="20"><use xlink:href="#phone-icon"></use></svg>
                  </span>
                  <span>
                    <a href="tel:+91 94428 96237">+91 94428 96237</a> | 
                    
                  </span>
                </li>
              </ul>
            </div>
          </div>
        </div>
        </div>
      </div>
  </div> <!-- End Widgets Section -->

      <!-- Footer Bottom -->
    <div class="footer-bottom mt-4"> 
      <div class="auto-container">
		<div class="row">
			<div class="copyright py-30 py-lg-40 d-flex flex-column flex-md-row gap-3 justify-content-between">
				<p class="mb-0 copyright-text">&copy; 2025 All Rights Reserved</p>
				<div class="d-flex gap-4">
					<a href="privacy-policy" class="text-decoration-none link-hover-animation-1 copyright-text" aria-label="Privacy">Privacy Policy</a>
					<a href="terms-conditions" class="text-decoration-none link-hover-animation-1 copyright-text" aria-label="Terms">Terms & Conditions</a>
				</div>
				<div class="d-flex gap-4">
					<p class="mb-0 copyright-text"></span>Tech & Design Partner <a href="https://wegeni.com/" class="text-decoration-none link-hover-animation-1 copyright-text" aria-label="Terms" style="color:#e0aa3e;"><b>WeGeni</b></a></p>

				</div>
			</div>
    </div> <!-- End inner-container -->
  </div> <!-- End auto-container -->
<style>
  .copyright-text {
    color: rgb(85, 85, 85);
}

  .footer-bottom {
    border-top: 1px solid rgba(255, 255, 255, 0.15);
    padding: 15px 0;
}

.footer-bottom-inner {
    gap: 15px;
}

.footer-partner,
.main-footer_copyright {
    font-size: 14px;
    color: #ffffff;
}

.footer-partner a {
    color: #f7a400;
    text-decoration: none;
    font-weight: 600;
}

.footer-partner a:hover {
    text-decoration: underline;
}

.footer-bottom_navs {
    list-style: none;
    padding: 0;
    margin: 0;
    gap: 20px;
}

.footer-bottom_navs li a {
    color: #ffffff;
    font-size: 14px;
    text-decoration: none;
}

.footer-bottom_navs li a:hover {
    color: #f7a400;
}

/* 📱 Mobile view */
@media (max-width: 768px) {
    .footer-bottom-inner {
        flex-direction: column;
        text-align: center;
    }
}
.footer-list li a {
    text-decoration: none;
}
/* 3rd column (Services) only */
.col-lg-3:nth-child(3) .footer-list {
    margin-left: -30px;
}
.footer-subscription a {
    color: #ffffff;          /* normal white */
    text-decoration: none;   /* underline remove */
}

.footer-subscription a:hover {
    color: #f7a400;          /* hover yellow */
}
.footer-subscription svg {
    fill: #ffffff;
}
.footer-subscription li:nth-child(2),
.footer-subscription li:nth-child(3) {
    margin-left: -8px;   
}

.footer-social_box a {
    width: 40px;
    height: 40px;
    display: inline-flex;
    align-items: center;
    justify-content: center;

    border-radius: 50%;          /* 👈 circle */
    background-color: #ffffff;  /* optional */
    color: #000000;

    margin-right: 8px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.footer-social_box a:hover {
    background-color: #f7a400;  /* hover yellow */
    color: #ffffff;
}

</style>
</footer>
