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
//debug($arResult);
?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <div class="sb_reviewed">
        <img href="<?php if (isset($arResult['ITEMS'][0]['DETAIL_PAGE_URL']))
            echo $arResult['ITEMS'][0]['DETAIL_PAGE_URL']; ?>"
             src="<?php if (isset($arResult['ITEMS'][0]['FIELDS']['PREVIEW_PICTURE']['SRC']))
                 echo $arResult['ITEMS'][0]['FIELDS']['PREVIEW_PICTURE']['SRC']; ?>"
             class="sb_rw_avatar"
             alt=""
        />
        <span class="sb_rw_name">
        <?php if (isset($arResult['ITEMS'][0]['FIELDS']['NAME']))
            echo $arResult['ITEMS'][0]['FIELDS']['NAME']; ?>
    </span>
        <span class="sb_rw_job">
        <?php if (isset($arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['POSITION']['VALUE']) || isset($arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['COMPANY_NAME']['VALUE']))
            echo $arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['POSITION']['VALUE'] . ' ' . $arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['COMPANY_NAME']['VALUE']; ?>

    </span>
        <p href="<?php if (isset($arResult['ITEMS'][0]['DETAIL_PAGE_URL']))
            echo $arResult['ITEMS'][0]['DETAIL_PAGE_URL']; ?>">
            <?php if (isset($arResult['ITEMS'][0]['FIELDS']['PREVIEW_TEXT']))
                echo $arResult['ITEMS'][0]['FIELDS']['PREVIEW_TEXT']; ?>
        </p>
        <div class="clearboth"></div>
        <div class="sb_rw_arrow"></div>
    </div>
<?php endif; ?>

