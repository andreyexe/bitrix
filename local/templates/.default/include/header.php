<?php

use Bitrix\Main\Localization\Loc;

?>
<div class="hd_header">
    <table>
        <tr>
            <td rowspan="2" class="hd_companyname">
                <h1><a href="">Мебельный магазин</a></h1>
            </td>
            <td rowspan="2" class="hd_txarea">
                <span class="tel"><?php $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/phone.php"
                        )
                    ); ?><br></span> <br/>
                <?php echo Loc::getMessage("WORKING_TIME"); ?> <span class="workhours">ежедневно с 9-00 до 18-00</span>
            </td>
            <td style="width:232px">
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:search.form",
                    "search_head",
                    Array(
                        "PAGE" => "#SITE_DIR#search/",
                        "USE_SUGGEST" => "N"
                    )
                );?>
            </td>
        </tr>
        <tr>
            <td style="padding-top: 11px;">
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:system.auth.form",
                    "auth",
                    Array(
                        "COMPONENT_TEMPLATE" => "auth",
                        "FORGOT_PASSWORD_URL" => "/user/",
                        "PROFILE_URL" => "/user/profile.php",
                        "REGISTER_URL" => "/user/registration.php",
                        "SHOW_ERRORS" => "Y"
                    )
                );?><br>
            </td>
        </tr>
    </table>
    <?php
    $APPLICATION->IncludeComponent("bitrix:menu", "top_multi", array(
        "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
        "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
        "DELAY" => "N",    // Откладывать выполнение шаблона меню
        "MAX_LEVEL" => "2",    // Уровень вложенности меню
        "MENU_CACHE_GET_VARS" => "",    // Значимые переменные запроса
        "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
        "MENU_CACHE_TYPE" => "N",    // Тип кеширования
        "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
        "ROOT_MENU_TYPE" => "top",    // Тип меню для первого уровня
        "USE_EXT" => "N",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
        "COMPONENT_TEMPLATE" => "vertical_multilevel"
    ), false
    );
    ?>
</div>