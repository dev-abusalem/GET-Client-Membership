<div class="swiper-slide" data-slide-bg="<?php the_post_thumbnail_url() ?>">
    <div class="swiper-slide-caption">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="0s"><span class="sub-head"><?php the_title() ?></span></h2>
                    <p class="text-big slider-text text-black" data-caption-animate="fadeInUp" data-caption-delay="100"><?php the_content() ?></p>
                    <a class="btn btn-icon btn-icon-right btn-cello btn-custom" data-caption-animate="fadeInUp" data-caption-delay="250" target="_blank" href="<?php echo get_post_meta(get_the_ID(), 'slider_btn_url', true) ?>">
                        <span class="icon icon-xs-smaller fa-angle-right"></span><?php echo get_post_meta(get_the_ID(), 'slider_btn', true) ?></a>
                </div>
            </div>
        </div>
    </div>
</div>