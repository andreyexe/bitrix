<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if (!empty($arResult['ITEMS'])): ?>
    <?php foreach ($arResult['ITEMS'] as $arItem): ?>
        <div class="ps_head">
            <a class="ps_head_link"
               href="<?php if (isset($arItem['DETAIL_PAGE_URL']))
                   echo $arItem['DETAIL_PAGE_URL']; ?>">
                <h2 class="ps_head_h">
                    <?php
                    if (isset($arItem['FIELDS']['NAME']))
                        echo $arItem['FIELDS']['NAME']; ?>
                </h2>
            </a>
            <span class="ps_date">
        Пройдет <?php if (isset($arItem['FIELDS']['DATE_ACTIVE_FROM']))
                    echo ' ' . $arItem['FIELDS']['DATE_ACTIVE_FROM']; ?>
    </span>
        </div>
        <div class="ps_content">
            <img src="<?php if (isset($arItem['FIELDS']['PREVIEW_PICTURE']['SRC']))
                echo $arItem['FIELDS']['PREVIEW_PICTURE']['SRC']; ?>"
                 href="<?php if (isset($arItem['DETAIL_PAGE_URL']))
                     echo $arItem['DETAIL_PAGE_URL']; ?>"
                 align="left" alt=""/>
            <p>
                <?php if (isset($arItem['FIELDS']['PREVIEW_TEXT']))
                    echo $arItem['FIELDS']['PREVIEW_TEXT']; ?>
            </p>
        </div>
    <?php endforeach; ?>
<?php endif; ?>