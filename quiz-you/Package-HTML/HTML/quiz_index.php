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
                    <div class="swiper-slide dark">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-center">
                                <h2 data-caption-animate="fadeInUp">Relax & Unwind</h2>
                                <p data-caption-animate="fadeInUp" data-caption-delay="200">Had a bad or tiring day at
                                work? Indulge in our quizzes to brighten up your day.</p>
                            </div>
                        </div>
                        <div class="video-wrap">
                            <video id="slide-video" poster="images/videos/explore.jpg" preload="auto" loop autoplay
                                   muted>
                                <source src='images/videos/explore.webm' type='video/webm'/>
                                <source src='images/videos/explore.mp4' type='video/mp4'/>
                            </video>
                            <div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
                        </div>
                    </div>
                    <div class="swiper-slide"
                         style="background-image: url('images/slider/swiper/3.jpg'); background-position: center top;">
                        <div class="container clearfix">
                            <div class="slider-caption">
                                <h2 data-caption-animate="fadeInUp">Take a deep breath</h2>
                                <p data-caption-animate="fadeInUp" data-caption-delay="200">You'll be surprised to see
                                    what kind of stuff we have in store for you.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
                <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
            </div>

            <a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow"><i
                        class="icon-angle-down infinite animated fadeInDown"></i></a>

        </div>
    </section>

    <!-- Content
    ============================================= -->
    <section id="content">

    </section><!-- #content end -->

<?php
require("quiz_footer.php");
?>