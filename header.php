<!DOCTYPE html>
<html class="wide wow-animation" <?php language_attributes(); ?>>

<head>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Arvo:400,400i,700,700i%7CLato:300,300italic,400,400italic,700,900%7CPlayfair+Display:700italic,900">

    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="page">
        <div class="page-loader page-loader-variant-1">
            <div><a class="brand brand-md brand-inverse" href="index.html"><img src="images/brand-varinat-2.png" width="118" height="34" alt=""></a>
                <div class="page-loader-body">
                    <div id="spinningSquaresG">
                        <div class="spinningSquaresG" id="spinningSquaresG_1"></div>
                        <div class="spinningSquaresG" id="spinningSquaresG_2"></div>
                        <div class="spinningSquaresG" id="spinningSquaresG_3"></div>
                        <div class="spinningSquaresG" id="spinningSquaresG_4"></div>
                        <div class="spinningSquaresG" id="spinningSquaresG_5"></div>
                        <div class="spinningSquaresG" id="spinningSquaresG_6"></div>
                        <div class="spinningSquaresG" id="spinningSquaresG_7"></div>
                        <div class="spinningSquaresG" id="spinningSquaresG_8"></div>
                    </div>
                </div>
            </div>
        </div>
        <header class="page-head">
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-corporate-light" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-stick-up-clone="false" data-md-stick-up-offset="53px" data-lg-stick-up-offset="53px" data-md-stick-up="true" data-lg-stick-up="true">
                    <div class="rd-navbar-inner">
                        <div class="rd-navbar-aside-wrap">
                            <div class="rd-navbar-aside">
                                <div class="rd-navbar-aside-toggle" data-rd-navbar-toggle=".rd-navbar-aside"><span></span></div>
                                <div class="rd-navbar-aside-content">
                                    <ul class="rd-navbar-aside-group list-units">
                                        <li>
                                            <div class="unit flex-row unit-spacing-xs align-items-center">
                                                <div class="unit-left"><span class="icon icon-xxs icon-cello material-icons-phone"></span></div>
                                                <div class="unit-body"><a class="link-secondary" href="tel:#">+1 (232) 349–8447</a></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="unit flex-row unit-spacing-xs align-items-center">
                                                <div class="unit-left"><span class="icon icon-xxs-small icon-cello fa-envelope-o"></span></div>
                                                <div class="unit-body"><a class="link-secondary" href="mailto:#">info@demolink.org</a></div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="rd-navbar-aside-group">
                                        <ul class="list-inline list-inline-reset">
                                            <li><a class="icon icon-circle icon-silver-chalice-filled icon-xxs-smallest fa fa-facebook" href="#"></a></li>
                                            <li><a class="icon icon-circle icon-silver-chalice-filled icon-xxs-smallest fa fa-twitter" href="#"></a></li>
                                            <li><a class="icon icon-circle icon-silver-chalice-filled icon-xxs-smallest fa fa-google-plus" href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="rd-navbar-search">
                                <form class="rd-search" action="search-results.html" method="GET" data-search-live="rd-search-results-live" data-search-live-count="6">
                                    <div class="rd-search-inner">
                                        <div class="form-wrap">
                                            <label class="form-label" for="rd-search-form-input">Search...</label>
                                            <input class="form-input" id="rd-search-form-input" type="text" name="s" autocomplete="off">
                                        </div>
                                        <button class="rd-search-submit" type="submit"></button>
                                    </div>
                                    <div class="rd-search-results-live" id="rd-search-results-live"></div>
                                </form>
                                <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search, .rd-navbar-search-wrap"></button>
                            </div>
                        </div>
                        <div class="rd-navbar-group">
                            <div class="rd-navbar-panel">
                                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>

                                <a class="rd-navbar-brand brand" href="<?php echo site_url() ?>">

                                    <?php

                                    if (function_exists('the_custom_logo')) {
                                        the_custom_logo();
                                    }

                                    ?>
                                </a>

                            </div>
                            <div class="rd-navbar-nav-wrap">
                                <div class="rd-navbar-nav-inner">
                                    <div class="rd-navbar-btn-wrap"><a class="btn btn-smaller btn-cello-outline" href="appointment.html">Appointment</a></div>
                                    <!-- <ul class="rd-navbar-nav">
                                        <li class="active"><a href="index.html">Home</a>
                                        </li>
                                        <li><a href="about-us.html">About Us</a>
                                        </li>
                                        <li><a href="services.html">Services</a>
                                        </li>
                                        <li><a href="#">Cases</a>
                                            <ul class="rd-navbar-dropdown">
                                                <li><a href="grid-gallery.html">Grid gallery</a>
                                                </li>
                                                <li><a href="masonry-gallery.html">Masonry gallery</a>
                                                </li>
                                                <li><a href="cobbles-gallery.html">Cobbles gallery</a>
                                                </li>
                                                <li><a href="gallery-item.html">Gallery item</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Blog</a>
                                            <ul class="rd-navbar-dropdown">
                                                <li><a href="classic-blog.html">Classic blog</a>
                                                </li>
                                                <li><a href="grid-blog.html">Grid blog</a>
                                                </li>
                                                <li><a href="blog-line.html">Blog Line</a>
                                                </li>
                                                <li><a href="masonry-blog.html">Masonry Blog</a>
                                                </li>
                                                <li><a href="blog-post.html">Blog post</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages</a>
                                            <ul class="rd-navbar-megamenu">
                                                <li>
                                                    <h5 class="rd-megamenu-header">Cases</h5>
                                                    <ul class="rd-navbar-list">
                                                        <li><a href="grid-gallery.html">Grid gallery</a></li>
                                                        <li><a href="masonry-gallery.html">Masonry gallery</a></li>
                                                        <li><a href="cobbles-gallery.html">Cobbles gallery</a></li>
                                                        <li><a href="gallery-item.html">Gallery item</a></li>
                                                    </ul>
                                                    <h5 class="rd-megamenu-header">Pages</h5>
                                                    <ul class="rd-navbar-list">
                                                        <li><a href="about-us.html">About us</a></li>
                                                        <li><a href="services.html">Services</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h5 class="rd-megamenu-header">Pages</h5>
                                                    <ul class="rd-navbar-list">
                                                        <li><a href="appointment.html">Make an Appointment</a></li>
                                                        <li><a href="clients.html">Clients</a></li>
                                                        <li><a href="client-testimonials.html">Client testimonials</a></li>
                                                        <li><a href="our-team.html">Our team</a></li>
                                                        <li><a href="team-member-profile.html">Team member profile</a></li>
                                                        <li><a href="careers.html">Careers</a></li>
                                                        <li><a href="pricing.html">Pricing</a></li>
                                                        <li><a href="faq.html">FAQ</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h5 class="rd-megamenu-header">Extras</h5>
                                                    <ul class="rd-navbar-list">
                                                        <li><a href="page-404.html">404</a></li>
                                                        <li><a href="page-503.html">503</a></li>
                                                        <li><a href="maintenance.html">Maintenance</a></li>
                                                        <li><a href="coming-soon.html">Coming soon</a></li>
                                                        <li><a href="login.html">Login</a></li>
                                                        <li><a href="register.html">Register</a></li>
                                                        <li><a href="search-results.html">Search results</a></li>
                                                        <li><a href="privacy.html">Terms of use</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h5 class="rd-megamenu-header">Components</h5>
                                                    <ul class="rd-navbar-list">
                                                        <li><a href="accordion.html">Accordion</a></li>
                                                        <li><a href="buttons.html">Buttons</a></li>
                                                        <li><a href="grid.html">Grid</a></li>
                                                        <li><a href="forms.html">Forms</a></li>
                                                        <li><a href="icons.html">Icons</a></li>
                                                        <li><a href="icon-lists.html">Icon lists</a></li>
                                                        <li><a href="progress-bars.html">Progress bars</a></li>
                                                        <li><a href="tabs.html">Tabs</a></li>
                                                        <li><a href="table-styles.html">Table styles</a></li>
                                                        <li><a href="typography.html">Typography</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="contacts-us.html">Contacts</a>
                                        </li>
                                    </ul> -->
                                    <ul class="rd-navbar-nav">
                                        <?php
                                        wp_nav_menu(array(
                                            'menu'           => 'Main Menu',
                                            'theme_location' => 'main-menu',
                                            'fallback_cb'    => false
                                        ));
                                        ?>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>