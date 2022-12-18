<?php get_header(); ?>


<section>
    <div class="swiper-container swiper-slider swiper-variant-1" data-loop="false" data-autoplay="false" data-simulate-touch="true">
        <div class="swiper-wrapper">

            <?php
            $args = array('post_type'           => 'slider');
            // The Query
            $the_query = new WP_Query($args);

            // The Loop


            while ($the_query->have_posts()) :
                $the_query->the_post();
                get_template_part('template-parts/slider');

            endwhile;


            wp_reset_postdata();
            ?>

        </div>
        <div class="swiper-scrollbar"></div>
        <div class="swiper-nav-wrap">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>



<section class="section-50 bg-whisper-1 section-lg-75 section-lg-90 section-xl-100">
    <div class="container">
        <div class="row align-items-lg-center">

            <div class="col-lg-6">
                <div class="video-wrap">
                    <figure class="overlay-5"><img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/images/home-04-571x378.jpg" width="571" height="378" alt=""></figure><a class="link-circle link-white" data-lightbox="iframe" href="https://www.youtube.com/watch?v=1UWpbtUupQQ"><span class="icon icon-xl fl-36-slim-icons-play90"></span></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="inset-xl-left-70 inset-xl-right-70">
                    <h2><span class="sub-head-small"><?php echo get_theme_mod('home_about_title_section_update') ?></span></h2>
                    <p class="text-cello"><?php echo get_theme_mod('home_about_description_section_update') ?></p>
                    <div class="row text-cello">
                        <div class="col-md-7">
                            <ul class="list-marked-dotted">

                                <?php
                                wp_nav_menu(array(
                                    'menu'                 => 'Home About Menu',
                                    'container'            => '',
                                    'container_class'      => '',
                                    'container_id'         => '',
                                    'container_aria_label' => '',
                                    'menu_class'           => '',
                                    'menu_id'              => '',
                                    'echo'                 => true,
                                    'fallback_cb'          => false,
                                    'before'               => '',
                                    'after'                => '',
                                    'link_before'          => '',
                                    'link_after'           => '',
                                    'items_wrap'           => '<ul id="%1$s" class="list-marked-dotted %2$s">%3$s</ul>',
                                    'item_spacing'         => 'preserve',
                                    'depth'                => 0,
                                    'walker'               => '',
                                    'theme_location'       => 'home-about-menu',
                                ));

                                ?>
                            </ul>
                        </div>

                    </div>

                    <?php
                    if (get_theme_mod('home_about_button_URL_update')) :
                    ?>
                        <div class="button-block"><a class="btn btn-icon btn-icon-right btn-cello-outline btn-custom" data-caption-animate="fadeInUp" data-caption-delay="250" href="<?php echo get_theme_mod('home_about_button_URL_update') ?>"><span class="icon icon-xs-smaller fa-angle-right"></span><?php echo get_theme_mod('home_about_button_section_update') ?></a></div>
                </div>
            <?php
                    endif;
            ?>


            </div>



        </div>
    </div>
</section>






