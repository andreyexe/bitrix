<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;
use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <?$APPLICATION->ShowHead();?>
    <meta charset="windows-1251">
    <title><?php $APPLICATION->ShowTitle() ?></title>
    <?php


    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/template_styles.css");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-1.8.2.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/slides.min.jquery.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.carouFredSel-6.1.0-packed.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/functions.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.refineslide.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.refineslide.min.js");
    Asset::getInstance()->addString(' <link rel="shortcut icon" type="image/x-icon" href="local/templates/.default/favicon.ico"/>');
    ?>
    <!--[if gte IE 9]>
    <style type="text/css">.gradient {
        filter: none;
    }</style><![endif]-->
</head>
<body>
<?php $APPLICATION->ShowPanel(); ?>
<div class="wrap">
    <div class="hd_header_area">
        <div class="hd_header">
            <table>
                <tr>
                    <td rowspan="2" class="hd_companyname">
                        <h1><a href="">Мебельный магазин</a></h1>
                    </td>
                    <td rowspan="2" class="hd_txarea">
                        <span class="tel">8 (495) 212-85-06</span> <br/>
                        <?php echo Loc::getMessage("WORKING_TIME");?> <span class="workhours">ежедневно с 9-00 до 18-00</span>
                    </td>
                    <td style="width:232px">
                        <form action="">
                            <div class="hd_search_form" style="float:right;">
                                <input placeholder="Поиск" type="text"/>
                                <input type="submit" value=""/>
                            </div>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 11px;">
                        <a href="" class="hd_singin">Войти на сайт</a><br>
                        <a href="" class="hd_signup">Зарегистрироватся</a>
                    </td>
                </tr>
            </table>
            <div class="nv_topnav">
                <ul>
                    <li><a href=""><span></span></a></li>
                    <li><a href=""><span>Компания</span></a>
                        <ul>
                            <li><a href="">Пункт 1</a></li>
                            <li><a href="">Пункт 2</a></li>
                            <li><a href="">Пункт 3</a></li>
                            <li><a href="">Пункт 4</a></li>
                        </ul>
                    </li>
                    <li><a href=""><span>Новости</span></a></li>
                    <li><a href=""><span>Каталог</span></a></li>
                    <li><a href=""><span>Акции</span></a>
                        <ul>
                            <li><a href="">Пункт 1</a>
                                <ul>
                                    <li><a href="">Пункт 1</a></li>
                                    <li><a href="">Пункт 2</a></li>
                                </ul>
                            </li>
                            <li><a href="">Пункт 2</a></li>
                            <li><a href="">Пункт 3</a></li>
                            <li><a href="">Пункт 4</a></li>
                        </ul>
                    </li>
                    <li><a href=""><span>Партнерам</span></a></li>
                    <li><a href=""><span>Контакты</span></a></li>
                    <div class="clearboth"></div>
                </ul>
            </div>
        </div>
    </div>

    <!--- // end header area --->
    <div class="bc_breadcrumbs">
        <ul>
            <li><a href="">Каталог</a></li>
            <li><a href="">Мебель</a></li>
            <li><a href="">Выставки и события</a></li>
        </ul>
        <div class="clearboth"></div>
    </div>
    <div class="main_container page">
        <div class="mn_container">
            <div class="mn_content">
                <div class="main_post">
                    <div class="main_title">
                        <p class="title">Новости</p>
                    </div>

                    <!-- workarea -->