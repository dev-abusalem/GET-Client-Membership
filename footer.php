<section class="section-40 section-md-75 bg-cello footer-section">
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="col-sm-9 col-md-11 col-xl-12">
                <div class="row row-50">
                    <div class="col-md-6 col-lg-10 col-xl-3">
                        <h6 class="h6 footer-title">About us</h6>
                        <?php
                        if (is_active_sidebar('footer-1')) {
                            dynamic_sidebar('footer-1');
                        }

                        ?>
                        <!-- <div class="inset-xl-right-20" style="max-width: 510px;">
                            <a class="brand brand-inverse" href="<?php site_url() ?>">
                            </a>
                            <p class="text-spacing--30 text-kashmir-blue">Shelter has been a trusted name in insurance for more than 15 years. Today, we proudly serve more than 16 million customers nationwide.</p><a class="link link-group link-group-animated link-black link-white" href="#"><span>Free Consultation</span><span class="icon icon-xxs icon-primary fa fa-angle-right"></span></a>
                        </div> -->
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <h6 class="h6 footer-title">Services</h6>
                        <div class="row">


                            <?php
                            wp_nav_menu(array(
                                'menu'                 => 'Services Menu',
                                'container'            => '',
                                'container_class'      => '',
                                'container_id'         => '',
                                'container_aria_label' => '',
                                'menu_class'           => 'list-marked-variant-2',
                                'menu_id'              => '',
                                'echo'                 => true,
                                'fallback_cb'          => false,
                                'before'               => '',
                                'after'                => '',
                                'link_before'          => '',
                                'link_after'           => '',
                                'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'item_spacing'         => 'preserve',
                                'depth'                => 0,
                                'walker'               => '',
                                'theme_location'       => 'services menu',
                            ));

                            ?>


                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <h6 class="h6 footer-title">Quick links</h6>
                        <div class="row">


                            <?php
                            wp_nav_menu(array(
                                'menu'                 => 'Quick Links Menu',
                                'container'            => '',
                                'container_class'      => '',
                                'container_id'         => '',
                                'container_aria_label' => '',
                                'menu_class'           => 'list-marked-variant-2',
                                'menu_id'              => '',
                                'echo'                 => true,
                                'fallback_cb'          => false,
                                'before'               => '',
                                'after'                => '',
                                'link_before'          => '',
                                'link_after'           => '',
                                'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'item_spacing'         => 'preserve',
                                'depth'                => 0,
                                'walker'               => '',
                                'theme_location'       => 'quick links menu',
                            ));

                            ?>


                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <h6 class="h6 footer-title">Contact us</h6>
                        <address class="contact-info text-left">
                            <div class="unit unit-horizontal unit-spacing-xs align-items-center">
                                <div class="unit-left"><span class="icon icon-xs icon-primary material-icons-phone"></span></div>
                                <div class="unit-body"><a class="link-white" href="tel:<?php echo esc_html(get_theme_mod('topbar_customize_phone')) ?>"><?php echo esc_html(get_theme_mod('topbar_customize_phone')) ?></a></div>
                            </div>
                            <div class="unit unit-horizontal unit-spacing-xs align-items-center">
                                <div class="unit-left"><span class="icon icon-xs icon-primary fa fa-envelope-o"></span></div>
                                <div class="unit-body"><a class="link-white" href="mailto:<?php echo esc_html(get_theme_mod('topbar_customize_email')) ?>"><?php echo esc_html(get_theme_mod('topbar_customize_email')) ?></a></div>
                            </div>
                            <div class="unit unit-horizontal unit-spacing-xs">
                                <div class="unit-left"><span class="icon icon-xs icon-primary material-icons-place"></span></div>
                                <div class="unit-body"><a class="link-white d-inline" href="#"><?php echo esc_html(get_theme_mod('footer_customize_location')) ?></a></div>
                            </div>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="page-foot bg-cello">
    <div class="container">
        <hr class="divider-bismark-04">
    </div>
    <section class="section-35">
        <div class="container text-center">
            <div class="row flex-row-md-reverse justify-content-md-between align-items-md-center row-15">
                <div class="col-md-6 text-md-right">
                    <div class="group-sm group-middle">
                        <p class="font-italic text-white">Follow Us:</p>
                        <ul class="list-inline list-inline-reset">

                            <?php
                            if (get_theme_mod('topbar_customize_fb')) :
                            ?>
                                <li><a class="icon icon-circle icon-blue-bayoux icon-xxs-smallest fa fa-facebook" href="<?php echo esc_url(get_theme_mod('topbar_customize_fb')) ?>"></a></li>
                            <?php
                            endif;
                            ?>

                            <?php
                            if (get_theme_mod('topbar_customize_twitter')) :
                            ?>
                                <li><a class="icon icon-circle icon-blue-bayoux icon-xxs-smallest fa fa-twitter" href="<?php echo esc_url(get_theme_mod('topbar_customize_twitter')) ?>"></a></li>
                            <?php
                            endif;
                            ?>


                            <?php
                            if (get_theme_mod('topbar_customize_insta')) :
                            ?>
                                <li><a class="icon icon-circle icon-blue-bayoux icon-xxs-smallest fa fa-instagram" href="<?php echo esc_url(get_theme_mod('topbar_customize_insta')) ?>"></a></li>
                            <?php
                            endif;
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 text-md-left">
                    <p class="rights text-white"><span class="copyright-year"></span><span>&nbsp;&#169;&nbsp;</span><span>Get Client Membership.&nbsp;</span><a class="link-white-v2" href="privacy.html">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </section>
</footer>

</div>
<div class="snackbars" id="form-output-global"></div>
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__cent"></div>
            </div>
        </div>
    </div>
</div>


<?php wp_footer(); ?>
</body>

</html>