<section class="section-60 section-md-100 bg-gray-dark bg-image overlay-5" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/bg-image-6.jpg');">
    <div class="container">
        <div class="row row-40">
            <div class="col-sm-6 col-md-3">
                <div class="box-counter box-counter-inverse box-counter-white">
                    <figure><img src="<?php echo get_template_directory_uri() ?>/images/icon-01.png" width="53" height="50" alt=""></figure>
                    <div class="text-large counter">1450</div>
                    <h5 class="box-header text-white">Happy Clients</h5>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="box-counter box-counter-inverse box-counter-white">
                    <figure><img src="<?php echo get_template_directory_uri() ?>/images/icon-02.png" width="41" height="43" alt=""></figure>
                    <div class="text-large counter">23</div>
                    <h5 class="box-header">Insurance Products</h5>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="box-counter box-counter-inverse box-counter-white">
                    <figure><img src="<?php echo get_template_directory_uri() ?>/images/icon-03.png" width="52" height="53" alt=""></figure>
                    <div class="text-large counter">10</div>
                    <h5 class="box-header">Years of Experience</h5>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="box-counter box-counter-inverse box-counter-white">
                    <figure><img src="<?php echo get_template_directory_uri() ?>/images/icon-04.png" width="55" height="46" alt=""></figure>
                    <div class="text-large counter">196</div>
                    <h5 class="box-header">Professional Agents</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-50 section-md-75 section-lg-bottom-90">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2><span class="sub-head-small">Meet Our Team</span></h2>
            </div>
        </div>
        <div class="row row-40">

            <?php
            $args = array('post_type'           => 'team');
            // The Query
            $the_query = new WP_Query($args);

            // The Loop


            while ($the_query->have_posts()) :
                $the_query->the_post();
                get_template_part('template-parts/team');

            endwhile;


            wp_reset_postdata();
            ?>

        </div>
    </div>
</section>


<section class="section parallax-container context-dark bg-black bg-image overlay-8" data-parallax-img="<?php echo get_template_directory_uri() ?>/images/clients-testimonials-parallax-1.jpg">
    <div class="parallax-content">
        <div class="section-60 section-md-90">
            <div class="container text-center">
                <div class="row justify-content-lg-center row-40">
                    <div class="col-sm-12">
                        <h2><span class="sub-head-small">Testimonials</span></h2>
                    </div>
                    <div class="col-lg-11 col-xl-9">
                        <div class="owl-carousel-inverse">
                            <div class="owl-carousel owl-nav-position-numbering" data-items="1" data-stage-padding="0" data-loop="false" data-margin="30" data-nav="true" data-numbering="#owl-numbering-1" data-animation-in="fadeIn" data-animation-out="fadeOut">





                                <?php
                                $args = array('post_type'           => 'testimonial');
                                // The Query
                                $the_query = new WP_Query($args);

                                // The Loop


                                while ($the_query->have_posts()) :
                                    $the_query->the_post();
                                    get_template_part('template-parts/testimonials');

                                endwhile;


                                wp_reset_postdata();
                                ?>



                            </div>
                            <div class="owl-numbering owl-numbering-default" id="owl-numbering-1">
                                <div class="numbering-current"></div>
                                <div class="numbering-separator"></div>
                                <div class="numbering-count"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Testimonials Section -->




