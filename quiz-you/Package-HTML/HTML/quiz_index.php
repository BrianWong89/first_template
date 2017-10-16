<?php
$title = "";
$page = "index";
require("quiz_header.php");
?>

    <section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">
        <div class="slider-parallax-inner">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide dark" style="background-image: url('images/slider/swiper/1.jpg');">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-center">
                                <h2 data-caption-animate="fadeInUp">Welcome to Quiz-You</h2>
                                <p data-caption-animate="fadeInUp" data-caption-delay="200">Find out more about yourself
                                    on Quiz-You. Whatever you want to know, we have it.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="container-fluid">
            <div class="row">
                <a href="quiz_halloween.php"><img src="images/mock-up box.png" alt="Mock-up box"></a>
                <img src="images/mock-up box.png" alt="Mock-up box">
                <img src="images/mock-up box.png" alt="Mock-up box">
            </div>
            <div class="row">
                <img src="images/mock-up box.png" alt="Mock-up box">
                <img src="images/mock-up box.png" alt="Mock-up box">
                <img src="images/mock-up box.png" alt="Mock-up box">
            </div>
            <div class="row">
                <img src="images/mock-up box.png" alt="Mock-up box">
                <img src="images/mock-up box.png" alt="Mock-up box">
                <img src="images/mock-up box.png" alt="Mock-up box">
            </div>
        </div>
    </section><!-- #content end -->

<?php
require("quiz_footer.php");
?>