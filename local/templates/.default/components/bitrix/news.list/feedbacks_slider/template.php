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

<script type="text/javascript">
    $(document).ready(function () {

        $("#foo").carouFredSel({
            items: 2,
            prev: '#rwprev',
            next: '#rwnext',
            scroll: {
                items: 1,
                duration: 2000
            }
        });
    });
</script>

<div class="rw_reviewed">
    <div class="rw_slider">
        <h4>Отзывы</h4>
        <ul id="foo">
            <?php foreach ($arResult["ITEMS"] as $arItem): ?>
                <li>
                    <div class="rw_message">
                        <img src="<?php if (isset($arItem['FIELDS']['PREVIEW_PICTURE']['SRC']))
                            echo $arItem['FIELDS']['PREVIEW_PICTURE']['SRC']; ?>" class="rw_avatar" alt=""/>
                        <span class="rw_name">
                            <?php if (isset($arItem['FIELDS']['NAME']))
                                echo $arItem['FIELDS']['NAME']; ?>
                        </span>
                        <span class="rw_job">
                            <?php if (isset($arItem['DISPLAY_PROPERTIES']['POSITION']['VALUE']) || isset($arItem['DISPLAY_PROPERTIES']['COMPANY_NAME']['VALUE']))
                                echo $arItem['DISPLAY_PROPERTIES']['POSITION']['VALUE'] . ' ' . $arItem['DISPLAY_PROPERTIES']['COMPANY_NAME']['VALUE']; ?>
                        </span>
                        <p>
                            <?php if (isset($arItem['FIELDS']['PREVIEW_TEXT']))
                                echo $arItem['FIELDS']['PREVIEW_TEXT']; ?>
                        </p>
                        <div class="clearboth"></div>
                        <div class="rw_arrow"></div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
        <div id="rwprev"></div>
        <div id="rwnext"></div>
        <a href="<?php if (isset($arItem['LIST_PAGE_URL'])) echo $arItem['LIST_PAGE_URL']; ?>"
           class="rw_allreviewed">Все отзывы</a>
    </div>
</div>