<!-- <section class="section-60 section-md-90 bg-athens-gray bg-image bg-image-md-hide" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/home-bg-image-1.jpg');">
    <div class="container">
        <div class="row justify-content-md-end">
            <div class="col-lg-7 col-xl-7">
                <div class="tabs-custom tabs-horizontal tabs-line tabs-custom-horizontal" id="tabs-3">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" href="#tabs-3-1" data-toggle="tab">LIFE
                                INSURANCE</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tabs-3-2" data-toggle="tab">TRAVEL INSURANCE</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#tabs-3-3" data-toggle="tab">HOUSE INSURANCE</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#tabs-3-4" data-toggle="tab">CAR INSURANCE</a>
                        </li>
                    </ul>
                    <div class="tab-content text-black">
                        <div class="tab-pane fade show active" id="tabs-3-1">
                            <h2><span class="sub-head-small">Life Insurance Quote</span></h2>
                            <div class="rd-range-wrap"><span class="rd-range-label">Level of protection:</span>
                                <div class="rd-range-input-value-3"></div>
                                <div class="rd-range" data-min="1" data-max="1000" data-start="[150]" data-step="1" data-min-diff="10" data-input=".rd-range-input-value-3"></div>
                            </div>
                            <h6 class="text-spacing-0 font-default">Personal information:</h6>
                            <form class="inset-xl-right-50 rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                                <div class="row justify-content-sm-center justify-content-md-start row-20 row-md-60">
                                    <div class="col-md-6">
                                        <div class="form-wrap form-wrap-outside">

                                            <select class="form-input select-filter" id="index-business" data-minimum-results-for-search="Infinity">
                                                <option value="1">Do you smoke?</option>
                                                <option value="2">Yes</option>
                                                <option value="3">No</option>
                                            </select>
                                            <label class="form-label form-wrap-outside veil" for="index-business">Do you
                                                smoke?</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap form-wrap-outside">

                                            <select class="form-input select-filter" id="index-residence" data-minimum-results-for-search="Infinity">
                                                <option value="1">Your age</option>
                                                <option value="2">18 - 20</option>
                                                <option value="3">21 - 25</option>
                                                <option value="3">26 - 36</option>
                                                <option value="3">37 - 48</option>
                                                <option value="3">49 - 55</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-20">
                                    <div class="col-md-12">
                                        <h6 class="text-spacing-0 font-default">Contact details:</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap form-wrap-outside">
                                            <input class="form-input bg-whisper-lighten border-radius-0" id="contact-name" type="text" name="name" data-constraints="@Required">
                                            <label class="form-label" for="contact-name">Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap form-wrap-outside">
                                            <input class="form-input bg-whisper-lighten border-radius-0" id="contact-phone" type="text" name="phone" data-constraints="@Required @Numeric">
                                            <label class="form-label" for="contact-phone">Phone</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap form-wrap-outside">
                                            <input class="form-input bg-whisper-lighten border-radius-0" id="contact-email" type="text" name="email" data-constraints="@Email @Required">
                                            <label class="form-label" for="contact-email">E-mail</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn btn-icon btn-icon-right btn-primary-contrast btn-custom btn-block" type="submit"><span>Get a Quote</span><span class="icon icon-xs-smaller fa-angle-right"></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="tabs-3-2">
                            <h2><span class="sub-head-small">Travel Insurance Quote</span></h2>
                            <div class="rd-range-wrap"><span class="rd-range-label">Level of protection:</span>
                                <div class="rd-range-input-value-3"></div>
                                <div class="rd-range" data-min="1" data-max="1000" data-start="[150]" data-step="1" data-min-diff="10" data-input=".rd-range-input-value-3"></div>
                            </div>
                            <h6 class="text-spacing-0 font-default">Travel information:</h6>
                            <form class="inset-xl-right-50 rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                                <div class="row justify-content-sm-center justify-content-md-start row-20 row-md-60">
                                    <div class="col-md-6">
                                        <div class="form-wrap form-wrap-outside">

                                            <select class="form-input select-filter" id="travel-distance" data-minimum-results-for-search="Infinity">
                                                <option value="1">Destination</option>
                                                <option value="2">10km</option>
                                                <option value="3">100km</option>
                                                <option value="3">500km</option>
                                                <option value="3">1000km</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap form-wrap-outside">

                                            <select class="form-input select-filter" id="travel-time" data-minimum-results-for-search="Infinity">
                                                <option value="1">Duration</option>
                                                <option value="2">5 days</option>
                                                <option value="3">10 days</option>
                                                <option value="3">15 days</option>
                                                <option value="3">20 days</option>
                                                <option value="3">25 days</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-20">
                                    <div class="col-md-12">
                                        <h6 class="text-spacing-0 font-default">Contact details:</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap form-wrap-outside">
                                            <input class="form-input bg-whisper-lighten border-radius-0" id="travel-contact-name" type="text" name="name" data-constraints="@Required">
                                            <label class="form-label" for="travel-contact-name">Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap form-wrap-outside">
                                            <input class="form-input bg-whisper-lighten border-radius-0" id="travel-contact-phone" type="text" name="phone" data-constraints="@Required @Numeric">
                                            <label class="form-label" for="travel-contact-phone">Phone</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap form-wrap-outside">
                                            <input class="form-input bg-whisper-lighten border-radius-0" id="travel-contact-email" type="text" name="email" data-constraints="@Email @Required ">
                                            <label class="form-label" for="travel-contact-email">E-mail</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn btn-icon btn-icon-right btn-primary-contrast btn-custom btn-block" type="submit"><span>Get a Quote</span><span class="icon icon-xs-smaller fa-angle-right"></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="tabs-3-3">
                            <h2><span class="sub-head-small">House insurance Quote</span></h2>
                            <h6 class="text-spacing-0 font-default">Your house:</h6>
                            <form class="inset-xl-right-50 rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                                <div class="row justify-content-sm-center justify-content-md-start row-20">
                                    <div class="col-md-6">
                                        <div class="form-wrap form-wrap-outside">

                                            <select class="form-input select-filter" id="house-property" data-minimum-results-for-search="Infinity">
                                                <option value="1">What sort of property is it?</option>
                                                <option value="2">Property</option>
                                                <option value="3">Rent</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap form-wrap-outside">

                                            <select class="form-input select-filter" id="house-type" data-minimum-results-for-search="Infinity">
                                                <option value="1">What type of property is it?</option>
                                                <option value="2">House</option>
                                                <option value="3">Apartment</option>
                                                <option value="3">Cottage</option>
                                                <option value="3">Factory</option>
                                                <option value="3">Stock</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap form-wrap-outside">

                                            <select class="form-input select-filter" id="house-built" data-minimum-results-for-search="Infinity">
                                                <option value="1">When was it built?</option>
                                                <option value="2">1 year</option>
                                                <option value="3">3 year</option>
                                                <option value="3">5 year</option>
                                                <option value="3">10 year</option>
                                                <option value="3">20 year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap form-wrap-outside">
                                            <input class="form-input bg-whisper-lighten border-radius-0" id="house-post-code" type="text" name="name" data-constraints="@Required ">
                                            <label class="form-label" for="house-post-code">House Postcode</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-20">
                                    <div class="col-md-12">
                                        <h6 class="text-spacing-0 font-default">Contact details:</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap form-wrap-outside">
                                            <input class="form-input bg-whisper-lighten border-radius-0" id="house-contact-name" type="text" name="name" data-constraints="@Required">
                                            <label class="form-label" for="house-contact-name">Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap form-wrap-outside">
                                            <input class="form-input bg-whisper-lighten border-radius-0" id="house-contact-phone" type="text" name="phone" data-constraints="@Required @Numeric">
                                            <label class="form-label" for="house-contact-phone">Phone</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap form-wrap-outside">
                                            <input class="form-input bg-whisper-lighten border-radius-0" id="house-contact-email" type="text" name="email" data-constraints="@Email @Required ">
                                            <label class="form-label" for="house-contact-email">E-mail</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn btn-icon btn-icon-right btn-primary-contrast btn-custom btn-block" type="submit"><span>Get a Quote</span><span class="icon icon-xs-smaller fa-angle-right"></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="tabs-3-4">
                            <h2><span class="sub-head-small">Car Insurance Quote</span></h2>
                            <h6 class="text-spacing-0 font-default">Personal information:</h6>
                            <form class="inset-xl-right-50 rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                                <div class="row justify-content-sm-center justify-content-md-start row-20">
                                    <div class="col-md-6">
                                        <div class="form-wrap form-wrap-outside">

                                            <select class="form-input select-filter" id="car-property" data-minimum-results-for-search="Infinity">
                                                <option value="1">Country</option>
                                                <option value="2">USA</option>
                                                <option value="3">Europe</option>
                                                <option value="3">Asia</option>
                                                <option value="3">Africa</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap form-wrap-outside">

                                            <select class="form-input select-filter" id="car-type" data-minimum-results-for-search="Infinity">
                                                <option value="1">Car Manufacturer</option>
                                                <option value="2">BMW</option>
                                                <option value="3">Citroen</option>
                                                <option value="3">Honda</option>
                                                <option value="3">Ford</option>
                                                <option value="3">FIAT</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap form-wrap-outside">

                                            <select class="form-input select-filter" id="car-built" data-minimum-results-for-search="Infinity">
                                                <option value="1">Registration year</option>
                                                <option value="2">1900+</option>
                                                <option value="3">2000+</option>
                                                <option value="3">2010+</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap form-wrap-outside">

                                            <select class="form-input select-filter" id="car-yers" data-minimum-results-for-search="Infinity">
                                                <option value="1">Your age</option>
                                                <option value="2">18-22</option>
                                                <option value="3">23-28</option>
                                                <option value="3">29-36</option>
                                                <option value="3">37-48</option>
                                                <option value="3">49-56</option>
                                                <option value="3">57+</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-20">
                                    <div class="col-md-12">
                                        <h6 class="text-spacing-0 font-default">Contact details:</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap form-wrap-outside">
                                            <input class="form-input bg-whisper-lighten border-radius-0" id="car-contact-name" type="text" name="name" data-constraints="@Required">
                                            <label class="form-label" for="car-contact-name">Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap form-wrap-outside">
                                            <input class="form-input bg-whisper-lighten border-radius-0" id="car-contact-phone" type="text" name="phone" data-constraints="@Required @Numeric">
                                            <label class="form-label" for="car-contact-phone">Phone</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap form-wrap-outside">
                                            <input class="form-input bg-whisper-lighten border-radius-0" id="car-contact-email" type="text" name="email" data-constraints="@Email @Required ">
                                            <label class="form-label" for="car-contact-email">E-mail</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn btn-icon btn-icon-right btn-primary-contrast btn-custom btn-block" type="submit"><span>Get a Quote</span><span class="icon icon-xs-smaller fa-angle-right"></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->






