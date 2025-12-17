<?php
$page_title = "Project Gallery | Orbit Forage Sarl";

$meta_description = "View Orbit Forage’s completed borehole drilling, soil testing, and geophysical survey projects across Burkina Faso. Real images of field operations and results.";

$meta_keywords = "drilling project gallery, borehole images, fieldwork Burkina Faso, forage d’eau photos, travaux géotechniques, projets de forage";
 include('layout/header.php');?>

<?php include('layout/navbar.php'); ?>

<div id="smooth-wrapper">
    <div id="smooth-content">

        <!-- Page Title -->
        <section class="page-title" style="background-image:url(assets/images/background/2.jpg)">
            <div class="auto-container">
                <h2 style="text-align: center;">Gallery</h2>
            </div>
        </section>
        <!-- End Page Title -->

        <!-- Gallery Section -->
        <section class="blog-one">
            <div class="auto-container">

                <div class="row clearfix">

                    <?php
                    $images = [
                        "1.jpg","2.jpg","3.jpg","6.jpg",
                        "1.jpg","2.jpg","3.jpg","4.jpg","19.jpg"
                    ];

                    foreach ($images as $img) {
                    ?>
                        <div class="news-block_two style-two col-lg-4 col-md-6 col-sm-12">
                            <div class="news-block_two-inner">
                                <div class="news-block_two-image_outer">
                                    <div class="news-block_two-image overlay-anim">
                                        <img src="assets/images/gallery/<?php echo $img; ?>" alt="Borewell drilling gallery image" />
                                        <img src="assets/images/gallery/<?php echo $img; ?>" alt="Borewell drilling work" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>

            </div>
        </section>
        <!-- End Gallery Section -->

        <?php include('layout/footer.php'); ?>

    </div>
</div>

<!-- Back to top -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
</div>

<!-- Scripts -->
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
<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/nav-tool.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/element-in-view.js"></script>
<script src="assets/js/color-settings.js"></script>
<script src="assets/js/script.js"></script>
