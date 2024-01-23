<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Application;

Loc::loadMessages(__FILE__);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <?$APPLICATION->ShowHead();?>
    <meta charset="windows-1251">
    <title><?php $APPLICATION->ShowProperty("title")?></title>
    <?php


    Asset::getInstance()->addCss("/local/templates/.default/template_styles.css");
    Asset::getInstance()->addJs("/local/templates/.default/js/jquery-1.8.2.min.js");
    Asset::getInstance()->addJs("/local/templates/.default/js/slides.min.jquery.js");
    Asset::getInstance()->addJs("/local/templates/.default/js/jquery.carouFredSel-6.1.0-packed.js");
    Asset::getInstance()->addJs("/local/templates/.default/js/functions.js");
    Asset::getInstance()->addJs("/local/templates/.default/js/jquery.refineslide.js");
    Asset::getInstance()->addJs("/local/templates/.default/js/jquery.refineslide.min.js");
    Asset::getInstance()->addString(' <link rel="shortcut icon" type="image/x-icon" href="/local/templates/.default/favicon.ico"/>');
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
        <?php include_once Application::getDocumentRoot() .'/local/templates/.default/include/header.php';?>
    </div>

    <!--- // end header area --->
    <?php $APPLICATION->IncludeComponent(
        "bitrix:breadcrumb",
        "nav",
        array(
            "PATH" => "",
            "SITE_ID" => "s1",
            "START_FROM" => "0"
        )
    ); ?>
    <div class="main_container page">
        <div class="mn_container">
            <div class="mn_content">
                <div class="main_post">
                    <div class="main_title">
                        <p class="title"><?php $APPLICATION->ShowTitle() ?></p>
                    </div>

                    <!-- workarea -->