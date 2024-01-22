<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
///debug($arResult['ITEMS']);
?>
<?php if (!empty($arResult['ITEMS'])): ?>
<div class="sb_action">
    <a href="<?php if (isset($arResult['ITEMS'][0]['DETAIL_PAGE_URL']))
        echo $arResult['ITEMS'][0]['DETAIL_PAGE_URL']; ?>">
        <img src="<?php if (isset($arResult['ITEMS'][0]['FIELDS']['PREVIEW_PICTURE']['SRC']))
            echo $arResult['ITEMS'][0]['FIELDS']['PREVIEW_PICTURE']['SRC']; ?>" alt=""/>
    </a>
    <h4>Акция</h4>
    <h5><a href="<?php if (isset($arResult['ITEMS'][0]['DETAIL_PAGE_URL']))
            echo $arResult['ITEMS'][0]['DETAIL_PAGE_URL']; ?>">
            <?php
            if (isset($arResult['ITEMS'][0]['FIELDS']['NAME']))
                echo $arResult['ITEMS'][0]['FIELDS']['NAME'].' всего за ';
            if (isset($arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['PRICE']['VALUE']))
                echo $arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['PRICE']['VALUE'].'Р';
            ?>
        </a>
    </h5>
    <a href="<?php if (isset($arResult['ITEMS'][0]['DETAIL_PAGE_URL']))
        echo $arResult['ITEMS'][0]['DETAIL_PAGE_URL']; ?>" class="sb_action_more">Подробнее &rarr;</a>
</div>
<?php endif; ?>

