<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
$APPLICATION->SetTitle("Отзыв");
//debug($arResult);
?>

<div class="review-block">
    <div class="review-text">
        <div class="review-text-cont">
           <?php
           if(isset($arResult['FIELDS']['DETAIL_TEXT']))
               echo $arResult['FIELDS']['DETAIL_TEXT'];
           ?>
        </div>
        <div style="float: right; font-style: italic;">
            <?php
            if(isset($arResult['FIELDS']['NAME']))
                echo $arResult['FIELDS']['NAME'];
            ?>
        </div>
    </div>
    <div style="clear: both;" class="review-img-wrap"><img src="<?php
        if(isset($arResult['FIELDS']['DETAIL_PICTURE']['SRC']))
            echo $arResult['FIELDS']['DETAIL_PICTURE']['SRC'];
        ?>" alt="img"></div>
</div>
<a href="<?php
if(isset($arResult['LIST_PAGE_URL']))
    echo $arResult['LIST_PAGE_URL'];
?>" class="ps_backnewslist"> &larr; К списку отзывов</a>
