<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>
    <!DOCTYPE HTML>
    <html lang="en-US">
    <head>
        <?php $APPLICATION->ShowHead(); ?>
        <meta charset="windows-1251">
        <title><?php $APPLICATION->ShowTitle() ?></title>
        <?php

        use Bitrix\Main\Page\Asset;
        use Bitrix\Main\Localization\Loc;
        use Bitrix\Main\Application;

        Loc::loadMessages(__FILE__);
        Asset::getInstance()->addCss("/local/templates/.default/template_styles.css");
        Asset::getInstance()->addJs("/local/templates/.default/js/jquery-1.8.2.min.js");
        Asset::getInstance()->addJs("/local/templates/.default/js/slides.min.jquery.js");
        Asset::getInstance()->addJs("/local/templates/.default/js/jquery.carouFredSel-6.1.0-packed.js");
        Asset::getInstance()->addJs("/local/templates/.default/js/functions.js");
        Asset::getInstance()->addJs("/local/templates/.default/js/jquery.refineslide.js");
        Asset::getInstance()->addJs("/local/templates/.default/js/jquery.refineslide.min.js");
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
        <?php include_once Application::getDocumentRoot() . '/local/templates/.default/include/header.php'; ?>
    </div>

    <!--- // end header area --->

    <script type="text/javascript">
        $().ready(function () {
            $(function () {
                $('#slides').slides({
                    preload: true,
                    preloadImage: 'local/templates/.default/images/loading.gif',
                    generateNextPrev: false,
                    autoHeight: true,
                    play: 4000,
                    effect: 'fade'
                });
            });
        });
    </script>

    <div class="sl_slider" id="slides">
        <div class="slides_container">
            <div>
                <div>
                    <img src="local/templates/.default/content/1.jpg" alt=""/>
                    <h2><a href="">Диваны и кресла</a></h2>
                    <p>Новая комбинация для ТВ БЕСТО не просто предмет мебели – она разработана, также, для мультимедиа.
                        Провода и сетевые кабели можно хранить внутри комбинации или протянуть через отверстие для
                        вентиляции. Секция полок обеспечивает эффективное использование стены, освобождая место на
                        полу.</p>
                    <a href="" class="sl_more">Подробнее &rarr;</a>
                </div>
            </div>
            <div>
                <div>
                    <img src="local/templates/.default/content/1.jpg" alt=""/>
                    <h2><a href="">Диваны и кресла</a></h2>
                    <p>Новая комбинация для ТВ БЕСТО не просто предмет мебели – она разработана, также, для мультимедиа.
                        Провода и сетевые кабели можно хранить внутри комбинации или протянуть через отверстие для
                        вентиляции. Секция полок обеспечивает эффективное использование стены, освобождая место на
                        полу.</p>
                    <a href="" class="sl_more">Подробнее &rarr;</a>
                </div>
            </div>
        </div>
    </div>


    <!--- // end slider area --->

    <div class="main_container homepage">

        <!-- events -->
        <div class="ev_events">
            <div class="ev_h">
                <h3>Ближайшие события</h3>
                <a href="" class="ev_allevents">Все мероприятия &rarr;</a>
            </div>
            <ul class="ev_lastevent">
                <li>
                    <h4><a href="">29 августа 2012, Москва</a></h4>
                    <p>Семинар производителей мебели России и СНГ, Обсуждение тенденций.</p>
                </li>
                <li>
                    <h4><a href="">30 августа 2012, Санкт-Петербург</a></h4>
                    <p>Открытие шоу-рума на Невском проспекте. Последние модели в большом ассортименте.</p>
                </li>
                <li>
                    <h4><a href="">31 августа 2012, Краснодар</a></h4>
                    <p>Открытие нового магазина в нашей дилерской сети.</p>
                </li>
            </ul>
            <div class="clearboth"></div>
        </div>
        <!-- // end events -->
        <div class="cn_hp_content">
            <div class="cn_hp_category">
                <ul>
                    <li>
                        <img src="local/templates/.default/content/1.png" alt=""/>
                        <h2><a href="">Мягкая мебель</a></h2>
                        <p>Диваны, кресла и прочая мягкая мебель <a class="cn_hp_categorymore" href="">&rarr;</a></p>
                        <div class="clearboth"></div>
                    </li>
                    <li>
                        <img src="local/templates/.default/content/2.png" alt=""/>
                        <h2><a href="">Офисная мебель</a></h2>
                        <p>Диваны, столы, стулья <a class="cn_hp_categorymore" href="">&rarr;</a></p>
                        <div class="clearboth"></div>
                    </li>
                    <li>
                        <img src="local/templates/.default/content/3.png" alt=""/>
                        <h2><a href="">Мебель для кухни</a></h2>
                        <p>Полки, ящики, столы и стулья <a class="cn_hp_categorymore" href="">&rarr;</a></p>
                        <div class="clearboth"></div>
                    </li>
                    <li>
                        <img src="local/templates/.default/content/4.png" alt=""/>
                        <h2><a href="">Детская мебель</a></h2>
                        <p>Кровати, стулья, мягкая детская мебель <a class="cn_hp_categorymore" href="">&rarr;</a></p>
                        <div class="clearboth"></div>
                    </li>
                </ul>
                <a href="" class="cn_hp_category_more">Все разделы каталога &rarr;</a>
            </div>
            <div class="cn_hp_post">
                <div class="cn_hp_post_new">
                    <h3>Новинки</h3>
                    <img src="local/templates/.default/content/7.png" alt=""/>
                    <p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
                    <div class="clearboth"></div>
                </div>
                <div class="cn_hp_post_action">
                    <h3>Акции</h3>
                    <img src="local/templates/.default/content/7.png" alt=""/>
                    <p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
                    <div class="clearboth"></div>
                </div>
                <div class="cn_hp_post_bestsellersn">
                    <h3>Хиты продаж</h3>
                    <img src="local/templates/.default/content/7.png" alt=""/>
                    <p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
                    <div class="clearboth"></div>
                </div>
            </div>
            <div class="cn_hp_lastnews">
                <h3><a href="">Новости</a></h3>
                <ul>
                    <li>
                        <h4><a href="">29 августа 2012</a></h4>
                        <p>Поступление лучших офисных кресел из Германии</p>
                    </li>
                    <li>
                        <h4><a href="">29 августа 2012</a></h4>
                        <p>Мастер-класс дизайнеров из Италии для производителей мебели</p>
                    </li>
                    <li>
                        <h4><a href="">29 августа 2012</a></h4>
                        <p>Открытие нашего нового офиса рядом с метро Измайлово</p>
                    </li>
                    <li>
                        <h4><a href="">29 августа 2012</a></h4>
                        <p>Наша дилерская сеть расширилась теперь ассортимент наших товаров доступен в Казани</p>
                    </li>
                </ul>
                <br/>
                <a href="" class="cn_hp_lastnews_more">Все новости &rarr;</a>
            </div>
            <div class="clearboth"></div>
        </div>
    </div>

<?php $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "feedbacks_slider",
    array(
        "ACTIVE_DATE_FORMAT" => "j F Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "COMPONENT_TEMPLATE" => "feedbacks_list",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(0 => "NAME", 1 => "PREVIEW_TEXT", 2 => "PREVIEW_PICTURE", 3 => "",),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "5",
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "N",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "4",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(0 => "POSITION", 1 => "COMPANY_NAME", 2 => "",),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    )
); ?>