<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

?>



<div class="col-lg-4 col-xl-3">
    <div class="inset-lg-left-15 inset-lg-right-10">
        <div class="row">
            <div class="col-md-6 col-lg-12">
                <form class="rd-search rd-search-classic" action="<?php echo home_url('/') ?>" method="get">
                    <div class="form-wrap">
                        <!-- <label class="form-label" for="rd-search-form-input-1">Search...</label> -->
                        <input placeholder="Search...." class="form-input" value="<?php
                                                                                    echo get_search_query()
                                                                                    ?>" id="rd-search-form-input-1" type="search" name="s">
                    </div>
                    <button class="rd-search-submit" type="submit"></button>
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
                    <h6 class="text-uppercase">Popular posts</h6>
                    <div class="offset-top-30">
                        <article class="post post-preview offset-top-15"><a href="blog-post.html">
                                <div class="unit unit-horizontal unit-spacing-sm">
                                    <div class="unit-left">
                                        <figure class="post-image"><img src="images/post-preview-1-70x70.jpg" alt="" width="70" height="70" />
                                        </figure>
                                    </div>
                                    <div class="unit-body">
                                        <div class="post-header">
                                            <p class="inset-lg-right-10">A Guide to Boat Insurance Coverage</p>
                                        </div>
                                        <div class="post-meta">
                                            <ul class="list-meta">
                                                <li>
                                                    <time datetime="2018-02-04">Feb 4, 2018</time>
                                                </li>
                                                <li>1 Comment</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </a></article>
                        <article class="post post-preview offset-top-15"><a href="blog-post.html">
                                <div class="unit unit-horizontal unit-spacing-sm">
                                    <div class="unit-left">
                                        <figure class="post-image"><img src="images/post-preview-2-70x70.jpg" alt="" width="70" height="70" />
                                        </figure>
                                    </div>
                                    <div class="unit-body">
                                        <div class="post-header">
                                            <p class="inset-lg-right-10">What Wedding Insurance Do I Need?</p>
                                        </div>
                                        <div class="post-meta">
                                            <ul class="list-meta">
                                                <li>
                                                    <time datetime="2018-02-04">Feb 4, 2018</time>
                                                </li>
                                                <li>1 Comment</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </a></article>
                        <article class="post post-preview offset-top-15"><a href="blog-post.html">
                                <div class="unit unit-horizontal unit-spacing-sm">
                                    <div class="unit-left">
                                        <figure class="post-image"><img src="images/post-preview-3-70x70.jpg" alt="" width="70" height="70" />
                                        </figure>
                                    </div>
                                    <div class="unit-body">
                                        <div class="post-header">
                                            <p class="inset-lg-right-10">Business Insurance for Festivals, Fairs &amp; Parties</p>
                                        </div>
                                        <div class="post-meta">
                                            <ul class="list-meta">
                                                <li>
                                                    <time datetime="2018-02-04">Feb 4, 2018</time>
                                                </li>
                                                <li>1 Comment</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </a></article>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-12 offset-top-50 sideber-cus">
                <h6 class="text-uppercase">Twitter feed</h6>
                <div class="twitter offset-top-30" data-twitter-username="templatemonster">
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
                </div>
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