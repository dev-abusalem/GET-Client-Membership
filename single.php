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
                                    <dd><?php the_author() ?></dd>
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
                            <li><a class="icon icon-xxs-small link-tundora fa-facebook" href="#"></a></li>
                            <li><a class="icon icon-xxs-small link-tundora fa-twitter" href="#"></a></li>
                            <li><a class="icon icon-xxs-small link-tundora fa-google-plus" href="#"></a></li>
                            <li><a class="icon icon-xxs-small link-tundora fa-pinterest-p" href="#"></a></li>
                        </ul>
                    </div>
                </article>
                <div class="divider-fullwidth bg-gray-lighter"></div>



                <!-- <div class="post-comment-block">
                    <h4>3 Comments</h4>
                    <div class="comment-list inset-md-right-60 inset-lg-right-30 inset-xl-right-100 offset-top-30">
                        <div class="comment-group">
                            <article class="comment">
                                <div class="unit unit-spacing-md unit-xs-horizontal">
                                    <div class="unit-left">
                                        <figure><img src="images/post-2-70x71.jpg" alt="" width="70" height="71" />
                                        </figure>
                                    </div>
                                    <div class="unit-body">
                                        <div class="comment-body">
                                            <div class="comment-body-header">
                                                <div class="comment-meta">
                                                    <p class="user">Jill Peterson</p>
                                                    <ul class="list-inline list-icon-meta">
                                                        <li><a class="link-group link-group-baseline" href="#"><span class="icon icon-xxs-smaller icon-dusty-gray mdi mdi-thumb-up-outline"></span><span>Like</span></a></li>
                                                        <li><a class="link-group" href="#"><span class="icon icon-xxs-smaller icon-dusty-gray mdi mdi-comment-outline"></span><span>Reply</span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="comment-time">
                                                    <div class="object-inline">
                                                        <time datetime="2018-02-16">Feb 16, 7:42 PM</time><span class="icon icon-xxs-smaller icon-dusty-gray mdi mdi-clock"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-body-text">
                                                <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima tempora id labore obcaecati facilis eveniet, earum, temporibus reiciendis sed sapiente nemo, nulla itaque voluptatem repellat et in ipsam neque a!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <div class="comment-group-reply">
                                <article class="comment">
                                    <div class="unit unit-spacing-md unit-xs-horizontal">
                                        <div class="unit-left">
                                            <figure><img src="images/post-3-70x71.jpg" alt="" width="70" height="71" />
                                            </figure>
                                        </div>
                                        <div class="unit-body">
                                            <div class="comment-body">
                                                <div class="comment-body-header">
                                                    <div class="comment-meta">
                                                        <p class="user">John doe</p>
                                                        <ul class="list-inline list-icon-meta">
                                                            <li><a class="link-group link-group-baseline" href="#"><span class="icon icon-xxs-smaller icon-dusty-gray mdi mdi-thumb-up-outline"></span><span>Like</span></a></li>
                                                            <li><a class="link-group" href="#"><span class="icon icon-xxs-smaller icon-dusty-gray mdi mdi-comment-outline"></span><span>Reply</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="comment-time">
                                                        <div class="object-inline">
                                                            <time datetime="2018-02-16">Feb 16, 7:42 PM</time><span class="icon icon-xxs-smaller icon-dusty-gray mdi mdi-clock"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comment-body-text">
                                                    <p class="text-black">Beatae voluptatum nihil, praesentium, fugiat tempore accusamus distinctio explicabo numquam molestias sit est assumenda laudantium dignissimos ullam labore quae repudiandae sint, omnis, voluptatem deserunt alias temporibus. Neque, exercitationem minus enim!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="comment-group">
                            <article class="comment">
                                <div class="unit unit-spacing-md unit-xs-horizontal">
                                    <div class="unit-left">
                                        <figure><img src="images/post-4-70x71.jpg" alt="" width="70" height="71" />
                                        </figure>
                                    </div>
                                    <div class="unit-body">
                                        <div class="comment-body">
                                            <div class="comment-body-header">
                                                <div class="comment-meta">
                                                    <p class="user">Kate Smith</p>
                                                    <ul class="list-inline list-icon-meta">
                                                        <li><a class="link-group link-group-baseline" href="#"><span class="icon icon-xxs-smaller icon-dusty-gray mdi mdi-thumb-up-outline"></span><span>Like</span></a></li>
                                                        <li><a class="link-group" href="#"><span class="icon icon-xxs-smaller icon-dusty-gray mdi mdi-comment-outline"></span><span>Reply</span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="comment-time">
                                                    <div class="object-inline">
                                                        <time datetime="2018-02-16">Feb 16, 7:42 PM</time><span class="icon icon-xxs-smaller icon-dusty-gray mdi mdi-clock"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-body-text">
                                                <p class="text-black">Sequi qui itaque est eligendi ea, error deserunt sed! Itaque ipsum, in beatae unde ullam iste aut. Beatae distinctio sed voluptatum reiciendis nam facere maxime sunt voluptatibus, saepe ad alias.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="post-comment-form offset-top-40 offset-sm-top-60">
                    <h4>Leave a comment</h4>
                    <div class="inset-md-right-60 inset-lg-right-30 inset-xl-right-100 offset-top-15">
                        <form class="rd-mailform form-classic form-classic-bordered label-outside">
                            <div class="form-wrap">
                                <label class="form-label-outside text-black" for="comment-message">Message:</label>
                                <textarea class="form-input" id="comment-message" name="message" data-constraints="@Required"></textarea>
                            </div>
                            <button class="btn btn-primary" type="submit" style="min-width: 200px;">Submit</button>
                        </form>
                    </div>
                </div> -->

                <?php comments_template('/template-parts/template-parts'); ?>


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