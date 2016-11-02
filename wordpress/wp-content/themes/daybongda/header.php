<!DOCTYPE html>
<html class="no-js" lang="en-US">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="<?php echo get_bloginfo('template_url')?>/"></base>
    <title>Dạy bóng đá</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel='stylesheet' id='validate-engine-css-css'  href='css/validationEngine.jquery.css?ver=2.6.15' type='text/css' media='all' />
    <link rel='stylesheet' id='eme_stylesheet-css'  href='css/events_manager.css?ver=4.2.2' type='text/css' media='all' />
    <link rel='stylesheet' id='css/groundwork-responsive.css-css'  href='css/groundwork-responsive.css?ver=4.2.2' type='text/css' media='screen' />
    <link rel='stylesheet' id='css/content-builder.css-css'  href='css/content-builder.css?ver=4.2.2' type='text/css' media='screen' />
    <link rel='stylesheet' id='css/font-awesome.min.css-css'  href='css/font-awesome.min.css?ver=4.2.2' type='text/css' media='screen' />
    <link rel='stylesheet' id='ultimate-style-min-css'  href='css/ultimate.min.css?ver=3.10' type='text/css' media='all' />
    <link rel='stylesheet' id='bsf-Defaults-css'  href='css/Defaults.css?ver=4.2.2' type='text/css' media='all' />
    <link rel='stylesheet' id='bsf-iconsmind-css'  href='css/iconsmind.css?ver=4.2.2' type='text/css' media='all' />
    <link rel='stylesheet' id='iconsmind.line-icons-css'  href='css/iconsmind-line-icons.css?ver=4.2.2' type='text/css' media='all' />
    <link rel='stylesheet' id='style.default-css'  href='css/style.css?ver=4.2.2' type='text/css' media='all' />
    <link rel='stylesheet' id='style.custom-css'  href='css/custom.css' type='text/css' media='all' />
    <script type='text/javascript' src='js/greensock.js?ver=1.11.8'></script>
    <script type='text/javascript' src='js/countUp.min.js?ver=4.2.2'></script>
    <script type='text/javascript' src='js/modernizr-2.6.2-respond-1.1.0.min.js?ver=4.2.2'></script>

    <?php wp_head(); ?>

    <!-- bxSlider Javascript file -->
    <script src="vendor/bxslider-4/js/jquery.bxslider.js"></script>
    <!-- bxSlider CSS file -->
    <link href="vendor/bxslider-4/css/jquery.bxslider.css" rel="stylesheet" />
</head>
<body <?php body_class('wpb-js-composer js-comp-ver-4.5.1 vc_responsive'); ?>>


<div class="cbp-row cbp_widget_row ch-header ch-sticky-header-enabled">
    <div class="cbp-container">
        <div class="cbp_widget_box one third double-padded">
            <div class="chp_widget_logo two-up-mobile">
                <a href="http://daybongda.com.vn/">
                    <img src="images/logo.png" alt="logo" height="80">
                </a>

            </div>
        </div>
        <div class="cbp_widget_box two thirds double-padded">
            <div id="cbp-menu-main" class="pull-right cbp_widget_menu">
                <div class="menu-main-menu-container">
                    <?php
                    $nav = array(
                        'theme_location'  => 'menu_top',
                        'menu'            => '',
                        'container'       => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'sf-menu ch-menu-main',
                        'menu_id'         => 'menu-main-menu',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    );

                    wp_nav_menu( $nav );
                    ?>
                    <!--<ul id="menu-main-menu" class="sf-menu ch-menu-main">
                        <li id="menu-item-284" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-277 current_page_item menu-item-has-children menu-item-284"><a href="http://showcase.aislinthemes.com/carry-hill/">Trang chủ</a>
                        </li>
                        <li id="menu-item-288" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-288"><a href="http://showcase.aislinthemes.com/carry-hill/about/">Giới thiệu</a>
                            <ul class="sub-menu">
                                <li id="menu-item-278" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-278"><a href="http://showcase.aislinthemes.com/carry-hill/about-full-width/">DFF Class</a></li>
                                <li id="menu-item-281" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-281"><a href="http://showcase.aislinthemes.com/carry-hill/about-boxed/">Huấn luyện viên</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-253" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-253"><a href="#">Lớp học</a>
                            <ul class="sub-menu">
                                <li id="menu-item-300" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-300"><a href="http://showcase.aislinthemes.com/carry-hill/events/">Lớp nhí (U4-U7)</a></li>
                                <li id="menu-item-300" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-300"><a href="http://showcase.aislinthemes.com/carry-hill/events/">Lớp học hè (2015)</a></li>
                                <li id="menu-item-300" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-300"><a href="http://showcase.aislinthemes.com/carry-hill/events/">Học bóng đá tại nhà</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-287" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-287"><a href="http://showcase.aislinthemes.com/carry-hill/blog/">Thông tin</a>
                            <ul class="sub-menu">
                                <li id="menu-item-280" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-280"><a href="http://showcase.aislinthemes.com/carry-hill/blog-2-cols/">Tin tức</a></li>
                                <li id="menu-item-280" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-280"><a href="http://showcase.aislinthemes.com/carry-hill/blog-2-cols/">Hình ảnh</a></li>
                                <li id="menu-item-280" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-280"><a href="http://showcase.aislinthemes.com/carry-hill/blog-2-cols/">Videos</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-286" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-286"><a href="http://showcase.aislinthemes.com/carry-hill/projects/">Liên hệ</a></li>

                    </ul>-->
                </div>
            </div>
        </div>
    </div>
</div>