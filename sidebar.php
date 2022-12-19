<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

?>



<div class="col-lg-4 col-xl-3">
    <div class="inset-lg-left-15 inset-lg-right-10">
        <div class="row">
            <div class="col-md-6 col-lg-12">

                <form action="<?php echo home_url('/') ?>" method="get">

                    <div class="search_box" style="display: flex;align-items:center">

                        <input name="s" value="<?php
                                                echo get_search_query()
                                                ?>" type="search" class="form-control" placeholder="Search">
                        <button style="background: transparent; border:none; outline:none; color:#009865;cursor:pointer" type="submit"><i style="margin-left:-50px" class="fa fa-search"></i></button>
                    </div>

                </form>

                <div class="offset-top-50">
                    <h6 class="text-uppercase">Categories</h6>

                    <?php

                    if (is_active_sidebar('sidebar-cat')) {
                        dynamic_sidebar('sidebar-cat');
                    }

                    ?>

                    <ul class="list-marked-bordered offset-top-15">
                        <li><a href="#"><span>Travel Insurance</span><span class="text-dusty-gray">(2)</span></a></li>
                        <li><a href="#"><span>Wedding Insurance</span><span class="text-dusty-gray">(2)</span></a></li>
                        <li><a href="#"><span>Boat Insurance</span><span class="text-dusty-gray">(4)</span></a></li>
                    </ul>
                </div>
                <div class="offset-top-50">
                    <h6 class="text-uppercase">Recent posts</h6>
                    <div class="offset-top-30">



                        <?php
                        $args = array('post_type'           => 'post');
                        // The Query
                        $the_query = new WP_Query($args);

                        // The Loop


                        while ($the_query->have_posts()) :
                            $the_query->the_post();
                        ?>


                            <article class="post post-preview offset-top-15"><a href="blog-post.html">
                                    <div class="unit unit-horizontal unit-spacing-sm">
                                        <div class="unit-left">
                                            <figure class="post-image"><img src="<?php the_post_thumbnail_url() ?>" alt="" style="width:70px;height:70px" />
                                            </figure>
                                        </div>
                                        <div class="unit-body">
                                            <div class="post-header">
                                                <p class="inset-lg-right-10"><?php the_title() ?></p>
                                            </div>
                                            <div class="post-meta">
                                                <ul class="list-meta">
                                                    <li>
                                                        <time datetime="2018-02-04"><?php the_date() ?></time>
                                                    </li>
                                                    <li>1 Comment</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </article>





                        <?php

                        endwhile;


                        wp_reset_postdata();
                        ?>



                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-12 offset-top-50 sideber-cus">

                <!-- <div class="twitter offset-top-30" data-twitter-username="templatemonster">
                    <h6 class="text-uppercase">Twitter feed</h6>
                    <div class="twitter-item twitter-item-minimal" data-twitter-type="tweet">
                        <div class="object-inline-baseline"><a class="icon icon-xxs icon-primary fa-twitter" href="#" data-url="href"></a>
                            <time data-date="text,datetime" datetime="2018-04-20"></time>
                        </div>
                        <p class="tweet-text" data-tweet="text"></p>
                        <p class="tweet-user" data-screen_name="text" data-user_name="href"></p>
                    </div>
                    <div class="twitter-item twitter-item-minimal" data-twitter-type="tweet">
                        <div class="object-inline-baseline"><a class="icon icon-xxs icon-primary fa-twitter" href="#" data-url="href"></a>
                            <time data-date="text,datetime" datetime="2018-04-20"></time>
                        </div>
                        <p class="tweet-text" data-tweet="text"></p>
                        <p class="tweet-user" data-screen_name="text" data-user_name="href"></p>
                    </div>
                    <div class="twitter-item twitter-item-minimal" data-twitter-type="tweet">
                        <div class="object-inline-baseline"><a class="icon icon-xxs icon-primary fa-twitter" href="#" data-url="href"></a>
                            <time data-date="text,datetime" datetime="2018-04-20"></time>
                        </div>
                        <p class="tweet-text" data-tweet="text"></p>
                        <p class="tweet-user" data-screen_name="text" data-user_name="href"></p>
                    </div>
                </div> -->
                <div class="offset-top-50">
                    <h6 class="text-uppercase">Tags</h6>
                    <ul class="list-tag-blocks offset-top-22">
                        <li><a class="active" href="#">Insurance</a></li>
                        <li><a href="#">travel</a></li>
                        <li><a href="#">boat</a></li>
                        <li><a href="#">life</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>