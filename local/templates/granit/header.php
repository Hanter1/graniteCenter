<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Wish shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?$APPLICATION->ShowTitle();?></title>

    <?
    //Подключение CSS
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles/bootstrap4/bootstrap.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/plugins/OwlCarousel2-2.2.1/owl.carousel.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/plugins/OwlCarousel2-2.2.1/owl.theme.default.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/plugins/OwlCarousel2-2.2.1/animate.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/plugins/colorbox/colorbox.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/plugins/font-awesome-4.7.0/css/font-awesome.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles/main_styles.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles/responsive.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles/contact_responsive.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles/contact.css');

    //Подключение JS
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery-3.2.1.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/styles/bootstrap4/popper.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/styles/bootstrap4/bootstrap.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/plugins/OwlCarousel2-2.2.1/owl.carousel.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/plugins/easing/easing.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/plugins/parallax-js-master/parallax.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/plugins/colorbox/jquery.colorbox-min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/custom.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . 'js/contact_custom.js');

    //Подключение ссылок
    Asset::getInstance()->addString('<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>');
    ?>
    <?$APPLICATION->ShowHead();?>
</head>
<body>
<div id="panel">
    <?$APPLICATION->ShowPanel();?>
</div>
<div class="super_container">

    <!-- Header -->

    <header class="header">
        <div class="header_inner d-flex flex-row align-items-center justify-content-start">
            <div class="logo"><a href="/">Центр гранита</a></div>
            <? $APPLICATION->IncludeComponent("bitrix:menu", "top_menu", [
                                "ALLOW_MULTI_SELECT"    => "N",
                                "CHILD_MENU_TYPE"       => "",
                                "DELAY"                 => "N",
                                "MAX_LEVEL"             => "2",
                                "MENU_CACHE_GET_VARS"   => [],
                                "MENU_CACHE_TIME"       => "3600",
                                "MENU_CACHE_TYPE"       => "N",
                                "MENU_CACHE_USE_GROUPS" => "N",
                                "ROOT_MENU_TYPE"        => "top",
                                "USE_EXT"               => "Y",
                                "COMPONENT_TEMPLATE"    => "top_menu",
                            ], false); ?>

            <div class="header_content ml-auto">
                <div class="search header_search">
                    <form action="#">
                        <input type="search" class="search_input" required="required">
                        <button type="submit" id="search_button" class="search_button"><img src="<?=SITE_TEMPLATE_PATH?>/images/magnifying-glass.svg" alt=""></button>
                    </form>
                </div>
                <div class="shopping">
                    <!-- Cart -->
<!--                    <a href="#">-->
<!--                        <div class="cart">-->
<!--                            <img src="--><?//=SITE_TEMPLATE_PATH?><!--/images/shopping-bag.svg" alt="">-->
<!--                            <div class="cart_num_container">-->
<!--                                <div class="cart_num_inner">-->
<!--                                    <div class="cart_num">1</div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </a>-->
                    <!-- Star -->
<!--                    <a href="#">-->
<!--                        <div class="star">-->
<!--                            <img src="--><?//=SITE_TEMPLATE_PATH?><!--/images/star.svg" alt="">-->
<!--                            <div class="star_num_container">-->
<!--                                <div class="star_num_inner">-->
<!--                                    <div class="star_num">0</div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </a>-->
                    <!-- Avatar -->
<!--                    <a href="#">-->
<!--                        <div class="avatar">-->
<!--                            <img src="--><?//=SITE_TEMPLATE_PATH?><!--/images/avatar.svg" alt="">-->
<!--                        </div>-->
<!--                    </a>-->
                </div>
            </div>

            <div class="burger_container d-flex flex-column align-items-center justify-content-around menu_mm"><div></div><div></div><div></div></div>
        </div>
    </header>
    <!-- Menu -->

    <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
        <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
        <div class="logo menu_mm"><a href="/">Центр гранита</a></div>
        <div class="search">
            <form action="#">
                <input type="search" class="search_input menu_mm" required="required">
                <button type="submit" id="search_button_menu" class="search_button menu_mm"><img class="menu_mm" src="<?=SITE_TEMPLATE_PATH?>/images/magnifying-glass.svg" alt=""></button>
            </form>
        </div>
        <? $APPLICATION->IncludeComponent("bitrix:menu", "TopMenuMobile", [
            "ALLOW_MULTI_SELECT"    => "N",
            "CHILD_MENU_TYPE"       => "left",
            "DELAY"                 => "N",
            "MAX_LEVEL"             => "2",
            "MENU_CACHE_GET_VARS"   => [],
            "MENU_CACHE_TIME"       => "3600",
            "MENU_CACHE_TYPE"       => "N",
            "MENU_CACHE_USE_GROUPS" => "N",
            "ROOT_MENU_TYPE"        => "top",
            "USE_EXT"               => "N",
            "COMPONENT_TEMPLATE"    => "top_menu",
        ], false); ?>

    </div>
    <!-- Home -->
<?php if ($APPLICATION->GetCurDir() !== '/'): ?>
    <div class="homes">
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="/upload/iblock/5fa/r6eq1qy3wfg4hambawzpcwhvd5tnpz8c.jpg" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_container">
                        <div class="home_content">
                            <div class="home_title"><?php $APPLICATION->ShowTitle(false); ?></div>
                            <?php $APPLICATION->IncludeComponent("bitrix:breadcrumb", "TopNavigate", Array(
                                "PATH" => "",
                                "SITE_ID" => "s1",
                                "START_FROM" => "0",
                                "COMPONENT_TEMPLATE" => ".default"
                            ),
                                false
                            );?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>