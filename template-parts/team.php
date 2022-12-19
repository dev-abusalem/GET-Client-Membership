<div class="col-sm-6 col-md-4 col-lg-3">
    <div class="thumbnail-variant-2-wrap">
        <div class="thumbnail thumbnail-variant-2">
            <figure class="thumbnail-image"><img src="<?php echo get_the_post_thumbnail_url() ?>" alt="" width="246" height="300" style="width:246px; height:300px" />
            </figure>
            <div class="thumbnail-inner">
                <!-- Let's show our custom fields here -->
                <?php if (get_post_meta($post->ID, 'testimonial_getclientmememail', true)) : ?>
                    <div class="link-group"><span class="icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href="mailto: <?php echo get_post_meta($post->ID, 'testimonial_getclientmememail', true) ?>"> <?php echo get_post_meta($post->ID, 'testimonial_getclientmememail', true) ?></a></div>

                <?php endif ?>


                <?php if (get_post_meta($post->ID, 'testimonial_getclientmemphone', true)) : ?>
                    <div class="link-group"><span class="icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href="tel: <?php echo get_post_meta($post->ID, 'testimonial_getclientmemphone', true) ?>"> <?php echo get_post_meta($post->ID, 'testimonial_getclientmemphone', true) ?></a></div>
                <?php endif ?>
                <!-- End showing our custom fields here -->
            </div>
            <div class="thumbnail-caption">
                <p class="text-header"><a href=""><?php the_title() ?></a></p>
                <div class="divider divider-md"></div>
                <p class="text-caption"><?php echo wp_trim_words(get_the_content(), 15, '...'); ?>
                </p>
            </div>
        </div>
    </div>
</div>