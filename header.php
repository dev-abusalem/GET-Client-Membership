<?php

/****




 *** */
?>

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
            <div><a class="brand brand-md brand-inverse" href="index.html">
                    <?php

                    if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    }
                    ?>
                </a>
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
                                                <div class="unit-body"><a class="link-secondary" href="tel:<?php echo esc_html(get_theme_mod('topbar_customize_phone')) ?>"><?php echo esc_html(get_theme_mod('topbar_customize_phone')) ?></a></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="unit flex-row unit-spacing-xs align-items-center">
                                                <div class="unit-left"><span class="icon icon-xxs-small icon-cello fa-envelope-o"></span></div>
                                                <div class="unit-body"><a class="link-secondary" href="mailto:<?php echo esc_html(get_theme_mod('topbar_customize_email')) ?>"><?php echo esc_html(get_theme_mod('topbar_customize_email')) ?></a></div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="rd-navbar-aside-group">
                                        <ul class="list-inline list-inline-reset">
                                            <?php
                                            if (get_theme_mod('topbar_customize_fb')) :
                                            ?>
                                                <li><a class="icon icon-circle icon-silver-chalice-filled icon-xxs-smallest fa fa-facebook" href="<?php echo esc_url(get_theme_mod('topbar_customize_fb')) ?>"></a></li>
                                            <?php
                                            endif;
                                            ?>

                                            <?php
                                            if (get_theme_mod('topbar_customize_twitter')) :
                                            ?>
                                                <li><a class="icon icon-circle icon-silver-chalice-filled icon-xxs-smallest fa fa-twitter" href="<?php echo esc_url(get_theme_mod('topbar_customize_twitter')) ?>"></a></li>
                                            <?php
                                            endif;
                                            ?>


                                            <?php
                                            if (get_theme_mod('topbar_customize_insta')) :
                                            ?>
                                                <li><a class="icon icon-circle icon-silver-chalice-filled icon-xxs-smallest fa fa-instagram" href="<?php echo esc_url(get_theme_mod('topbar_customize_insta')) ?>"></a></li>
                                            <?php
                                            endif;
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="rd-navbar-search">
                                <form class="rd-search" action="<?php echo home_url('/') ?>" method="get">
                                    <div class="rd-search-inner">
                                        <div class="form-wrap">
                                            <label class="form-label" for="rd-search-form-input">Search...</label>
                                            <input value="<?php
                                                            echo get_search_query()
                                                            ?>" class="form-input" id="rd-search-form-input" type="search" name="s" autocomplete="off">
                                        </div>
                                        <button class="rd-search-submit" type="submit"></button>
                                    </div>
                                    <div class="rd-search-results-live" id="rd-search-results-live"></div>
                                </form>

                                <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search, .rd-navbar-search-wrap"></button>
                            </div>



                            <!-- <div class="rd-navbar-search">
                                <form action="<?php echo home_url('/') ?>" method="get">

                                    <div class="search_box" style="display: flex;align-items:center">

                                        <input name="s" value="<?php
                                                                echo get_search_query()
                                                                ?>" type="search" class="form-control" placeholder="Search">
                                        <button style="background: transparent; border:none; outline:none; color:#009865;cursor:pointer" type="submit"><i style="margin-left:-50px" class="fa fa-search"></i></button>
                                    </div>

                                </form>
                            </div> -->
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

                                    <?php
                                    if (get_theme_mod('topbar_customize_appion_btn')) :
                                    ?>
                                        <div class="rd-navbar-btn-wrap"><a class="btn btn-smaller btn-cello-outline" href="<?php echo esc_url(get_theme_mod('topbar_customize_appion_btn')) ?>">Appointment</a></div>
                                    <?php
                                    endif;
                                    ?>



                                    <?php
                                    wp_nav_menu(array(
                                        'menu'                 => 'Main Menu',
                                        'container'            => '',
                                        'container_class'      => '',
                                        'container_id'         => '',
                                        'container_aria_label' => '',
                                        'menu_class'           => 'rd-navbar-nav',
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
                                        'theme_location'       => 'main-menu',
                                    ));

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>