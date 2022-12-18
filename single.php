<?php
get_header()
?>


<section class="section-30 section-md-40 section-lg-120 bg-gray-dark page-title-wrap overlay-5" style="background-image: url('<?php the_post_thumbnail_url() ?>');">
    <div class="container">
        <div class="page-title text-center">
            <h2><?php the_title() ?></h2>
        </div>
    </div>
</section>

<section class="section-60 section-md-75 section-xl-90">
    <div class="container">
        <div class="row row-50">
            <div class="col-lg-8 col-xl-9">
                <article class="post post-single">
                    <div class="post-image">
                        <figure>
                            <?php

                            if (has_post_thumbnail()) :
                                the_post_thumbnail('large');

                            endif;

                            ?>
                        </figure>
                    </div>
                    <div class="post-header">
                        <h4 class="text-spacing--25"><?php the_title() ?></h4>
                    </div>
                    <div class="post-meta">
                        <ul class="list-bordered-horizontal">
                            <li>
                                <dl class="list-terms-inline">
                                    <dt>Date</dt>
                                    <dd>
                                        <time datetime="2018-01-22"><?php the_time('F d Y') ?></time>
                                    </dd>
                                </dl>
                            </li>
                            <li>
                                <dl class="list-terms-inline">
                                    <dt>Posted by</dt>
                                    <span><?php
                                            $author_id = get_the_author_meta('ID');

                                            echo get_the_author_meta('nicename', $author_id);


                                            ?></span>
                                </dl>
                            </li>
                            <li>
                                <dl class="list-terms-inline">
                                    <dt>Comments</dt>
                                    <dd><?php wp_count_comments() ?></dd>
                                </dl>
                            </li>
                            <li>
                                <dl class="list-terms-inline">
                                    <dt>Category</dt>
                                    <dd><?php the_category() ?></dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div class="divider-fullwidth bg-gray-light"></div>
                    <div class="post-body">
                        <p class="text-black">
                            <?php
                            echo get_the_content()
                            ?>
                        </p>
                    </div>
                    <div class="post-footer">
                        <h5>Share this post:</h5>
                        <ul class="list-inline list-inline-xs">
                            <li><a class="icon icon-xxs-small link-tundora fa-facebook" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"></a></li>
                            <li><a class="icon icon-xxs-small link-tundora fa-twitter" href="http://www.twitter.com/sharer/sharer.php?u=<?php the_permalink(); ?>"></a></li>
                            <li><a class="icon icon-xxs-small link-tundora fa-instagram" href="http://www.instagram.com/sharer/sharer.php?u=<?php the_permalink(); ?>"></a></li>
                            <li><a class="icon icon-xxs-small link-tundora fa-pinterest-p" href="http://www.pinterest.com/sharer/sharer.php?u=<?php the_permalink(); ?>"></a></li>

                        </ul>
                    </div>
                </article>
                <div class="divider-fullwidth bg-gray-lighter"></div>



                <?php comments_template('/template-parts/comments.php'); ?>


            </div>




            <?php
            get_sidebar()
            ?>
        </div>
    </div>
</section>



<?php
get_footer()
?>