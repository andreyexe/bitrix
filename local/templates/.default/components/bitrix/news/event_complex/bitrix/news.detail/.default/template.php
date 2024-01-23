<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if(is_array($arResult["DETAIL_PICTURE"])):?>
<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" align="left" alt="<?=$arResult["NAME"]?>"/>
<?endif;?>
<?echo $arResult["DETAIL_TEXT"];?>
<!--
<?php
/*$title = '';
if (isset($arResult['FIELDS']['NAME']))
$title .= $arResult['FIELDS']['NAME'];
if (isset($arResult['FIELDS']['DATE_ACTIVE_FROM']))
$title .= ' ' . $arResult['FIELDS']['DATE_ACTIVE_FROM'];

$APPLICATION->SetTitle($title);
//debug($arResult);
*/?>
<div class="ps_content">
    <img src="<?php
/*    if (isset($arResult['FIELDS']['DETAIL_PICTURE']['SRC']))
        echo $arResult['FIELDS']['DETAIL_PICTURE']['SRC'];
    */?>" align="left" alt=""/>
    <p>
        <?php
/*        if (isset($arResult['FIELDS']['DETAIL_TEXT']))
            echo $arResult['FIELDS']['DETAIL_TEXT'];
        */?>
    </p>
    <a href="<?php
/*    if (isset($arResult['LIST_PAGE_URL']))
        echo $arResult['LIST_PAGE_URL'];
    */?>" class="ps_backnewslist"> &larr; К списку новостей</a>
</div>-->

