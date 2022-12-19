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
                    <figure class="overlay-5"><img class="img-responsive" src="<?php echo get_theme_mod('home_about_overlay_image_url_update') ?>" width="571" height="378" style="width:571px; height:378px" alt=""></figure><a class="link-circle link-white" data-lightbox="iframe" href="<?php echo get_theme_mod('home_about_video_url_update') ?>"><span class="icon icon-xl fl-36-slim-icons-play90"></span></a>
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
                                    'items_wrap'           => '<ul id="%1$s" class="list-marked-dotted about_menu %2$s">%3$s</ul>',
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
                                <li><?php echo get_the_date() ?></li>
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
<!-- <section class="section-30 bg-whisper-1">
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
</section> -->
<?php get_footer(); ?>