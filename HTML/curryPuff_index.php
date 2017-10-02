<?php
$title = "";
$page = "index";
require("curryPuff_header.php");
?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="img/curryPuff3.png" class="img-responsive">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-xl mb-xl">
            <div class="col-md-3">
                <img class="img-responsive mt-xl appear-animation" src="img/curryPuff1.png" alt=""
                     data-appear-animation="fadeInLeft">
            </div>
            <div class="col-md-9">
                <h2 class="mt-xl"><strong>Freshly Baked</strong> Puffs Daily</h2>
                <p>
                <div id="freshlyBakedDescription">
                </div>
            </div>
            </p>
        </div>
    </div>
    </div>
    <section class="section section-default">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2><strong>Flavours</strong> Galore</h2>
                    <p>
                        In addition to our best-selling Chicken Curry with Potato, we have other popular flavours
                        like Sardine, Beef/Mutton Rendang, Chicken Satay, Chilli Crab, etc. We strive to remain
                        up-to-date and contemporary by experimenting and coming up with new flavors generated from
                        feedback from our customers.
                    </p>
                </div>
                <div class="col-md-3">
                    <img class="hidden-xs img-responsive appear-animation"
                         src="img/curryPuff2.png" alt="" data-appear-animation="fadeInRight">
                </div>
            </div>
        </div>
    </section>

    <section class="section section-background section-text-light section-center mt-xl mb-none"
             style="background-image: url('img/parallax.jpg'); background-position: 50% -100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h2><i class="fa fa-star font-size-xs mr-xs"></i><i class="fa fa-star font-size-xs mr-xs"></i><i
                                class="fa fa-star font-size-xs mr-xs"></i><i
                                class="fa fa-star font-size-xs mr-xs"></i><i
                                class="fa fa-star font-size-xs"></i><br><strong>What Our Customers Say</strong></h2>
                    <div class="owl-carousel owl-theme nav-bottom rounded-nav mb-none"
                         data-plugin-options="{'items': 1, 'loop': false}">
                        <div>
                            <div class="col-md-12">
                                <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-none">
                                    <blockquote>
                                        <p>Rarely have I tasted such amazing and delicious curry puffs, other than
                                            the ones my mother made. These puffs definitely deserve 5-stars and 2
                                            thumbs up!
                                        </p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p><strong>Sharon, Housewife</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="col-md-12">
                                <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-none">
                                    <blockquote>
                                        <p>One thing that sets apart Brian's Curry Puff from its competitors is the
                                            amazingly fragrant and delicious filling (and generous!), to go along its
                                            savory and crispy exterior. A match made in heaven. You'd be hard-pressed
                                            to find a better curry puff in Singapore.
                                        </p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p><strong>Ah-Ken, Food Critic</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="col-md-12">
                                <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-none">
                                    <blockquote>
                                        <p>These puffs are to-die-for! My friends and I never fail to have it as a
                                            snack, at least twice a week. Moreover, it's cheaper compared to other
                                            famous puffs, which makes it even better!
                                        </p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p><strong>Jeremy, Student</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>

<?php
require("curryPuff_footer.php");
?>