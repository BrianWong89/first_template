<?php
$title = "";
$page = "index";
require("quiz_header.php");
?>

    <section id="page-title">

        <div class="container clearfix">
            <div class="fb-like" data-href="http://localhost/first_template/quiz-you/Package-HTML/HTML/quiz_index.php"
                 data-layout="standard" data-action="like" data-size="small" data-show-faces="true"
                 data-share="true"></div>
        </div>
<br>
        <div class="container clearfix">
            <select class="selectpicker" data-width="fit">
                <option data-content='<span class="flag-icon flag-icon-us"></span> English'>English</option>
                <option data-content='<span class="flag-icon flag-icon-mx"></span> Español'>Español</option>
            </select>
        </div>

    </section>

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

        <div class="content-wrap">

            <div class="container clearfix">

                <div id="posts" class="post-grid grid-container grid-3 clearfix" data-layout="fitRows">

                    <div class="entry clearfix">
                        <div class="entry-image">
                            <a href="quiz_halloween.php"><img src="images/mock-up box.png" alt="Mock-up box"></a>
                        </div>
                    </div>
                    <div class="entry clearfix">
                        <div class="entry-image">
                            <img src="images/mock-up box.png" alt="Mock-up box">
                        </div>
                    </div>
                    <div class="entry clearfix">
                        <div class="entry-image">
                            <img src="images/mock-up box.png" alt="Mock-up box">
                        </div>
                    </div>
                    <div class="entry clearfix">
                        <div class="entry-image">
                            <img src="images/mock-up box.png" alt="Mock-up box">
                        </div>
                    </div>
                    <div class="entry clearfix">
                        <div class="entry-image">
                            <img src="images/mock-up box.png" alt="Mock-up box">
                        </div>
                    </div>
                    <div class="entry clearfix">
                        <div class="entry-image">
                            <img src="images/mock-up box.png" alt="Mock-up box">
                        </div>
                    </div>
                    <div class="entry clearfix">
                        <div class="entry-image">
                            <img src="images/mock-up box.png" alt="Mock-up box">
                        </div>
                    </div>
                    <div class="entry clearfix">
                        <div class="entry-image">
                            <img src="images/mock-up box.png" alt="Mock-up box">
                        </div>
                    </div>
                    <div class="entry clearfix">
                        <div class="entry-image">
                            <img src="images/mock-up box.png" alt="Mock-up box">
                        </div>
                    </div>

                </div>

                <ul class="pager nomargin">
                    <li class="previous"><a href="#">&larr; Older</a></li>
                    <li class="next"><a href="#">Newer &rarr;</a></li>
                </ul>

            </div>

        </div>

    </section><!-- #content end -->

<?php
require("quiz_footer.php");
?>