<section class="section-50 section-md-90 section-md-bottom-100">
    <div class="container text-center">
        <h2><span class="sub-head-small">Latest News</span></h2>
        <div class="row justify-content-sm-center row-40">


            <!-- Testimonials Section -->

            <?php
            $args = array('post_type'           => 'post');
            // The Query
            $the_query = new WP_Query($args);

            // The Loop


            while ($the_query->have_posts()) :
                $the_query->the_post(); ?>

                <div class="col-sm-8 col-md-5 col-xl-3">
                    <div class="post-boxed d-xl-inline-block">
                        <div class="post-boxed-img-wrap"><a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url() ?>" alt="" style="width:268px; height=182px" width="268" height="182"></a></div>
                        <div class="post-boxed-caption">
                            <div class="post-boxed-title font-weight-bold"><a href="<?php the_permalink() ?>">
                                    <?php the_title() ?>
                                </a></div>
                            <ul class="list-inline list-inline-dashed text-uppercase font-accent">
                                <li><?php the_date() ?></li>
                                <li><span>by <a class="text-primary" href="#">ADMIN</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>



            <?php

            endwhile;


            wp_reset_postdata();
            ?>





        </div>
    </div>
</section>
<section class="section-30 bg-whisper-1">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="link-image-wrap"><a class="link-image" href="#"><img src="<?php echo get_template_directory_uri() ?>/images/clients-1-126x68.png" alt="" width="126" height="68" /></a></div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="link-image-wrap"><a class="link-image" href="#"><img src="<?php echo get_template_directory_uri() ?>/images/clients-2-126x100.png" alt="" width="126" height="100" /></a></div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="link-image-wrap"><a class="link-image" href="#"><img src="<?php echo get_template_directory_uri() ?>/images/clients-4-169x68.png" alt="" width="169" height="68" /></a></div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="link-image-wrap"><a class="link-image" href="#"><img src="<?php echo get_template_directory_uri() ?>/images/clients-6-138x55.png" alt="" width="138" height="55" /></a></div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>